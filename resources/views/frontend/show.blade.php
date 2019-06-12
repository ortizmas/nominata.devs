@extends('layouts.frontend.nominata')

@section('content')


    <div class="hero-show pb-5" id="home">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-danger" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('assets/img/logo/logo-branco-36x36.png') }}" alt=""></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#about">Mensagem do direitor</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#about">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#services">Uniões</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#formandos">Campos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#contact">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#data">Data</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="clearfix"></div>
    <!--http://ruvenpelka.com/demos/desmond-resume/light/-->
    <section class="content-page  bg-white" id="formandos">
        <div class="container-fluid shadow-sm mb-5 bg-white rounded-0">
            <div class="row">
                <div class="col-md-4 bg-one">
                    <div class="container pt-5 pb-5">
                        <div class="row justify-content-end">
                            <div class="col-md-12 pr-2">
                                <a class="formandos-box" href="#" >
                                    <div class="bg-img-two h-100" style="background-image: url({{ asset('uploads/trainees/'. $trainee->image_men) }});"></div>
                                </a>
                                <div class="card border-0">
                                    {{-- <img class="card-img-top img-fluid" src="{{ asset('uploads/trainees/'. $trainee->image_men) }}" alt=""> --}}
                                    <div class="card-body bg-status-{{ $trainee->status }}">
                                        <p class="text-white">
                                            <strong>Status: </strong>{!! getStatus($trainee->status) !!}
                                        </p>
                                        <div class="dropdown-divider"></div>
                                        <div class="content-text">
                                            <span class="text-white"><i class="fas fa-phone"></i> {{ $trainee->phone }}</span> <br>
                                            <span class="text-white"><i class="fas fa-envelope"></i> {{ $trainee->email }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 bg-white">
                    <div class="container pt-5 pb-5 h-100">
                        <div class="row h-100 justify-content-start align-items-center">
                            <div class="col-md-12 align-items-center pl-5">
                                <div class="content-text">
                                     <h1 class="text-red font-italic">Informações do formando</h1>
                                    <h2 class="text-red pb-5">{{ $trainee->name }}</h2>

                                    <div class="hr-content mb-4"></div>
                                    <div class="row justify-content-center">
                                        <div class="col-md pb-3">
                                            <h6>União</h6>
                                            <span class="text-muted">{{ $trainee->association->union->initials }} - {{ $trainee->association->union->name }}</span>
                                        </div>
                                        <div class="col-md pb-3">
                                            <h6>Associação</h6>
                                            <span class="text-muted">{{ $trainee->association->initials }} - {{ $trainee->association->name }}</span>
                                        </div>
                                        <div class="col-md pb-3">
                                            <h6>Estado civil</h6>
                                            <span class="text-muted">{{ $trainee->marital_status }}</span>
                                        </div>
                                        {{-- <div class="col-md pb-3">
                                            <h6>Contato</h6>
                                            <span class="text-muted"><i class="fas fa-phone"></i> {{ $trainee->phone }}</span> <br>
                                            <span class="text-muted"><i class="fas fa-envelope"></i> {{ $trainee->email }}</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 mb-5 bg-white ">
            <div class="cvitae-section-content">
                <div class="row no-gutters">
                    <div class="col-lg-6 p-5 bg-two">
                        {!! $trainee->content !!}
                    </div>
                    <div class="col-lg-6 p-5 bg-white">
                        <div class="row justify-content-sm-center">
                            <div class="col-md-6">
                                @if ($trainee->image_woman != '')
                                    <img class="card-img-top text-center" src="{{ asset('uploads/trainees/'. $trainee->image_woman) }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-sm-center">
                            <h6 class="text-red text-center">{{ $trainee->name_wife }}</h6>
                        </div>
                        {!! $trainee->content_woman !!}
                   </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section logos-->
    <section class="page-section bg-grey pt-5 pb-4">
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
            <div class="dropdown-divider mt-4"></div>
            <div class="row pt-3">
                <div class="col-md">
                    <p class="text-white address">
                        BR-101, km 197, Capoeiruçu <br>
                        Caixa Postal 18, Cachoeira Bahia, <br>
                        CEP: 44.300-000 - Brasil <br>
                        Fone: +55 (75) 3425-8000 <br>
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

@section('scripts')
    
@endsection