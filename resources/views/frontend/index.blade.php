@extends('layouts.frontend.nominata')

@section('content')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('assets/img/logo/logo-branco-36x36.png') }}" alt=""></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Mensagem do direitor</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Uniões</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#formandos">Campos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#data">Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home section -->
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            {{-- <div class="col-lg-10 align-self-end">
              <h1 class="text-uppercase text-white font-weight-bold">Formandos 2019</h1>
              <hr class="divider my-4">
            </div> --}}
            {{-- <div class="col-lg-8 align-self-baseline">
              <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
            </div> --}}
          </div>
        </div>
        
    </header>
    <div class="h-divider-one"></div>

    <!-- Formandos Section -->
    <section id="formandos">
        <div class="container">
            <div class="row">
                <div class="col pl-0 pt-3 pb-3">
                    <h3>Formandos</h3>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-3">
                    <a class="formandos-box" href="#" >
                        <div class="bg-img" style="background-image: url({{ asset('assets/img/formandos/5/5.png') }});">
                            
                        </div>
                        <div class="formandos-box-caption bg-status-1">
                          <div class="project-category text-white-50">
                            Diego Veríssimo
                          </div>
                          <div class="project-name">
                            <i class="fa fa-search"></i>
                          </div>
                        </div>
                    </a>
                    <div class="card border-0">
                        <div class="card-body bg-status-1">
                            <p class="text-white">
                                Diego Veríssimo <br>
                                <strong>Status: </strong>Chamado oficial
                            </p>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="card-link text-white">Visualizar perfil</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-3">
                    <a class="formandos-box" href="#" >
                        <div class="bg-img" style="background-image: url({{ asset('assets/img/formandos/5/5.png') }});">
                            
                        </div>
                        <div class="formandos-box-caption bg-status-2">
                          <div class="project-category text-white-50">
                            Diego Veríssimo
                          </div>
                          <div class="project-name">
                            <i class="fa fa-search"></i>
                          </div>
                        </div>
                    </a>
                    <div class="card border-0">
                        <div class="card-body bg-status-2">
                            <p class="text-white">
                                Diego Veríssimo <br>
                                <strong>Status: </strong>Chamado oficial
                            </p>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="card-link text-white">Visualizar perfil</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-3">
                    <a class="formandos-box" href="#" >
                        <div class="bg-img" style="background-image: url({{ asset('assets/img/formandos/5/5.png') }});">
                            
                        </div>
                        <div class="formandos-box-caption bg-status-3">
                          <div class="project-category text-white-50">
                            Diego Veríssimo
                          </div>
                          <div class="project-name">
                            <i class="fa fa-search"></i>
                          </div>
                        </div>
                    </a>
                    <div class="card border-0">
                        <div class="card-body bg-status-3">
                            <p class="text-white">
                                Diego Veríssimo <br>
                                <strong>Status: </strong>Chamado oficial
                            </p>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="card-link text-white">Visualizar perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="h-divider-one"></div>

    <!-- About Section -->
    <section class="page-section pb-5" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 pl-0 pt-4 pb-4">
                    <h3>Mensagem</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 pb-3">
                    <div class="card">
                        <img src="{{ asset('assets/img/pastor.jpg') }}" class="card-img-top" alt="Leonardo Nunes">
                        <div class="card-body bg-status-1">
                            <p class="text-white">
                                Pr. Leonardo Nunes
                            </p>
                            <div class="dropdown-divider"></div>
                            <p class="text-white">
                                Diretor do SALT-FADBA
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h2 class="text-red">SOMOS UM</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="h-divider-one"></div>

    <!--Datas section-->
    <section class="page-section pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 pl-0 pt-3 pb-4">
                    <h3>Datas</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="media">
                        <img src="{{ asset('assets/img/datas/06.png') }}" class="align-self-center mr-3" width="80" alt="06 DEZ">
                        <div class="media-body">
                            <h5 class="mt-0">AS <strong>19H30</strong><br>CULTO DE <br><strong>GRATIDÃO</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="media">
                        <img src="{{ asset('assets/img/datas/07.png') }}" class="align-self-center mr-3" width="80" alt="07 DEZ">
                        <div class="media-body">
                            <h5 class="mt-0">AS <strong>9H00</strong><br>CULTO DE <br><strong>CONSAGRAÇÃO</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <img src="{{ asset('assets/img/datas/08.png') }}" class="align-self-center mr-3" width="80" alt="08 DEZ">
                        <div class="media-body">
                            <h5 class="mt-0">AS <strong>19H30</strong><br>CERIMÔNIA DE<br><strong>COLAÇÃO DE GRAU</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="h-divider-one"></div>

    <!-- Services Section -->
    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <img class="img-fluid" src="{{ asset('assets/img/diretiva/01.png') }}" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <img class="img-fluid" src="{{ asset('assets/img/diretiva/02.png') }}" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <img class="img-fluid" src="{{ asset('assets/img/diretiva/03.png') }}" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <img class="img-fluid" src="{{ asset('assets/img/diretiva/04.png') }}" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <img class="img-fluid" src="{{ asset('assets/img/diretiva/05.png') }}" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <img class="img-fluid" src="{{ asset('assets/img/diretiva/06.png') }}" alt="" width="100%">
                </div>
            </div>

        </div>
        
    </section>
    <div class="h-divider-two"></div>
    <section class="page-section bg-dark pt-3" style="padding-top: -20px;">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <p class="text-white">FABIO <br><strong>SANTOS</strong></p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <p class="text-white">FABIO <br><strong>SANTOS</strong></p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <p class="text-white">FABIO <br><strong>SANTOS</strong></p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <p class="text-white">FABIO <br><strong>SANTOS</strong></p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <p class="text-white">FABIO <br><strong>SANTOS</strong></p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                    <p class="text-white">FABIO <br><strong>SANTOS</strong></p>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="row justify-content-center pt-3 pb-5">
                <div class="col-md text-center">
                    <h1 class="text-white">COMISSÃO <b class="text-red">DE</b> FORMATURA</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Section logos-->
    <section class="page-section bg-grey pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-4 col-lg-4 text-left">
                    <img src="{{ asset('assets/img/logo/fadba.svg') }}" alt="" class="img-fluid" width="250">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 text-center">
                    <img src="{{ asset('assets/img/logo/salt.svg') }}" alt="" class="img-fluid" width="250">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 text-right">
                    <img src="{{ asset('assets/img/logo/turma-61.svg') }}" alt="" class="img-fluid" width="95">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
          <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
        </div>
    </footer>
@endsection



