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
</head>
<style>
.ui.container {
    width: 1127px;
    margin-left: auto!important;
    margin-right: auto!important;
    text-align: center;
    display: block;
    max-width: 100%!important;
}
.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 40px;
    line-height: 40px;
    color: white;
    text-align: center;
    background-color: #343a40;
}
</style>
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
                            <a class="dropdown-item" href="http://nothingtoseehere.uk/">Capital Skill Checker</a>
                            <a class="dropdown-item" href="http://dscan.nothingtoseehere.uk/">Dscan Tool</a>
                            <a class="dropdown-item" href="http://entosis.nothingtoseehere.uk/">Entosis Tool</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
<div class="ui center aligned container">
	<h2>Sign in to verify capital group skills</h2>

	<a href="{{ route('login') }}">
		<img src="https://web.ccpgamescdn.com/eveonlineassets/developers/eve-sso-login-white-large.png" />
	</a>
</div>
        
	</main>
    <footer class="footer">
	Nothing To See Here &#128151;
    </footer>
    </div>
</body>
</html>