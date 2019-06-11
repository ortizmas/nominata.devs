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

        {{-- <div class="hero-show-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-show-wrap flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>JOVENS TALENTOS</h1>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="clearfix">
        
    </div>

	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="col-12 col-lg-12">
				<div class="card mb-3">
					<div class="card-header">
						<h2 class="card-title">{{ $trainee->name }}</h2>
						<p class="card-text float-right"><strong>Idade: </strong>{{ $trainee->age }}</p>
						<p class="card-text"><strong>E-mail: </strong>{{ $trainee->email }}</p>
						<p class="card-text float-right "><strong>Sexo: </strong>{{ ($trainee->gender == 'F') ? 'Femenino' : 'Masculino' }}</p>
						<p class="card-text"><strong>Estado civil: </strong>{{ $trainee->marital_status }}</p>
						
					</div>
					{{-- <div class="card-body">
                        <img src="{{ asset('uploads/trainees/'. $trainee->image) }}" alt="{{ $trainee->name }}" class="img-fluid">
						<p class="card-text">{!! $trainee->content !!}</p>
					</div> --}}
				</div>
			</div>
            {!! $trainee->content !!}


		</div>
        <div class="row mt-2">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>INFORMAÇÕES DA ESPOSA</h2>
                    </div>
                    <div class="card-body">
                        {{-- <img src="{{ asset('uploads/trainees/'. $trainee->image) }}" alt="{{ $trainee->name }}" class="img-fluid"> --}}
                        <p class="card-text">{!! $trainee->content_woman !!}</p>
                    </div>
                </div>
            </div>
        </div>
	</div>

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
            <div class="dropdown-divider"></div>
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