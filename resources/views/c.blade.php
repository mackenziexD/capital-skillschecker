@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
		<h2>{{$char_name}}</h2>
		<img src="https://images.evetech.net/characters/{{$char_id}}/portrait?size=128" class="ui middle aligned image" />
		<img src="https://images.evetech.net/corporations/{{$char_corp}}/logo?size=128" class="ui middle aligned image" />
		<img src="https://images.evetech.net/alliances/{{$char_alliance}}/logo?size=128" class="ui middle aligned image" />
 <br> <br> 
	<div class="form-group">
		<p class="form-text text-muted"><strong>IF YOU HAVE</strong> all of the general skills Copy following link to your Capital Group Application doc:</p>
    	<input type="link" class="form-control" id="exampleInputEmail1" aria-describedby="link" value="{{url()->full()}}">
  </div>
 <hr>
 <br>
 <h3>Key:</h3>
	<span class="skill-level" style="    float: left !important;">
		<span class="skill-level-box"></span> : Not Trained
		<br>
		<span class="skill-level-box skill-level-box-trained"></span> : Skill Trained
		<br>
		<span class="skill-level-box skill-level-box-required skill-level-box-required-key skill-level-box-trained skill-level-box-trained-key"></span> : Required Skill Trained
		<br>
		<span class="skill-level-box skill-level-box-required skill-level-box-required key"></span> : Required Skill Not Trained
	</span>
	<br> <br> <br> <br><br> 
 <div class="requirement-group">
	<h3>
		General
	</h3>

	<div class="requirement-group-skills">
		@foreach ($relevantSkills as $skill)
			
			
			@if ($skill['skillName'] == 'Jump Drive Calibration')

				@if($skill['actualLevel'] > 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@endif
			</div>
			@endif

			@if ($skill['skillName'] == 'Jump Fuel Conservation')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif

			@if ($skill['skillName'] == 'Resistance Phasing')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif

			@if ($skill['skillName'] == 'Hull Upgrades')
				
				@if( $skill['actualLevel'] > 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@endif
				
			</div>
			@endif

			@if ($skill['skillName'] == 'Shield Upgrades')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif

			@if ($skill['skillName'] == 'Tactical Shield Manipulation')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif

			@if ($skill['skillName'] == 'Energy Pulse Weapons')
				
				@if( $skill['actualLevel'] >= 1)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif

			@if ($skill['skillName'] == 'Capacitor Management')
				
				@if( $skill['actualLevel'] > 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@endif
				
			</div>
			@endif

			@if ($skill['skillName'] == 'Capacitor Systems Operation')
				
				@if( $skill['actualLevel'] > 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@endif
				
			</div>
			@endif

			@if ($skill['skillName'] == 'Advanced Target Management')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif

		@endforeach	

	</div>
</div>

<div class="requirement-group">
    <h3>
        Carriers
    </h3>

    <div class="requirement-group-skills">
	
							

	@foreach ($relevantSkills as $skill)
			@if ($skill['skillName'] == 'Fighters')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Support Fighters')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Light Fighters')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Fighter Hangar Management')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Drone Navigation')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Drone Durability')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Drone Interfacing')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Explosive Shield Compensation')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Thermal Shield Compensation')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'EM Shield Compensation')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Kinetic Shield Compensation')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Tactical Shield Manipulation')
				
				@if( $skill['actualLevel'] >= 5)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Afterburner')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Acceleration Control')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Fuel Conservation')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif

		@endforeach	

    </div>

    <hr>
    <div class="requirement-group-subgroup">
	@foreach ($relevantSkills as $skill)
		@if ($skill['skillName'] == 'Minmatar Carrier')

			<div class="requirement-group">
				<h3>
					Nidhoggur
				</h3>

				<div class="requirement-group-skills">
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif
				
							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
					</div>
			</div>
		@endif
	@endforeach	
	@foreach ($relevantSkills as $skill)
		@if ($skill['skillName'] == 'Amarr Carrier')

			<div class="requirement-group">
				<h3>
					Archon 
				</h3>

				<div class="requirement-group-skills">
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif
				
							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
					</div>
			</div>
		@endif
	@endforeach	
	@foreach ($relevantSkills as $skill)
		@if ($skill['skillName'] == 'Caldari Carrier')

			<div class="requirement-group">
				<h3>
					Chimera 
				</h3>

				<div class="requirement-group-skills">
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif
				
							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
					</div>
			</div>
		@endif
	@endforeach	
	@foreach ($relevantSkills as $skill)
		@if ($skill['skillName'] == 'Gallente Carrier')

			<div class="requirement-group">
				<h3>
				Thanatos 
				</h3>

				<div class="requirement-group-skills">
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif
				
							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
					</div>
			</div>
		@endif
	@endforeach	
		
    </div>

