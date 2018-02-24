<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="format-detection" content="telephone=no" />
		<meta name="author" content="Ricardo Rocha"/>
        <meta name="copyright" content="Ricardo Rocha"/>
        <meta name="e-mail" content="rocharor@gmail.com"/>
        <meta name="keywords" content="Projeto Rabicho"/>
		<meta name="csrf-token" id='token' content="{{ csrf_token() }}" value="{{ csrf_token() }}" />
        {{-- <link rel="shortcut icon" href="/imagens/favicon.ico" type="image/x-icon" /> --}}

        <title>{{ config('app.name', 'Projeto Rabicho') }}</title>

		<!-- Bootstrap , Animate-->
		<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/node_modules/animate.css/animate.css" />
        <link rel="stylesheet" href="/css/site.min.css" />
        {{-- <link rel="stylesheet" href="/css/style.css" /> --}}

    </head>
    <body>
        <main id="wrapper">
			<header style="position: absolute; width: 100%; height: 80px; background-color:#282c34; color: #fff">
	        	@include('top')
	        </header>

	        <section class="container">
	            @yield('content')
	        </section>

	        <footer>
	        	{{-- @include('footer') --}}
	        </footer>
		</main>

        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="/node_modules/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="/js/global.js"></script>

        @if (session('sucesso')) <script>alertaPagina('{{ session('sucesso') }}', 'success');</script> @endif
        @if (session('erro')) <script>alertaPagina('{{ session('erro') }}', 'danger');</script> @endif
    </body>
</html>
