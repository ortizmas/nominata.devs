<div id="menu_area" class="menu-area">
    <div class="container-fluid">
        <div class="container-page">
            <div class="row">
                <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                    {{-- <a class="navbar-brand" href="#"><img src="{{ asset('site/images/logo/logo.png') }}" alt="Logo" class="img-fluid" width="300"></a> --}}
                    <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-gt.png') }}" alt="" class="rounded-circle" width="75" height="75"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li></li>
                        </ul>

                        <ul class="navbar-nav">
                            {!! MyHelper::MenuHeader() !!}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>        
    </div>
</div>