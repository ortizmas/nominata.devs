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
                                    <div class="bg-img h-100" style="background-image: url({{ asset('assets/img/formandos/5/5.png') }});"></div>
                                </a>
                                <div class="card border-0">
                                    {{-- <img src="{{ asset('assets/img/formandos/5/5.png') }}" alt="" class="card-img-top img-fluid" width="100%"> --}}
                                    <div class="card-body bg-status-1">
                                        <p class="text-white">
                                            <strong>Status: </strong>Chamado oficial
                                        </p>
                                        <div class="dropdown-divider"></div>
                                        <div class="content-text">
                                            <span class="text-white"><i class="fas fa-phone"></i> (75) 9 9116.1987</span> <br>
                                            <span class="text-white"><i class="fas fa-envelope"></i> diegoverissimo@live.com</span>
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
                                    <h2 class="text-red pb-5">Diego Rodrigues Veríssimo</h2>

                                    <div class="hr-content mb-4"></div>
                                    <div class="row justify-content-center">
                                        <div class="col-md pb-3">
                                            <h6>União</h6>
                                            <span class="text-muted">ASR - Associação Sul-Rio-Grandense</span>
                                        </div>
                                        <div class="col-md pb-3">
                                            <h6>Associação</h6>
                                            <span class="text-muted">ASR - Associação Sul-Rio-Grandense</span>
                                        </div>
                                        <div class="col-md pb-3">
                                            <h6>Estado civil</h6>
                                            <span class="text-muted">Casado</span>
                                        </div>
                                        <div class="col-md pb-3">
                                            <h6>Contato</h6>
                                            <span class="text-muted"><i class="fas fa-phone"></i> (75) 9 9116.1987</span> <br>
                                            <span class="text-muted"><i class="fas fa-envelope"></i> diegoverissimo@live.com</span>
                                        </div>
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
                        <h6>DADOS PESSOAIS:</h6>
                        <p>
                            <strong>CAMPO DE ORIGEM:</strong> Uni&atilde;o Nordeste Brasileira &ndash; UNeB<br />
                            <strong>ASSOCIA&Ccedil;&Atilde;O</strong>: Pernambucana Central &ndash; APeC<br />
                            <strong>NATURALIDADE</strong>: Caruaru-PE<br />
                            <strong>Data de Nascimento e Idade:</strong> 19/06/1987 / 31 anos<br />
                            <strong>Ano de Batismo e Tempo:</strong> 30/09/1995 / 23 anos<br />
                            <strong>Local de Batismo:</strong> Igreja do Vassoural - Caruaru-PE<br />
                            <strong>Estado Civil:</strong> Casado<br />
                            <strong>Filhos:</strong> Uma<br />
                            <strong>Contato:</strong> (75) 9 9116.1987<br />
                            <strong>e-mail:</strong> diegoverissimo@live.com
                        </p>
                    </div>
                    <div class="col-lg-6 p-5 bg-four">
                        <h6>MINIST&Eacute;RIOS COM OS QUAIS SE IDENTIFICA:</h6>
                        <ul>
                            <li>Evangelismo</li>
                            <li>Pessoal</li>
                            <li>Pequenos Grupos</li>
                            <li>Escola Sabatina</li>
                            <li>Comunica&ccedil;&atilde;o</li>
                            <li>Jovem</li>
                            <li>Desbravadores</li>
                            <li>Aventureiros</li>
                            <li>Fam&iacute;lia</li>
                            <li>Capelania</li>
                            <li>M&uacute;sica</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5 bg-white ">
            <div class="cvitae-section-content">
                <div class="row no-gutters">
                    <div class="col-lg-6 p-5 bg-white">
                        <p><strong>FORMA&Ccedil;&Otilde;ES E OUTRAS COMPET&Ecirc;NCIAS:</strong></p>
                        <ul>
                            <li><strong>Graduando em Teologia -</strong>Semin&aacute;rio Adventista Latino-americano de Teologia SALT / FADBA - 2019</li>
                            <li><strong>Bacharel em Design Gr&aacute;fico -</strong> Universidade Federal de Pernambuco &ndash; UFPE - 2017)</li>
                            <li><strong>T&eacute;cnico em Web Designer -</strong>Microcamp (2008)</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 p-5 bg-one">
                        <p><strong>EXPERI&Ecirc;NCIAS PROFISSIONAIS:</strong></p>
                        <ul>
                            <li><strong>Marketing da FADBA -</strong> Designer Publicit&aacute;rio - 2016-2018</li>
                            <li>Alguns Projetos gr&aacute;ficos realizados:</li>
                            <li><strong>Associa&ccedil;&atilde;o Geral</strong> Departamento de Publica&ccedil;&otilde;es - 2019</li>
                            <li><strong>Divis&atilde;o Sul-Americana: </strong>Departamento de Publica&ccedil;&otilde;es - 2019</li>
                            <li><strong>IDEC:</strong> FADBA / UNASP Campus I e II &ldquo;At&eacute; que Ele venha&rdquo; - 2019</li>
                            <li><strong>UNeB:</strong> Assinatura visual e artes Colportagem Nordeste - 2018-2019</li>
                            <li><strong>FADBA / P&oacute;s-gradua&ccedil;&atilde;o - </strong>2017-2018</li>
                            <li><strong>SALT - </strong>Assinatura visual (premiada) da Editora - 2017</li>
                            <li><strong>Designer Gr&aacute;fico - </strong>2011-2015:</li>
                            <li>Gr&aacute;fica e Editora Offset</li>
                            <li>Serigrafia</li>
                            <li>Flexografia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5 bg-white ">
            <div class="cvitae-section-content">
                <div class="row no-gutters">
                    <div class="col-lg-6 p-5 bg-two">
                        <p><strong><u>ATIVIDADES DESENVOLVIDAS NO SALT-FADBA:</u></strong></p>
                        <ul>
                            <li><strong>Diretor de Arte -</strong> Site da Nominata - 2019</li>
                            <li><strong>Miss&atilde;o Iaenense - </strong>Departamental de M&uacute;sica - 2019</li>
                            <li><strong>Diretor musical -</strong> L&oacute;gos (Quarteto do SALT) - 2019</li>
                            <li><strong>Comiss&atilde;o de formatura - </strong>Designer Gr&aacute;fico da turma 61 - 2019</li>
                            <li><strong>Coordenador de Pr&aacute;tica e Pequenos Grupos - </strong>Cria&ccedil;&atilde;o da Rede de PG&rsquo;s e Prot&oacute;tipo PG (<em>Alfa</em>) da IASD Jardim Petrolar, Alagoinhas-BA - 2019</li>
                            <li><strong>Diret&oacute;rio Acad&ecirc;mico - </strong>Diretor de Marketing - 2018</li>
                            <li><strong>Clube de Aventureiros - </strong>Instrutor - 2018</li>
                            <li><strong>Pr&aacute;tica Pastoral - </strong>Cria&ccedil;&atilde;o do Pequeno Grupo prot&oacute;tipo (<em>Beta</em>) da IASD Jardim Petrolar, Alagoinhas-BA - 2017-2018</li>
                            <li><strong>Desbravadores - </strong>L&iacute;der - 2017</li>
                            <li><strong>L&oacute;gos Quarteto - </strong>Membro - 2016-2019</li>
                            <li><strong>Pequenos Grupo Prot&oacute;tipo de Teologandos &ndash; </strong>L&iacute;der - 2016</li>
                            <li><strong>Comunica&ccedil;&atilde;o da Igreja do Campus &ndash; </strong>Auxiliar - 2016</li>
                        </ul>
                        <br>
                        <p><strong><u>EVANGELISMO P&Uacute;BLICO E PLANTIO DE IGREJAS:</u></strong></p>
                        <ul>
                            <li><strong>Evangelismo P&uacute;blico - </strong>2</li>
                            <li><strong>Semana do Calv&aacute;rio - </strong>2010-2019</li>
                            <li><strong>Obreiro Evangelista - </strong>2010</li>
                            <li><strong>Miss&atilde;o Calebe - </strong>2006-2010</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 p-5 bg-one">
                        <p><strong><u>EXPERI&Ecirc;NCIA COMO COLPORTOR EVANGELISTA:</u></strong></p>
                        <ul>
                            <li><strong>IDEC - </strong>Palestrante para Colportores Veteranos de igrejas evang&eacute;licas - 2018</li>
                            <li><strong>Escola de L&iacute;deres do IDEC - </strong>Palestrante sobre Marketing &ndash; 2018</li>
                            <li><strong>Escola de L&iacute;deres do IDEC - </strong>Formado &ndash;2017</li>
                            <li><strong>Colportagem - </strong>L&iacute;der - 2017.2</li>
                            <li><strong>UNeB Minist&eacute;rio Publica&ccedil;&otilde;es - </strong>Colportor Destaque por 2 anos no segmento de Igreja Evang&eacute;lica - 2016/2017</li>
                        </ul>
                        <p><strong><u>ATIVIDADES DESENVOLVIDAS NA IGREJA DE ORIGEM:</u></strong></p>
                        <ul>
                            <li><strong>Anci&atilde;o Ordenado - </strong>4 anos</li>
                            <li><strong>Tesoureiro - </strong>4 anos</li>
                            <li><strong>Minist&eacute;rio Jovem - </strong>Diretor - 3 anos</li>
                            <li><strong>Clube de Jovens - </strong>L&iacute;der investido no Campor&iacute; da UNeB, Jovens Por Uma Paix&atilde;o - 2007</li>
                            <li><strong>Pequeno Grupo Jovem - </strong>L&iacute;der - 2 anos</li>
                            <li><strong>Minist&eacute;rio da M&uacute;sica - </strong>Diretor - 5 anos</li>
                            <li><strong>Clube de Desbravadores - </strong>Conselheiro - 2 anos</li>
                            <li><strong>Clube de Desbravadores - </strong>Capel&atilde;o - 1 ano</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Familia-->
        <div class="container shadow-sm mb-5 bg-white rounded-0">
            <div class="row">
                <div class="col-md-6 bg-three">
                    <div class="container pt-5 pb-5">
                        <div class="row justify-content-end">
                            <div class="col-md-12">
                                <div class="card border-1">
                                    <img class="card-img-top" src="{{ asset('http://127.0.0.1:8000/uploads/source/formandos/01/diego-2-min.png') }}" alt="">
                                    <div class="card-body bg-status-1">
                                        <p class="text-white">
                                            <strong>Diego </strong> e  Familia
                                        </p>
                                        <div class="dropdown-divider"></div>
                                        <div class="content-text">
                                            <p class="text-white">
                                                <strong>Status: </strong> eChamado oficial
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white">
                    <div class="container h-100">
                        <div class="row h-100 justify-content-center align-items-center">
                            <div class="col-sm-12 col-md-8 col-lg-8">
                                <img src="{{ asset('http://127.0.0.1:8000/uploads/source/formandos/01/diego-3-min.png') }}" alt="" class="img-fluid border-1">
                                <h4 class="text-red text-center">EDITTE SOARES DE ABREU VERÍSSIMO</h4>
                            </div>
                            <div class="col-md-12 align-items-center">
                                <div class="content-text">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 pb-3">
                                            <ul class="list-group">
                                                <li class="list-group-item">CAMPO DE ORIGEM: União Nordeste Brasileira – UNeB</li>
                                                <li class="list-group-item">ASSOCIAÇÃO: Pernambucana Central – APeC</li>
                                                <li class="list-group-item">Data de Nascimento e Idade: 06/12/1987 / 31 anos</li>
                                                <li class="list-group-item">Ano de Batismo e Tempo: 30/09/01 / 17 anos</li>
                                                <li class="list-group-item">Local de Batismo: Lagoa dos Gatos-PE</li>
                                                <li class="list-group-item">Número de Telefone: (71) 9 9976.9225</li>
                                                <li class="list-group-item">e-mail: edittesoares@hotmail.com</li>
                                            </ul>
                                        </div>
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
                        <p><strong>MINIST&Eacute;RIOS COM OS QUAIS SE IDENTIFICA:</strong></p>
                        <ul>
                            <li>ASA</li>
                            <li>ADRA</li>
                            <li>Sa&uacute;de</li>
                            <li>Pessoal</li>
                            <li>Fam&iacute;lia</li>
                            <li>Jovens</li>
                            <li>Mulher</li>
                            <li>Crian&ccedil;a</li>
                        </ul>
                        <p><strong>FORMA&Ccedil;&Otilde;ES E OUTRAS COMPET&Ecirc;NCIAS:</strong></p>
                        <ul>
                            <li><strong>Especialista em Fisioterapia Dermatofuncional - </strong>Faculdade Inspirar, Curitiba-PR - 2014</li>
                            <li><strong>Bacharelado em Fisioterapia -</strong> ASCES UNITA, Caruaru-PE - 2012</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 p-5 bg-one">
                        <p><strong>EXPERI&Ecirc;NCIAS PROFISSIONAIS: </strong></p>
                        <ul>
                            <li><strong>Atua&ccedil;&atilde;o Cl&iacute;nica em Fisioterapia - </strong>2012-2019</li>
                        </ul>
                        <p><strong>ATIVIDADES DESENVOLVIDAS ENQUANTO ESPOSA DE TEOLOGANDO:</strong></p>
                        <ul>
                            <li><strong>Aprendendo a ser mam&atilde;e AFAM - </strong>Diretora do Curso &ndash; 2019</li>
                            <li><strong>Minist&eacute;rio da Mulher AFAM</strong> <strong>-</strong> 2019</li>
                            <li><strong>Minist&eacute;rio de Comunica&ccedil;&atilde;o AFAM</strong> <strong>-</strong> 2019</li>
                            <li><strong>AFAM</strong> <strong>-</strong> Participa&ccedil;&atilde;o em todos os anos</li>
                            <li><strong>Classe Rol do Ber&ccedil;o</strong> <strong>-</strong> Professora auxiliar &ndash; 2 anos</li>
                            <li><strong>Feiras de Sa&uacute;de - </strong>Participa&ccedil;&atilde;o</li>
                            <li><strong>Palestrante</strong> <strong>-</strong> Tem&aacute;tica feminina</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 mb-5 bg-white ">
            <div class="cvitae-section-content">
                <div class="row no-gutters">
                    <div class="col-lg-6 p-5 bg-one">
                        <p><strong>ATIVIDADES NA IGREJA DE ORIGEM:</strong></p>
                        <ul>
                            <li><strong>Secret&aacute;ria -</strong> 2 anos</li>
                            <li><strong>Secret&aacute;ria da Escola Sabatina</strong> <strong>-</strong> 1 ano</li>
                            <li><strong>Tesoureira -</strong> 2 anos</li>
                            <li><strong>Coordenadora de Interessados -</strong> 2 anos</li>
                            <li><strong>Diretora de Comunica&ccedil;&atilde;o -</strong> 2 anos</li>
                            <li><strong>Diretora de Recep&ccedil;&atilde;o -</strong> 2 anos</li>
                            <li><strong>L&iacute;der de Pequenos Grupos -</strong> 1 ano</li>
                            <li><strong>Professora da Classe de Jovens -</strong> 2 anos</li>
                            <li><strong>L&iacute;der de Jovens - </strong>investida no Campor&iacute; da UNeB, Jovens Por Uma Paix&atilde;o - 2007</li>
                            <li><strong>Clube de Desbravadores -</strong> Diretora Associada - 1 ano</li>
                            <li><strong>Clube de Desbravadores &ndash; </strong>Conselheira - 1 ano</li>
                            <li><strong>Clube de Desbravadores -</strong> Capel&atilde; - 1 ano</li>
                            <li><strong>Clube de Desbravadores -</strong> Tesoureira - 2 anos</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 p-5 bg-four">
                        <p><strong>EVANGELISMO P&Uacute;BLICO E PLANTIO DE IGREJA:</strong></p>
                        <ul>
                            <li><strong>Miss&atilde;o Calebe - </strong>Caruaru-PE - 2008</li>
                            <li><strong>Evangelismo - </strong>Maria de F&aacute;tima Freire - Arcoverde-PE - 2018</li>
                        </ul>
                        <p><strong>COLPORTAGEM:</strong></p>
                        <ul>
                            <li><strong>Seguimento porta a porta -</strong> Santa Cruz do Capibaribe-PE - 2016</li>
                        </ul>
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