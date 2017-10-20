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
        <meta name="keywords" content="Estrutura Laravel"/>
		<meta name="csrf-token" id='token' content="{{ csrf_token() }}" value="{{ csrf_token() }}" />
		{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
        {{-- <link rel="shortcut icon" href="/imagens/favicon.ico" type="image/x-icon" /> --}}

        <title>{{ config('app.name', 'Brechó Adventure') }}</title>

		<!-- Bootstrap , Animate-->
		<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/node_modules/animate.css/animate.css" />
		<!-- Theme style -->
		<link rel="stylesheet" href="/AdminLTE/dist/css/font-awesome.min.css">
		<link rel="stylesheet" href="/AdminLTE/dist/css/ionicons.min.css">
		<link rel="stylesheet" href="/AdminLTE/dist/css/AdminLTE.min.css">
		<link rel="stylesheet" href="/AdminLTE/dist/css/skins/_all-skins.min.css">

        <!-- jQuery, Notify, Global-->
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="/node_modules/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="/js/global.js"></script>
    </head>
    <body>
		@if (session('sucesso')) <script>alertaPagina('{{ session('sucesso') }}', 'success');</script> @endif
	    @if (session('erro')) <script>alertaPagina('{{ session('erro') }}', 'danger');</script> @endif

        <div>
        	@include('top')
        </div>

        <div class="container" style="border:solid 0px;">
            @yield('content')
        </div>

		<br /><br />

        <div style="position:static; bottom:0px; border:solid 1px; width:100%; text-align:center;">
        	@include('footer')
        </div>
    </body>
</html>
