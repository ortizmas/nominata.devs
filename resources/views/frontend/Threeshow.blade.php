@extends('layouts.frontend.nominata')

@section('content')


    <div class="hero-show pb-5" id="home">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-1 bg-danger" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/"><img src="{{ asset('assets/img/logo/logo-fadba-2.svg') }}" alt="Nominata" width="40"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#about">Mensagem do Diretor</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#formandos">Uniões</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#formandos">Campos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#formandos">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#data">Datas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="clearfix"></div>
    <!--http://ruvenpelka.com/demos/desmond-resume/light/-->
    <section class="content-page  bg-white" id="formandos">
        {{-- <div class="container-fluid shadow-sm mb-5 bg-white rounded-0">
            <div class="row">
                <div class="col-md-4 bg-one">
                    <div class="container pt-5 pb-5">
                        <div class="row justify-content-end">
                            <div class="col-md-12 pr-2">
                                <a class="formandos-box" href="#" >
                                    <div class="bg-img-two h-100" style="background-image: url({{ asset('uploads/trainees/'. $trainee->image_men) }});"></div>
                                </a>
                                <div class="card border-0">
                                    <div class="card-body bg-status-{{ $trainee->status }}">
                                        <p class="text-white">
                                            <strong>Status: </strong>{!! getStatus($trainee->status) !!}
                                        </p>
                                        <div class="dropdown-divider"></div>
                                        <div class="content-text">
                                            <a style="text-decoration: none;" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=55{{ onlyNumbers($trainee->phone) }}" title=""><span class="text-white"><i class="fas fa-phone"></i> {{ $trainee->phone }}</span></a> <br>
                                            <a style="text-decoration: none;" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone={{ $trainee->phone }}" title=""><span class="text-white"><i class="fas fa-envelope"></i> {{ $trainee->email }}</span></a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container mt-0 mb-5 bg-white ">
            <div class="cvitae-section-conten">
                <div class="row pt-5">
                    <div class="col-md">
                        <h2 class="text-red font-italic font-weight-bold">Informações do formando</h2>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 bg-white pt-5">
                        <div class="container pb-3">
                            <div class="row justify-content-end">
                                <div class="col-xs-12 col-md-12 p-0">
                                    <a class="formandos-box" href="#" >
                                        <div class="bg-img-two h-100" style="background-image: url({{ asset('uploads/trainees/'. $trainee->image_men) }});"></div>
                                    </a>
                                    <div class="card border-0">
                                        <div class="card-body bg-status-{{ $trainee->status }}">
                                            <p class="text-white">
                                                <strong>Status: </strong>{!! getStatus($trainee->status) !!}
                                            </p>
                                            <div class="dropdown-divider"></div>
                                            <div class="content-text">
                                                <a style="text-decoration: none;" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=55{{ onlyNumbers($trainee->phone) }}" title=""><span class="text-white"><i class="fas fa-phone"></i> {{ $trainee->phone }}</span></a> <br>
                                                <a style="text-decoration: none;" target="_blank" href="mailto:{{ $trainee->email }}" title=""><span class="text-white"><i class="fas fa-envelope"></i> {{ $trainee->email }}</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="font-weight-bold text-uppercase pt-4">{{ $trainee->name }}</h6>
                                </div>
                            </div>
                        </div>
                        {!! $trainee->content !!}
                    </div>
                    <div class="col-lg-6 p-5 bg-white">
                        <div class="row justify-content-sm-center">
                            <div class="col-md-6">
                                @if ($trainee->image_woman != '')
                                    <img class="card-img-top text-center bg-img-status-{{ $trainee->status }} rounded-circle" src="{{ asset('uploads/trainees/'. $trainee->image_woman) }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-sm-center pt-2 pb-4">
                            <h6 class="text-dark text-center text-uppercase font-weight-bold">{{ $trainee->name_wife }}</h6>
                        </div>
                        {!! $trainee->content_woman !!}
                   </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section logos-->
    <section class="page-section bg-grey">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-4 col-sm-4 col-md-3 col-lg-3 p-4 text-center">
                    <img src="{{ asset('assets/img/logo/logo-fadba.svg') }}" alt="" class="img-fluid" width="80%">
                </div>
                <div class="col-sm-4 col-sm-4 col-md-3 col-lg-3 p-4 text-center">
                    <img src="{{ asset('assets/img/logo/logo-salt.svg') }}" alt="" class="img-fluid" width="80%">
                </div>
                <div class="col-sm-4 col-sm-4 col-md-3 col-lg-3 p-4 text-center">
                    <img src="{{ asset('assets/img/logo/logo-turma-61.svg') }}" alt="" class="img-fluid" width="80%">
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
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 float-address">
                    <p class="text-muted m-0">&copy; 2019 - <b class="text-red">Faculdade Adventista da Bahia</b> | Projeto desenvolvido por <b>ortizmas14@gmail.com</b></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <ul class="redes-sociais float-redes p-0 m-0">
                        <li><a href="#" title=""><i class="fab fa-facebook" style="font-size: 28px;"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-instagram" style="font-size: 28px;"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-youtube" style="font-size: 28px;"></i></a></li>
                        <li><a href="#" title=""><i class="fab fa-twitter" style="font-size: 28px;"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

@endsection

@section('scripts')
    
@endsection