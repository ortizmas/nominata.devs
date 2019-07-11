@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="/dist/plugins/pickadate/compressed/default.css">
    <link rel="stylesheet" href="/dist/plugins/pickadate/compressed/default.date.css">
    <link rel="stylesheet" href="/dist/plugins/pickadate/compressed/default.time.css">

@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Formandos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('trainees.index') }}" class="btn btn-info btn-sm">Lista de formandos</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      	<div class="container-fluid">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('error') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('trainees.store') }}" method="post" novalidate="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body register-card-body">
                                

                                <div class="row">
                                    <div class="input-group mb-3 col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nome completo" required autofocus> 
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span> 
                                        @endif
                                    </div>

                                    <div class="input-group mb-3 col-md-6">
                                        <input id="permalink" type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') }}" placeholder="URL do trainee" required autofocus>
                                        @if ($errors->has('slug'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('slug') }}</strong>
                                            </span> 
                                        @endif
                                    </div>
                                    
                                </div>
                                <div class="row">

                                    <div class="input-group mb-3 col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus> 
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span> 
                                        @endif
                                    </div>

                                    <div class="input-group mb-3 col-md-6">
                                        <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Telefone" required autofocus> 
                                        @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span> 
                                        @endif
                                    </div>
                                </div>

                                

                                <div class="row justify-content-center">
                                    <div class="col-xs-12 col-md-2">
                                        <div class="input-group mb-3">
                                            <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" placeholder="Idade" required autofocus> 
                                            @if ($errors->has('age'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('age') }}</strong>
                                            </span> 
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 text-center">
                                        <label for="">Sexo </label>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="gender" id="sexoYes"  value="F" {{ old('gender') == 'F' ? 'checked' : ''}} class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"/>
                                          <label class="form-check-label" for="gender"> Femenino</label>
                                      </div>
                                      <div class="form-check form-check-inline pt-2 pb-4">
                                          <input class="form-check-input" type="radio" name="gender" id="sexoNo"  value="M" {{ old('gender') == 'M' ? 'checked' : ''}} class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"/>
                                          <label class="form-check-label" for="gender"> Masculino</label>
                                          @if ($errors->has('gender'))
                                                <span class="invalid-feedback" role="alert" style="display: block;">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span> 
                                            @endif
                                      </div>
                                        
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <div class="input-group mb-3">
                                            <select id="marital_status" name="marital_status" class="form-control{{ $errors->has('marital_status') ? ' is-invalid' : '' }}">
                                                <option value="">Estado civil</option>
                                                <option value="SOLTEIRO" {{ old('marital_status')=='SOLTEIRO' ? 'selected' : ''  }}>SOLTEIRO</option>
                                                <option value="CASADO" {{ old('marital_status')=='CASADO' ? 'selected' : ''  }}>CASADO</option>
                                                <option value="SEPARADO" {{ old('marital_status')=='SEPARADO' ? 'selected' : ''  }}>SEPARADO</option>
                                                <option value="DIVORCIADO" {{ old('marital_status')=='DIVORCIADO' ? 'selected' : ''  }}>DIVORCIADO</option>
                                                <option value="VIÚVO" {{ old('marital_status')=='VIÚVO' ? 'selected' : ''  }}>VIÚVO</option>

                                            </select>
                                            @if ($errors->has('marital_status'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('marital_status') }}</strong>
                                            </span> 
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="input-group mb-3">
                                    <input id="some_charges" type="text" class="form-control{{ $errors->has('some_charges') ? ' is-invalid' : '' }}" name="some_charges" value="{{ old('some_charges') }}" placeholder="Função" required autofocus> 
                                    @if ($errors->has('some_charges'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('some_charges') }}</strong>
                                        </span> 
                                    @endif
                                </div> --}}

                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input {{ $errors->has('file') ? ' is-invalid' : ''}}" id="customFile1" lang="pt-BR">
                                        <label class="custom-file-label" for="customFile">Arquivo PDF</label>
                                    </div>
                                    @if ($errors->has('file'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('file') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input {{ $errors->has('image') ? ' is-invalid' : ''}}" id="customFile1" lang="pt-BR">
                                        <label class="custom-file-label" for="customFile">Imagen principal</label>
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="image_men" class="custom-file-input {{ $errors->has('image_men') ? ' is-invalid' : ''}}" id="customFile2" lang="pt-BR">
                                        <label class="custom-file-label" for="customFile">Imagen formando</label>
                                    </div>
                                    @if ($errors->has('image_men'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('image_men') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-group mb-3">
                                    <textarea id="content_men" name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="Conteudo do formando" rows="10">{{ old('content') }}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span> 
                                    @endif
                                </div>   
                                <h2>DADOS DA ESPOSA</h2>
                                <div class="input-group mb-3 ">
                                    <input id="name_wife" type="text" class="form-control{{ $errors->has('name_wife') ? ' is-invalid' : '' }}" name="name_wife" value="{{ old('name_wife') }}" placeholder="Nome completo da esposa" required autofocus> 
                                    @if ($errors->has('name_wife'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name_wife') }}</strong>
                                    </span> 
                                    @endif
                                </div>

                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="image_woman" class="custom-file-input {{ $errors->has('image_woman') ? ' is-invalid' : ''}}" id="customFile3" lang="pt-BR">
                                        <label class="custom-file-label" for="customFile">Imagen Familia</label>
                                    </div>
                                    @if ($errors->has('image_woman'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('image_woman') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                {{-- <div class="form-group mb-3">
                                    <textarea id="description" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Resumo..." rows="10">{{ old('description') }}</textarea>
                                    <samll id="edescriptionHelp" class="form-text text-muted">Resumos são pequenas descrições opcionais do conteúdo do seu post feitas manualmente, que podem ser usadas em seu tema. <a target="_blank" href="https://codex.wordpress.org/pt-br:Resumo" title="Resumo">Aprenda mais sobre resumos manuais.</a></small>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span> 
                                    @endif
                                </div> --}}

                                <div class="input-group mb-3">
                                    <textarea id="content_woman" name="content_woman" class="form-control{{ $errors->has('content_woman') ? ' is-invalid' : '' }}" placeholder="Conteudo da esposa" rows="10">{{ old('content_woman') }}</textarea>
                                    @if ($errors->has('content_woman'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('content_woman') }}</strong>
                                        </span> 
                                    @endif
                                </div>                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body register-card-body">

                                <div class="input-group mb-3">
                                    <select id="Associationd" name="association_id" class="form-control{{ $errors->has('association_id') ? ' is-invalid' : '' }}">
                                        <option value="">Associação</option>
                                        @foreach ($associations as $value)
                                            <option value="{{ $value->id }}" {{ old('association_id')== $value->id ? 'selected' : ''  }}>{{ $value->initials }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('association_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('association_id') }}</strong>
                                        </span> 
                                    @endif
                                </div>

                                {{-- <div class="input-group mb-3">
                                    <select id="PeriodId" name="period_id" class="form-control{{ $errors->has('period_id') ? ' is-invalid' : '' }}">
                                        <option value="">Periodo</option>
                                        @foreach ($periods as $value)
                                            <option value="{{ $value->id }}" {{ old('period_id')== $value->id ? 'selected' : ''  }}>{{ $value->year }}</option>
                                        @endforeach
                                    </select>
                                    <span class="input-group-btn">
                                        <button class="course-modal btn btn-outline-info" type="button" data-toggle="modal" data-target="#modalForm"><i class="fa fa-plus fa-fw"></i></button>
                                    </span>
                                    @if ($errors->has('period_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('period_id') }}</strong>
                                        </span> 
                                    @endif
                                </div> --}}

                                <label for="">Têm url externa? </label>
                                <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="redirect" id="redirectYes"  value="1" {{ old('redirect') == 1 ? 'checked' : ''}} />
                                      <label class="form-check-label" for="redirect"> Sim</label>
                                </div>
                                <div class="form-check form-check-inline pt-2 pb-4">
                                      <input class="form-check-input" type="radio" name="redirect" id="redirectNo"  value="0" {{ old('redirect') == 0 ? 'checked' : ''}} />
                                      <label class="form-check-label" for="redirect"> Não</label>

                                </div>

                                <div class="input-group mb-3">
                                    <input id="external_url" type="text" class="form-control{{ $errors->has('external_url') ? ' is-invalid' : '' }}" name="external_url" value="{{ old('external_url') }}" placeholder="Url externa se tiver (opcional)" required autofocus> 
                                    @if ($errors->has('external_url'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('external_url') }}</strong>
                                        </span> 
                                    @endif
                                </div>


                                <div class="input-group mb-3 w-25">
                                    <input id="order" type="text" class="form-control{{ $errors->has('order') ? ' is-invalid' : '' }}" name="order" value="{{ old('order') }}" placeholder="Ordem" required autofocus> 
                                    @if ($errors->has('order'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('order') }}</strong>
                                        </span> 
                                    @endif
                                </div>

                                <div class="input-group mb-3">
                                    <select id="enabled" name="enabled" class="form-control{{ $errors->has('enabled') ? ' is-invalid' : '' }}">
                                        <option value="1" {{ old('enabled')=='1' ? 'selected' : ''  }}>Ativo</option>
                                        <option value="0" {{ old('enabled')=='0' ? 'selected' : ''  }}>Inativo</option>
                                    </select>
                                    @if ($errors->has('enabled'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('enabled') }}</strong>
                                        </span> 
                                    @endif
                                </div>
                                <br>
                                <div class="text-muted">
                                    <h6><strong>ATUALIZAR STATUS DOS FORMANDOS</strong></h6>
                                    <hr>
                                </div>
                                <div class="input-group mb-3">
                                    <select id="status" name="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                        <option value="2" {{ old('status')=='2' ? 'selected' : ''  }}>Disponível</option>
                                        <option value="3" {{ old('status')=='3' ? 'selected' : ''  }}>Contratado</option>
                                        <option value="1" {{ old('status')=='1' ? 'selected' : ''  }}>Chamado Oficial</option>
                                        <option value="4" {{ old('status')=='4' ? 'selected' : ''  }}>Contratada</option>

                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span> 
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar trainee</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
      	</div>
    </section>
    <!-- /.content -->

    <!--mODAL INFO-->
    <div class="modal modal-info fade" id="modalForm">
        <div class="modal-dialog">
            <form action="{{ route('ajax.create') }}" method="post" novalidate="" id="frm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title float-left">Nova categoria</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="float-right">&times;</span>
                        </button>


                    </div>
                    <div class="modal-body">

                        @include('dashboard.categories.helpers.categoria-modal', ['some' => 'data'])
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger pull-left" data-dismiss="modal">Fechar</button>
                        <button type="submitalvar categoria" class="btn btn-outline-info">Salvar categoria</button>
                    </div>
                </div>

            <!-- /.modal-content -->
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    </div>
    <!-- /.content-wrapper -->
@endsection

@section('javascript')
     <!-- jQuery -->
    <script src="/dist/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!--StringToSlug-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/speakingurl/13.0.0/speakingurl.min.js" type="text/javascript"></script>
    <script src="/dist/plugins/stringToSlug/jquery.stringtoslug.min.js"></script>
    <!--Bootstrap 4 DatePicker-->
    {{-- <script src="/dist/plugins/pickadate/legacy.js"></script> --}}
    <script src="/dist/plugins/pickadate/picker.js"></script>
    <script src="/dist/plugins/pickadate/picker.date.js"></script>
    <script src="/dist/plugins/pickadate/picker.time.js"></script>
    <!--Mask Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    {{-- <script src="/dist/plugins/input-mask/jquery.inputmask.extension.js"></script> --}}
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('js/ajax-crud-modal-form.js') }}"></script>
    
    <script src="/dist/js/demo.js"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug();
            $(".modal-course").stringToSlug({
                getPut: '#slug-modal',
            });
        });

        $('.custom-file-input').on('change', function() { 
            let fileName = $(this).val().split('\\').pop(); 
            $(this).next('.custom-file-label').addClass("selected").html(fileName); 
        });
        
        $('#phone').mask('(00) 0000-00009');
        $('#phone').blur(function(event) {
           if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
              $('#phone').mask('(00) 00000-0009');
           } else {
              $('#phone').mask('(00) 0000-00009');
           }
        });
        
    </script>

    <script src="/vendor/filemanagerjs/tinymce/tinymce.min.js" type="text/javascript"></script>

    {{-- <script src="{{ asset('/dist/plugins/tinymce/tinymce.min.js') }}" type="text/javascript"></script> --}}
    <script>
        // var editor_config = {
        //     path_absolute : "/",
        //     selector: "textarea#content",
        //     plugins: [
        //     "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        //     "searchreplace wordcount visualblocks visualchars code fullscreen",
        //     "insertdatetime media nonbreaking save table contextmenu directionality",
        //     "emoticons template paste textcolor colorpicker textpattern"
        //     ],
        //     toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        //     relative_urls: false,
        //     file_browser_callback : function(field_name, url, type, win) {
        //         var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        //         var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        //         var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        //         if (type == 'image') {
        //             cmsURL = cmsURL + "&type=Images";
        //         } else {
        //             cmsURL = cmsURL + "&type=Files";
        //         }

        //         tinyMCE.activeEditor.windowManager.open({
        //             file : cmsURL,
        //             title : 'Filemanager',
        //             width : x * 0.8,
        //             height : y * 0.8,
        //             resizable : "yes",
        //             close_previous : "no"
        //         });
        //     }
        // };

        // tinymce.init(editor_config);
        
        var BASE_URL = "/"; // use your own base url

        tinymce.init({
            selector: "#description",
            // theme: "modern",width: 1200,height: 60,
            relative_urls: false,
            remove_script_host: false,
            plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste responsivefilemanager textcolor code"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| link unlink anchor | responsivefilemanager | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,
            relative_urls: false,

            external_filemanager_path: BASE_URL + "vendor/filemanagerjs/filemanager/",
            filemanager_title: "Media Gallery",
            external_plugins: { "filemanager": BASE_URL + "vendor/filemanagerjs/filemanager/plugin.min.js" }

        });

        tinymce.init({
            selector: "#content_men",
            // theme: "modern",width: 1200,height: 60,
            relative_urls: false,
            remove_script_host: false,
            plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste responsivefilemanager textcolor code"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| link unlink anchor | responsivefilemanager | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,
            relative_urls: false,

            external_filemanager_path: BASE_URL + "vendor/filemanagerjs/filemanager/",
            filemanager_title: "Media Gallery",
            external_plugins: { "filemanager": BASE_URL + "vendor/filemanagerjs/filemanager/plugin.min.js" }

        });

        tinymce.init({
            selector: "#content_woman",
            // theme: "modern",width: 1200,height: 60,
            relative_urls: false,
            remove_script_host: false,
            plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste responsivefilemanager textcolor code"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| link unlink anchor | responsivefilemanager | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,
            relative_urls: false,

            external_filemanager_path: BASE_URL + "vendor/filemanagerjs/filemanager/",
            filemanager_title: "Media Gallery",
            external_plugins: { "filemanager": BASE_URL + "vendor/filemanagerjs/filemanager/plugin.min.js" }

        });

    </script>
@stop