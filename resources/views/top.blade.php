<link rel="stylesheet" href="/css/top.css" />

<div class="menu hidden-xs well">
    <div class='topo_esquerdo '>
        <img src="http://via.placeholder.com/150x65" alt='Estrutura Laravel' class='img_logo'>
        <div class="links">
            {{-- <a {{ Request::route()->getName() == 'home' ? 'class=active' : '' }} href="{{ Route('home') }}">Home</a> --}}
            {{-- <a {{ Request::route()->getName() == 'produtos' ? 'class=active' : '' }} href="{{ Route('produtos') }}">Produtos</a> --}}
            {{-- <a {{ Request::route()->getName() == 'contato' ? 'class=active' : '' }} href="{{ Route('contato') }}">Fale conosco</a> --}}
            <a href="#" class='active'>Home</a>
            <a href="#">link 1</a>
            <a href="#">Link 2</a>
        </div>
    </div>

    @if (Auth::check() == 0)
        <div class="topo_direito">
            <div>
                <a href='{{ Route('login') }}' class="btn btn-login">Login</a>
                <a href='{{ Route('register') }}' class="btn btn-cadastro">Cadastre-se</a>
            </div>
        </div>
    @else
        <div class="topo_direito">
            <div>
                <a href='{{ Route('admin.home') }}' class="btn btn-cadastro">Admin</a>
            </div>
        </div>
    @endif
</div>

<br style="clear:both;"/><br>
