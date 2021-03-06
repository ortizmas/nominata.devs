<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="/img/logo-brando-61x61.png" alt="Laravel Starter" class="brand-image elevation-3" style="opacity: .8" width="100%"> --}}
        <span class="brand-text font-weight-light"><strong>NOMINATA 2019</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> {{auth()->user()->name!=null ? auth()->user()->name : "Administrator"}} </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview {!! classActivePath(1,'dashboard') !!}">
                    <a href="{!! route('home') !!}" class="nav-link {!! classActiveSegment(1, 'dashboard') !!}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Painel
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {!! classActiveSegment(2, 'home') !!}">
                                <i class="fas fa-circle"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">PAGES</li>
                
                @role('super-admin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          Usuários
                          <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Todos os usuários</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.create') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Adicionar usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.show', Auth::id()) }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Seu perfil</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                          Páginas
                          <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Todas as páginas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.create') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Adicionar nova</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sections.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Seção</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-plus-square"></i>
                        <p>
                          Posts
                          <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('posts.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Todos os posts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('posts.create') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Adicionar novo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Tags</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">SEÇÃO NOMINATA</li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                          Uniões
                          <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('unions.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Todos as uniões</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('unions.create') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Adicionar novo</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                          Associações
                          <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('associations.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Todos as Associações</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('associations.create') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Adicionar novo</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                          Formandos
                          <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('trainees.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Todos os formandos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('trainees.create') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Adicionar novo</p>
                            </a>
                        </li>
                    </ul>
                </li>

            
                <li class="nav-header">LOGOUT</li>

                @if (auth()->user()->name!=null)
                    <li class="nav-item">
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                            <i class="nav-icon fa fas fa-circle-notch text-danger"></i>
                            {{ __('Logout') }}
                            
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>