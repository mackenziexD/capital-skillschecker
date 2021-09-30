<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

// esi shit
use Seat\Eseye\Cache\NullCache;
use Seat\Eseye\Configuration;
use Seat\Eseye\Containers\EsiAuthentication;
use Seat\Eseye\Eseye;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use DB;

class AuthController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Redirect the user to the Eve Online authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
		try {
			return Socialite::driver('eveonline')->setScopes(explode(' ', 'esi-skills.read_skills.v1'))->redirect();
		} catch(\InvalidStateException $e) {
			abourt(400);
		}
        
        
    }

    /**
     * Obtain the user information from Eve Online.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
		try{
			$user = Socialite::driver('eveonline')->stateless()->user();

			$authUser = $this->findOrCreateUser($user);
			Auth::login($authUser, true); 
		  
			return redirect('/c?t='.Auth::user()->char_ident);

		}catch(\InvalidStateException $e) {
			abourt(400);
		}
        

        //var_dump($user);
	//echo "<br>";
    }

    public function findOrCreateUser($user)
    {
	try{
        $user = Socialite::driver('eveonline')->user();

		$configuration = Configuration::getInstance();
		$configuration->cache = NullCache::class;

		// Prepare an authentication container for ESI
		$authentication = new EsiAuthentication([
				'client_id'     => '94a38b966f1d4c2f853cec9d65bc4edc',
				'secret'        => 'wcLEe73q4JnS8BAwt6850UFdAxtvMiGMyfQRcvyy',
				'refresh_token' => $user->refreshToken,
		]);

		// Instantiate a new ESI instance.
		$esi = new Eseye($authentication);

		$charinfo = $esi->invoke('get', '/characters/{character_id}/', [
				'character_id' => $user->id,
		]);

		$skills = $esi->invoke('get', '/characters/{character_id}/skills/', [
				'character_id' => $user->id,
		]);

		$json = json_encode($skills->skills);


		$ident_made = false;

		if(!$ident_made){
			while(!$ident_made){
				$ident = uniqid();
				$ident_made = DB::table('users')->where('char_ident', $ident)->get();
			}
		} else {
			$ident_made = true;
		}

		$skillDecode = json_decode($json);
		foreach($skillDecode as $skill){
			$skillz = DB::table('invTypes')->where('typeID', $skill->skill_id)->value('typeName');
		}

		return User::create([
				'refresh_token' => $user->refreshToken,
				'name'     => $user->name,
				'char_id'     => $user->id,
				'char_skills'     => $json,
				'char_ident'     => $ident,
				'char_corp'     => $charinfo->corporation_id,
				'char_alliance'     => $charinfo->alliance_id ?? NULL,
			]);
		
	}catch(\InvalidStateException $e) {
		abourt(400);
	}
    }
	public function logout(Request $request)
	{
    		Auth::logout();

    		$request->session()->invalidate();

    		$request->session()->regenerateToken();

    		return redirect('/');
	}
}

?>