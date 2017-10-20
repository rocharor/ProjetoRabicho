<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name}}</p>
                <a href="{{ Route('site.home') }}"><b>Ir para o site</b></a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">MENU DE NAVEGAÇÃO</li>

            @can('admin-usuario')
                <li>
                    <a href="{{ Route('admin.user.list') }}"><i class="fa fa-users"></i> <span>Usuários</span></a>
                </li>
            @endcan

            @can('admin-acl')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-unlock-alt"></i>
                        <span>ACL</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ Route('admin.acl.roles-list') }}"><i class="fa fa-circle-o"></i>Roles</a></li>
                        <li><a href="{{ Route('admin.acl.permissions-list') }}"><i class="fa fa-circle-o"></i>Permissions</a></li>
                        <li><a href="{{ Route('admin.acl.role-permissions-list') }}"><i class="fa fa-circle-o"></i>Roles - Permission</a></li>
                    </ul>
                </li>
            @endcan
        </ul>
    </section>
</aside>
