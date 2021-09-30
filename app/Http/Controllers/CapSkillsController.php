<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Arr;

use Seat\Eseye\Cache\NullCache;
use Seat\Eseye\Configuration;
use Seat\Eseye\Containers\EsiAuthentication;
use Seat\Eseye\Eseye;

use Auth;
use DB;

class CapSkillsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

		$character = $_GET['t'];	
		$skills_pull = DB::table('users')->where('char_ident', $character)->first();
		$skillsArray = array();
		$checkArray = array();

		if($skills_pull){

			$skills = json_decode($skills_pull->char_skills, true);
			$char_name = $skills_pull->name;
			$char_id = $skills_pull->char_id;
			$char_corp = $skills_pull->char_corp;
			$char_alliance = $skills_pull->char_alliance;

			foreach($skills as $key => $skill){
				$skillz = DB::table('invTypes')->where('typeID', $skill['skill_id'])->value('typeName');
				$trinedTo = $skill['trained_skill_level'];

				$skillsArray[$key] = array('skillName' => $skillz, 'trainedTo' => $trinedTo);
			}

			$requiredSkills = [
				"Gallente Dreadnought" => 3,
				"Minmatar Dreadnought" => 3,
				"Capital Hybrid Turret" => 3,
				"Capital Projectile Turret" => 3,

				"Jump Drive Calibration" => 5,
				"Jump Fuel Conservation" => 4,
				"Resistance Phasing" => 4,

				"Hull Upgrades"=> 5,
				"Shield Upgrades" => 4,

				"Energy Pulse Weapons" => 1,
				"Capacitor Management" => 5,
				"Capacitor Systems Operation" => 5,

				"Advanced Target Management" => 3,

				"Fighters" => 3,
				"Support Fighters" => 3,
				"Light Fighters" => 3,

				"Fighter Hangar Management" => 4,
				"Drone Navigation" => 4,
				"Drone Durability" => 4,

				"Drone Sharpshooting" => 4,
				"Drone Interfacing" => 4,
				"Explosive Armor Compensation" => 4,

				"Thermal Armor Compensation" => 4,
				"EM Armor Compensation" => 4,
				"Kinetic Armor Compensation" => 4,

				"Tactical Shield Manipulation" => 5,
				"Armor Layering" => 4,
				"Afterburner" => 4,
				"Acceleration Control" => 4,

				"Fuel Conservation" => 4,

				"Amarr Carrier" => 3,
				"Caldari Carrier" => 3,
				"Gallente Carrier" => 3,
				"Minmatar Carrier" => 3,

				"Tactical Logistics Reconfiguration" => 1,
				"Capital Capacitor Emission Systems" => 3,
				"Repair Drone Operation" => 3,

				"Capital Shield Operation" => 4,
				"Capital Shield Emission Systems" => 3,

				"Capital Repair Systems" => 4,
				"Capital Remote Armor Repair Systems" => 3,
				"Explosive Armor Compensation" => 4,
				"Thermal Armor Compensation" => 4,
				"EM Armor Compensation" => 4,
				"Kinetic Armor Compensation" => 4,
				"Armor Layering" => 4,

				"Tactical Weapon Reconfiguration" => 1,
				"Weapon Upgrades" => 4,
				"Advanced Weapon Upgrades" => 5,

				"Amarr Dreadnought" => 3,
				"Capital Energy Turret" => 3,
				"Controlled Bursts" => 4,
				"Motion Prediction" => 4,
				"Rapid Firing" => 4,
				"Sharpshooter" => 4,
				"Surgical Strike" => 4,
				"Trajectory Analysis" => 4,

				"Caldari Dreadnought" => 3,
				"Guided Missile Precision" => 4,
				"Missile Bombardment" => 4,
				"Missile Projection" => 4,
				"Rapid Launch" => 4,
				"Target Navigation Prediction" => 4,
				"Warhead Upgrades" => 4,

				"XL Cruise Missiles" => 4,
				"XL Torpedoes" => 4,

				"Explosive Shield Compensation" => 4,
				"Thermal Shield Compensation" => 4,
				"EM Shield Compensation" => 4,
				"Kinetic Shield Compensation" => 4,

				"" => 4,
				"" => 4,
				"" => 4,
				"" => 4,
				"" => 4,
				"" => 4,
				"" => 4,
				"" => 4,
				"" => 4,
			];
			$requiredSkillNames = array_keys($requiredSkills);

			$relevantSkills = array_map(
				function($name) use ($requiredSkills, $skillsArray) {
				  $foundSkill = array_search($name, array_column($skillsArray, 'skillName'));
			  
				  return [
					'skillName' => $name,
					'requiredLevel' => $requiredSkills[$name],
					'injected' => (bool) $foundSkill,
					'actualLevel' => (bool) $foundSkill ? $skillsArray[$foundSkill]['trainedTo'] : 0
				  ];
				}, 
				$requiredSkillNames
			  );

			return view('c', compact('skillsArray','char_name','char_id','char_corp','char_alliance','relevantSkills'));


		}else{
			return abort(404);
		}

    }

}
