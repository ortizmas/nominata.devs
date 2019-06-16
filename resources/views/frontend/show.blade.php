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
    <section class="content-page  bg-white" id="formandos">
        <div class="container mt-0 mb-5 bg-white ">
            <div class="row">
                <div class="col-lg-6 bg-white pl-5 pt-3 pr-5 pb-5">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-4">
                            @if ($trainee->image_woman != '')
                                <img class="card-img-top text-center bg-img-status-{{ $trainee->status }} rounded-circle" src="{{ asset('uploads/trainees/'. $trainee->image_woman) }}" alt="">
                                {{-- <img class="card-img-top text-center bg-img-status-{{ $trainee->status }} rounded-circle" src="{{ asset('assets/img/foto-min.png') }}" alt=""> --}}
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 pt-4">
                            <h2>{{ getFirstName($trainee->name)['first_name'] }} <strong>{{ getFirstName($trainee->name)['last_name'] }}</strong></h2>
                            <h4 class="pt-1 pb-1"><strong>Status:</strong> {{ getStatus($trainee->status) }}</h4>
                            <a target="_blank" class="btn btn-primary" href="{{ asset('uploads/files/' . $trainee->file) }}"><strong class="h4">Gerar PDF</strong></a>
                        </div>
                        <div class="col-md-12">
                            <div class="dropdown-divider mt-3 mb-3 color-status-{{ $trainee->status }}"></div>
                            <div class="content-text pb-5">
                                <a style="text-decoration: none;" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=55{{ onlyNumbers($trainee->phone) }}" title=""><span class="text-dark"><i class="fas fa-phone"></i> {{ $trainee->phone }}</span></a> <br>
                                <a style="text-decoration: none;" target="_blank" href="mailto:{{ $trainee->email }}" title=""><span class="text-dark"><i class="fas fa-envelope"></i> {{ $trainee->email }}</span></a>
                            </div>
                        </div>
                    </div>
                    {!! $trainee->content !!}
               </div>

                <div class="col-lg-6 bg-white pl-5 pt-3 pr-5 pb-5">
                    <div class="card border-0 pb-4">
                        <img class="card-img-top rounded-0" src="{{ asset('uploads/trainees/'. $trainee->image_men) }}" alt="{{ $trainee->name }}">
                    </div>
                    {!! $trainee->content_woman !!}
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