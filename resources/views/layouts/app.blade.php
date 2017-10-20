<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="/AdminLTE/dist/css/font-awesome.min.css">
        <link rel="stylesheet" href="/AdminLTE/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="/AdminLTE/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="/AdminLTE/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="/AdminLTE/plugins/iCheck/square/blue.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ Route('admin.home') }}"><b>Estrutura</b>Laravel</a>
            </div>
            @yield('content')
        </div>

        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/AdminLTE/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
