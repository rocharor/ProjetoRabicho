<header class="main-header">
    <!-- LOGO -->
    <a href="{{ Route('admin.home') }}" class="logo">
        <span class="logo-mini"><b>E</b>L</span>
        <span class="logo-lg"><b>Estrutura</b>Laravel</span>
    </a>

    <nav class="navbar navbar-static-top">
        <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Alterar navegação</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{-- @can('admin-pendente') --}}

                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label @if(1 > 0) label-danger @else label-success @endif">
                                5
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                Você tem 5 xxx pedentes
                            </li>
                            <li>
                                <ul class="menu">
                                    {{-- @foreach($data['produtosPendentes'] as $produto)
                                        <li>
                                            <a href="{{ Route('admin.pendente.product-view', $produto->id) }}">
                                                <div class="pull-left" style="margin-right:5px">
                                                  <img src="/imagens/produtos/200x200/{{ $produto->imgPrincipal }}" class="img-circle" alt="User Image" style="width: 45px; height: 45px;">
                                                </div>

                                                <h4>{{ $produto->titulo }}</h4>
                                                <p>
                                                    @if (strlen($produto->descricao) > 30)
                                                        {{ substr($produto->descricao,0,30) }} ...
                                                    @else
                                                        {{ $produto->descricao }}
                                                    @endif
                                                </p>
                                            </a>
                                        </li>
                                    @endforeach --}}
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">Ver todos xxx</a>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label @if(0 > 0) label-danger @else label-success @endif">
                                0
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                Você tem 0 yyy
                            </li>
                            <li>
                                <ul class="menu">
                                    {{-- @foreach($data['contatosPendentes'] as $contato)
                                        <li>
                                            <a href="{{ Route('admin.pendente.contact-view', $contato->id) }}" style="margin: 0 -30px">
                                                <h4>{{ $contato->tipo }}</h4>
                                                <p>
                                                    @if (strlen($contato->mensagem) > 40)
                                                        {{ substr($contato->mensagem,0,40) }} ...
                                                    @else
                                                        {{ $contato->mensagem }}
                                                    @endif
                                                </p>
                                            </a>
                                        </li>
                                    @endforeach --}}
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">Ver todas yyy</a>
                            </li>
                        </ul>
                    </li>
                {{-- @endcan --}}

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name}} - <b>Administrador</b></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            <p>
                                {{ Auth::user()->name}} - <b>Administrador</b> <small>{{ Auth::user()->created_at}}</small>
                            </p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="/logout" class="btn btn-default btn-flat">Sair</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
