<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>Estrutura Laravel | Dashboard</title>

        {{-- <link rel="shortcut icon" href="/imagens/favicon.ico" type="image/x-icon" /> --}}
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}

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
    <body class="hold-transition skin-blue sidebar-mini">
        @if (session('sucesso')) <script>alertaPagina('{{ session('sucesso') }}', 'success');</script> @endif
	    @if (session('erro')) <script>alertaPagina('{{ session('erro') }}', 'danger');</script> @endif

        <div class="wrapper">
        	@include('admin/top')

        	@include('admin/menuLateral')

            <div class="content-wrapper">
                @yield('content')
            </div>


        	@include('admin/footer')
        </div>

        <!-- Bootstrap 3.3.6 -->
        <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/AdminLTE/dist/js/app.min.js"></script>
    </body>
</html>