</div>

<div class="requirement-group">
    <h3>
	FAXes 
    </h3>

    <div class="requirement-group-skills">
	
							

	@foreach ($relevantSkills as $skill)
			@if ($skill['skillName'] == 'Tactical Logistics Reconfiguration')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Capital Capacitor Emission Systems')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Repair Drone Operation')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif

		@endforeach	

    </div>

    <hr>
    <div class="requirement-group-subgroup">
	@foreach ($relevantSkills as $skill)
		@if ($skill['skillName'] == 'Minmatar Carrier')

			<div class="requirement-group">
				<h3>
				Lif  
				</h3>

				<div class="requirement-group-skills">
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif
				
							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
					</div>
			</div>
		@endif
	@endforeach	
	@foreach ($relevantSkills as $skill)
		@if ($skill['skillName'] == 'Amarr Carrier')

			<div class="requirement-group">
				<h3>
				Apostle  
				</h3>

				<div class="requirement-group-skills">
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif
				
							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
					</div>
			</div>
		@endif
	@endforeach	
	@foreach ($relevantSkills as $skill)
		@if ($skill['skillName'] == 'Caldari Carrier')

			<div class="requirement-group">
				<h3>
				Minokawa  
				</h3>

				<div class="requirement-group-skills">
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif
				
							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
					</div>
			</div>
		@endif
	@endforeach	
	@foreach ($relevantSkills as $skill)
		@if ($skill['skillName'] == 'Gallente Carrier')

			<div class="requirement-group">
				<h3>
				Ninazu  
				</h3>

				<div class="requirement-group-skills">
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif
				
							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
					</div>
			</div>
		@endif
	@endforeach	

	<div class="requirement-group">
	<h3>
	Shield FAXes  
	</h3>

	<div class="requirement-group-skills">
		
		@foreach ($relevantSkills as $skill)
				@if ($skill['skillName'] == 'Capital Shield Operation')
					
					@if( $skill['actualLevel'] >= 4)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif

					@if($skill['actualLevel'] >= 5)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-trained"></span>
					</span>
					@elseif($skill['actualLevel'] == 4)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box"></span>
					</span>
					@elseif($skill['actualLevel'] == 3)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box"></span>
					</span>
					@elseif($skill['actualLevel'] == 2)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box"></span>
					</span>
					@elseif($skill['actualLevel'] == 1)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box"></span>
					</span>
					@else
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box"></span>
					</span>
					@endif
					
				</div>
				@endif
				
				@if ($skill['skillName'] == 'Capital Shield Emission Systems')
					
					@if( $skill['actualLevel'] >= 3)
						<div class="requirement-skill requirement-skill-injected requirement-skill-met">
							{{$skill['skillName']}}
						@else
						<div class="requirement-skill requirement-skill-injected">
							{{$skill['skillName']}}</font>
						@endif

					@if($skill['actualLevel'] >= 5)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-trained"></span>
					</span>
					@elseif($skill['actualLevel'] == 4)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-trained"></span>
						<span class="skill-level-box"></span>
					</span>
					@elseif($skill['actualLevel'] == 3)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box"></span>
						<span class="skill-level-box"></span>
					</span>
					@elseif($skill['actualLevel'] == 2)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box"></span>
						<span class="skill-level-box"></span>
					</span>
					@elseif($skill['actualLevel'] == 1)
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box"></span>
						<span class="skill-level-box"></span>
					</span>
					@else
					<span class="skill-level">
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box skill-level-box-required"></span>
						<span class="skill-level-box"></span>
						<span class="skill-level-box"></span>
					</span>
					@endif
					
				</div>
				@endif


		@endforeach	
		</div>
			
	</div>
	<div class="requirement-group">
	<h3>
	Armor FAXes  
	</h3>

	<div class="requirement-group-skills">
		
	@foreach ($relevantSkills as $skill)
			@if ($skill['skillName'] == 'Capital Repair Systems')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Capital Remote Armor Repair Systems')
				
				@if( $skill['actualLevel'] >= 3)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Explosive Armor Compensation')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Thermal Armor Compensation')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'EM Armor Compensation')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Armor Layering')
				
				@if( $skill['actualLevel'] >= 4)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif


	@endforeach	
	</div>
		
    </div>

	</div>

</div>


