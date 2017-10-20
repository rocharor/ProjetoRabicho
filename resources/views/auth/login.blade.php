@extends('layouts.app')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">Fa&ccedil;a login para iniciar sua sess&atilde;o</p>

        <form action="{{ url('/login') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : ' has-feedback' }}">
                <input type="email" class="form-control" name='email' id='email' placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : ' has-feedback' }}">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Lembrar Senha
                        </label>
                    </div>
                </div>

                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
            </div>
        </form>
        {{-- <div class="social-auth-links text-center">
            <p>- OU -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Login usando Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Login usando Google+</a>
        </div> --}}

        <a href="#">Esqueci a minha senha</a><br>
        <a href="{{ Route('cadastre-se') }}" class="text-center">Cadastre-se</a>
    </div>
@endsection
