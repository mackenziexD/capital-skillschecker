<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">	

	<meta property="og:title" content="Capital Group Skills Validator" />
	<meta property="og:url" content="{{url()->full()}}" />
	<meta property="og:description" content="Capital group skill Checker for character of: {{$char_name}}">
	<meta property="og:image" content="https://images.evetech.net/characters/{{$char_id}}/portrait?size=128" />
<style>
		hr {
			display: block;
			border: none;
			height: 1px;
			background-color: #dfdfdf;
			margin: 1rem 0 0 0;
		}

		.requirement-group {
			border: solid 1px #dfdfdf;
			margin-top: 1rem;
			padding: 1rem;
		}

		.requirement-group {
			background-color: #fffbfb;
		}

		.requirement-group-met {
			background-color: #fbfffb;
		}

		.requirement-group-skills {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.requirement-group-subgroup {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.requirement-group-subgroup > .requirement-group {
			width: calc(50% - 0.5rem);
		}

		.requirement-group-subgroup .requirement-skill {
			width: calc(50% - 1rem);
		}

		.requirement-group-subgroup .requirement-group .requirement-skill {
			width: 100%;
		}

		@media (max-width: 1199px) {
			.requirement-group-subgroup .requirement-skill {
				width: 100%;
			}
		}

		.requirement-skill {
			color: red;
			width: calc(33% - 1rem);
		}

		.requirement-skill-met {
			color: green;
		}

		@media (max-width: 1199px) {
			.requirement-skill {
				width: calc(50% - 1rem);
			}
		}

		@media (max-width: 750px) {
			.requirement-skill {
				width: 100%;
			}
		}

		.skill-level {
			display: block;
			padding: 0.1rem 0 0.1rem 0.1rem;
			float: right;
			margin-top: 2px;
		}

		.skill-level-box {
			display: block;
			width: 0.9rem;
			height: 0.9rem;
			border: solid 1px #8f8f8f;
			float: left;
			margin-right: 0.2rem;
			background-color: white;
		}

		.skill-level-box-required {
			border-color: red;
			text-align: center;
			font-size: 9px;
			line-height: 10px;
			font-weight: bold;
		}

		.skill-level-box-required::before {
			content: '!';
		}

		.skill-level-box-trained {
			background-color: #d0d0d0;
		}

		.requirement-skill-met .skill-level-box-required {
			border-color: green;
		}

		.requirement-skill-met .skill-level-box-required::before {
			content: '✓';
		}

		.copy-skills-button {
			font-size: 12px;
			vertical-align: bottom;
		}
		.skill-level-box-required-key {
			border-color: green !important;
			color:green !important;
		}

		.skill-level-box-required-key::before {
			content: '✓' !important;
		}
		.key{
			color: red !important;
		}
	</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('#') }}">
                    Capital Group
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown  dropdown-menu-right">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TOOLS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://capitals-skillcheck.nothingtoseehere.uk/">Capital Skill Checker</a>
                            <a class="dropdown-item" href="http://dscan.nothingtoseehere.uk/">Dscan Tool</a>
                            <a class="dropdown-item" href="http://entosis.nothingtoseehere.uk/">Entosis Tool</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