<div class="requirement-group">
    <h3>
	Dreadnoughts  
    </h3>

    <div class="requirement-group-skills">
	
							

	@foreach ($relevantSkills as $skill)
			@if ($skill['skillName'] == 'Tactical Weapon Reconfiguration')
				
				@if( $skill['actualLevel'] >= 1)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-trained"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
					<span class="skill-level-box"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Weapon Upgrades')
				
				@if( $skill['actualLevel'] >= 5)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@endif
				
			</div>
			@endif
			
			@if ($skill['skillName'] == 'Advanced Weapon Upgrades')
				
				@if( $skill['actualLevel'] >= 5)
					<div class="requirement-skill requirement-skill-injected requirement-skill-met">
						{{$skill['skillName']}}
					@else
					<div class="requirement-skill requirement-skill-injected">
						{{$skill['skillName']}}</font>
					@endif

				@if($skill['actualLevel'] >= 5)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
				</span>
				@elseif($skill['actualLevel'] == 4)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 3)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 2)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@elseif($skill['actualLevel'] == 1)
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@else
				<span class="skill-level">
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
					<span class="skill-level-box skill-level-box-required"></span>
				</span>
				@endif
				
			</div>
			@endif

		@endforeach	

    </div>

    <hr>
    <div class="requirement-group-subgroup">

		<div class="requirement-group">
			<h3>
			Revelation   
			</h3>

			<div class="requirement-group-skills">
				
				@foreach ($relevantSkills as $skill)
						@if ($skill['skillName'] == 'Amarr Dreadnought')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
					
						@if ($skill['skillName'] == 'Capital Energy Turret')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
				
						@if ($skill['skillName'] == 'Controlled Bursts')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

						@if ($skill['skillName'] == 'Motion Prediction')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Rapid Firing')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Sharpshooter')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif	

						@if ($skill['skillName'] == 'Surgical Strike')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif		

						@if ($skill['skillName'] == 'Trajectory Analysis')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

				@endforeach	
				</div>
				
		</div>
		
		<div class="requirement-group">
			<h3>
			Phoenix   
			</h3>

			<div class="requirement-group-skills">
				
				@foreach ($relevantSkills as $skill)
				
						@if ($skill['skillName'] == 'Caldari Dreadnought')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

									@if($skill['actualLevel'] >= 5)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
									</span>
									@elseif($skill['actualLevel'] == 4)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 3)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 2)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 1)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
										<span class="skill-level-box"></span>
									</span>
									@else
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
										<span class="skill-level-box"></span>
									</span>
									@endif
							
						</div>
						@endif
				
						@if ($skill['skillName'] == 'Guided Missile Precision')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

									@if($skill['actualLevel'] >= 5)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
									</span>
									@elseif($skill['actualLevel'] == 4)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 3)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 2)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 1)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@else
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@endif
							
						</div>
						@endif

						@if ($skill['skillName'] == 'Missile Bombardment')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

									@if($skill['actualLevel'] >= 5)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
									</span>
									@elseif($skill['actualLevel'] == 4)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 3)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 2)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 1)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@else
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Missile Projection')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

								@if($skill['actualLevel'] >= 5)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-trained"></span>
								</span>
								@elseif($skill['actualLevel'] == 4)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 3)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 2)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 1)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
								</span>
								@else
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
								</span>
								@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Rapid Launch')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif


								@if($skill['actualLevel'] >= 5)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
									</span>
									@elseif($skill['actualLevel'] == 4)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 3)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 2)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 1)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@else
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@endif
							
						</div>
						@endif	

						@if ($skill['skillName'] == 'Target Navigation Prediction')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

				

								@if($skill['actualLevel'] >= 5)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
									</span>
									@elseif($skill['actualLevel'] == 4)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 3)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 2)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 1)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@else
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@endif
							
						</div>
						@endif		

						@if ($skill['skillName'] == 'Warhead Upgrades')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif


									@if($skill['actualLevel'] >= 5)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-trained"></span>
									</span>
									@elseif($skill['actualLevel'] == 4)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 3)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 2)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@elseif($skill['actualLevel'] == 1)
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@else
									<span class="skill-level">
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box skill-level-box-required"></span>
										<span class="skill-level-box"></span>
									</span>
									@endif
							
						</div>
						@endif
				@endforeach	
				<hr>
				<div class="requirement-group-subgroup">

				<div class="requirement-group">
						<h3>
							Missiles
						</h3>
	

				
						@foreach ($relevantSkills as $skill)
							@if ($skill['skillName'] == 'XL Cruise Missiles')
								
								@if( $skill['actualLevel'] >= 3)
									<div class="requirement-skill requirement-skill-injected requirement-skill-met">
										{{$skill['skillName']}}
									@else
									<div class="requirement-skill requirement-skill-injected">
										{{$skill['skillName']}}</font>
									@endif

								@if($skill['actualLevel'] >= 5)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-trained"></span>
								</span>
								@elseif($skill['actualLevel'] == 4)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-trained"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 3)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 2)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 1)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
									<span class="skill-level-box"></span>
								</span>
								@else
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
									<span class="skill-level-box"></span>
								</span>
								@endif
								
							</div>
							@endif
						@endforeach



				</div>
				<div class="requirement-group">
						<h3>
						Torpedoes 
						</h3>
	

									
						@foreach ($relevantSkills as $skill)
							@if ($skill['skillName'] == 'XL Torpedoes')
								
								@if( $skill['actualLevel'] >= 3)
									<div class="requirement-skill requirement-skill-injected requirement-skill-met">
										{{$skill['skillName']}}
									@else
									<div class="requirement-skill requirement-skill-injected">
										{{$skill['skillName']}}</font>
									@endif

								@if($skill['actualLevel'] >= 5)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-trained"></span>
								</span>
								@elseif($skill['actualLevel'] == 4)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-trained"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 3)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 2)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
									<span class="skill-level-box"></span>
								</span>
								@elseif($skill['actualLevel'] == 1)
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
									<span class="skill-level-box"></span>
								</span>
								@else
								<span class="skill-level">
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box skill-level-box-required"></span>
									<span class="skill-level-box"></span>
									<span class="skill-level-box"></span>
								</span>
								@endif
								
							</div>
							@endif
						@endforeach






					</div>
				</div>
			</div>
				
		</div>

		<div class="requirement-group">
			<h3>
			Moros    
			</h3>

			<div class="requirement-group-skills">
				
				@foreach ($relevantSkills as $skill)
						@if ($skill['skillName'] == 'Gallente Dreadnought')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
					
						@if ($skill['skillName'] == 'Capital Hybrid Turret')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
				
						@if ($skill['skillName'] == 'Controlled Bursts')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

						@if ($skill['skillName'] == 'Motion Prediction')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Rapid Firing')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Sharpshooter')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-bo skill-level-box-requiredx skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif	

						@if ($skill['skillName'] == 'Surgical Strike')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif		

						@if ($skill['skillName'] == 'Trajectory Analysis')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

				@endforeach	
				</div>
				
		</div>

		<div class="requirement-group">
			<h3>
			Naglfar     
			</h3>

			<div class="requirement-group-skills">
				
				@foreach ($relevantSkills as $skill)
						@if ($skill['skillName'] == 'Minmatar Dreadnought')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
					
						@if ($skill['skillName'] == 'Capital Projectile Turret')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
				
						@if ($skill['skillName'] == 'Controlled Bursts')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

						@if ($skill['skillName'] == 'Motion Prediction')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Rapid Firing')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Sharpshooter')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-bo skill-level-box-requiredx skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif	

						@if ($skill['skillName'] == 'Surgical Strike')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif		

						@if ($skill['skillName'] == 'Trajectory Analysis')
							
							@if( $skill['actualLevel'] >= 4)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

				@endforeach	
				</div>
				
		</div>

		<div class="requirement-group">
			<h3>
			Shield Dreads     
			</h3>

			<div class="requirement-group-skills">
				
				@foreach ($relevantSkills as $skill)
				
						@if ($skill['skillName'] == 'Capital Shield Operation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

						@if ($skill['skillName'] == 'Explosive Shield Compensation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Thermal Shield Compensation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'EM Shield Compensation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif	

						@if ($skill['skillName'] == 'Kinetic Shield Compensation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

				@endforeach	
				</div>
				
		</div>

		<div class="requirement-group">
			<h3>
			Capital Repair Systems     
			</h3>

			<div class="requirement-group-skills">
				
				@foreach ($relevantSkills as $skill)
				
						@if ($skill['skillName'] == 'Capital Repair Systems')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

						@if ($skill['skillName'] == 'Explosive Shield Compensation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'Thermal Shield Compensation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif
											
						@if ($skill['skillName'] == 'EM Shield Compensation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif	

						@if ($skill['skillName'] == 'Kinetic Shield Compensation')
							
							@if( $skill['actualLevel'] >= 3)
								<div class="requirement-skill requirement-skill-injected requirement-skill-met">
									{{$skill['skillName']}}
								@else
								<div class="requirement-skill requirement-skill-injected">
									{{$skill['skillName']}}</font>
								@endif

							@if($skill['actualLevel'] >= 5)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
							</span>
							@elseif($skill['actualLevel'] == 4)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 3)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 2)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@elseif($skill['actualLevel'] == 1)
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required skill-level-box-trained"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@else
							<span class="skill-level">
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box skill-level-box-required"></span>
								<span class="skill-level-box"></span>
								<span class="skill-level-box"></span>
							</span>
							@endif
							
						</div>
						@endif

				@endforeach	
				</div>
				
		</div>


    </div>

</div>




        </div>
    </div>
</div>
@endsection
