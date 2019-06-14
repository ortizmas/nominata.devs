@extends('layouts.frontend.nominata')

@section('content')
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-1" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('assets/img/logo/turma-61.svg') }}" alt="Nominata" width="60"></a>
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
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#formandos">Uniões</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#formandos">Campos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#formandos">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#data">Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home section -->

    <div class="container-fluid h-100 p-0">
        <div class="bg-home">
            <img src="{{ asset('/assets/img/bg/bg-home-2.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
    {{-- <header class="masthead" id="home">
        <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
              <h1 class="text-uppercase text-white font-weight-bold">Formandos 2019</h1>
              <hr class="divider my-4">
            </div>
            <div class="col-lg-8 align-self-baseline">
              <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
            </div>
          </div>
        </div>
    </header> --}}
    <div class="clearfix"></div>
    <div class="h-divider-one"></div>

    <!-- Formandos Section -->
    <section id="formandos">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-4">
                    <h3>Formandos</h3>
                </div>
                <div class="col-md-3 mb-2 text-right">
                    <select class="browser-default form-control formandos-filter" id="category-filter" data-filter-group="category">
                        <option value="" disabled selected>Uniões</option>
                        @foreach ($unions as $union)
                            <option value=".{{ $union->slug }}">{{ $union->initials }}</li>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 mb-2 text-right">
                    <select class="browser-default form-control formandos-filter" id="topic-filter" data-filter-group="topic">
                        <option value="" disabled selected>Associações</option>
                        @foreach ($associations as $value)
                            <option value=".{{ $value->slug }}">{{ $value->initials }}</li>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 right-align">
                    <a class="w-100 btn btn-dark text-white clear-filter btn-red">TODOS</a>
                </div>
            </div>
        </div>
        
        <div class="container pb-5">
            <div class="row  js-filter-grid">
                @foreach ($trainees as $trainee)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-3 js-filter-item js-filter-grid-item {{ $trainee->association->union->slug }} {{ $trainee->association->slug }}">
                        <a class="formandos-box" href="{{ url($trainee->slug) }}" >
                            <div class="bg-img" style="background-image: url({{ asset('uploads/trainees/'. $trainee->image) }});">
                                
                            </div>
                            <div class="formandos-box-caption">
                              <div class="project-category text-white-50">
                                {{ $trainee->name }}
                              </div>
                              <div class="project-name">
                                <i class="fa fa-search"></i>
                              </div>
                            </div>
                        </a>
                        <a href="{{ url($trainee->slug) }}" style="text-decoration: none;">
                        <div class="card border-0">
                            
                                <div class="card-body bg-status-{{ $trainee->status }}">
                                    <span class="text-white"><strong>{{ $trainee->name }}</strong></span><br>

                                    <small class="text-white float-left"><strong>Status: </strong>{!! getStatus($trainee->status) !!}</small>
                                    <small class="text-white float-right">{{ $trainee->association->union->initials }} / {{ $trainee->association->initials }}</small>
                                    <div class="clearfix">
                                        
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <small class="text-white">Visualizar perfil</small>
                                </div>
                            
                        </div>
                        </a>
                    </div>
                @endforeach
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
        @if (isset($mensagem))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 pb-3">
                        <div class="card">
                            <img src="{{ asset('uploads/images/' . $mensagem->image) }}" class="card-img-top" alt="Leonardo Nunes">
                            <div class="card-body bg-status-1">
                                <p class="text-white">
                                    {{ $mensagem->title }}
                                </p>
                                <div class="dropdown-divider"></div>
                                <p class="text-white">
                                    {{ $mensagem->author }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        {!! $mensagem->content !!}
                    </div>
                </div>
            </div>
        @endif
    </section>
    <div class="h-divider-one"></div>

    <!--Datas section-->
    <section class="page-section pb-4" id="data">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 pl-2 pt-3 pb-4">
                    <h3>Datas</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 pb-3">
                    <div class="media">
                        <img src="{{ asset('assets/img/datas/06.svg') }}" class="align-self-center mr-3" width="80" alt="06 DEZ">
                        <div class="media-body">
                            <h5 class="mt-0">AS <strong>19H30</strong><br>CULTO DE <br><strong>GRATIDÃO</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 pb-3">
                    <div class="media">
                        <img src="{{ asset('assets/img/datas/07.svg') }}" class="align-self-center mr-3" width="80" alt="07 DEZ">
                        <div class="media-body">
                            <h5 class="mt-0">AS <strong>9H00</strong><br>CULTO DE <br><strong>CONSAGRAÇÃO</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-3">
                    <div class="media">
                        <img src="{{ asset('assets/img/datas/08.svg') }}" class="align-self-center mr-3" width="80" alt="08 DEZ">
                        <div class="media-body">
                            <h5 class="mt-0">AS <strong>19H30</strong><br>CERIMÔNIA DE<br><strong>COLAÇÃO DE GRAU</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="h-divider-one"></div> --}}

    <!-- Services Section -->
    <section class="page-section bg-light" id="services">
        {{-- <div class="container">
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

        </div> --}}
        <div class="container-fluid p-0">
            <img src="{{ asset('assets/img/bg/comissao.jpg') }}" alt="Comissão" class="img-fluid">
        </div>
        
    </section>
    {{-- <div class="h-divider-two"></div> --}}
    {{-- <section class="page-section bg-dark pt-3" style="padding-top: -20px;">
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
    </section> --}}

    <!--Section logos-->
    <section class="page-section bg-grey">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-3 col-lg-3 p-5">
                    <img src="{{ asset('assets/img/logo/logo-fadba.svg') }}" alt="" class="img-fluid" width="100%">
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 p-5">
                    <img src="{{ asset('assets/img/logo/logo-salt.svg') }}" alt="" class="img-fluid" width="100%">
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 p-5">
                    <img src="{{ asset('assets/img/logo/logo-turma-61.svg') }}" alt="" class="img-fluid" width="100%">
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="row pt-3">
                <div class="col-md">
                    <p class="text-white address text-center">
                        BR-101, km 197, Capoeiruçu
                        Caixa Postal 18, Cachoeira Bahia,
                        CEP: 44.300-000 - Brasil 
                        Fone: +55 (75) 3425-8000
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section bg-light pt-2 pb-1">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 float-left">
                    <p class="text-muted m-0">&copy; 2019 - <b class="text-red">Faculdade Adventista da Bahia</b> | Projeto desenvolvido por <b>ortizmas14@gmail.com</b></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <ul class="redes-sociais float-right m-0">
                        <li><a href="#" title=""><i class="fab fa-facebook" style="font-size: 32px;"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-instagram" style="font-size: 32px;"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-youtube" style="font-size: 32px;"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-twitter" style="font-size: 32px;"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection



