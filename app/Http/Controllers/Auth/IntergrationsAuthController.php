<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;

class IntergrationsAuthController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/intergrations';

    /**
     * Redirect the user to the Eve Online authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('eveonline')->redirect();
        
    }

    /**
     * Obtain the user information from Eve Online.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $Intuser = Socialite::driver('eveonline')->user();

        $IntauthUser = $this->findOrCreateUser($Intuser);
        Auth::login($IntauthUser, true);
        return redirect($this->redirectTo);

        //dd($user);
    }

    public function findOrCreateUser($Intuser)
    {

        $authUser = eseye_deets::where('name', $Intuser->name)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'character_id' => $user->id,
            'refresh_token' => $user->token
        ]);
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