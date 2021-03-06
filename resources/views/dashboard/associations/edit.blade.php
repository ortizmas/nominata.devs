@extends('layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Alterar Associação</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('associations.index') }}" class="btn btn-info btn-sm">Lista de Associação</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('associations.update', $association->id) }}" method="post" novalidate="">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input id="initials" type="text" class="basic-usage form-control{{ $errors->has('initials') ? ' is-invalid' : '' }}" name="initials" value="{{ old('initials', $association->initials ) }}" placeholder="CURSO" required autofocus> 
                                    @if ($errors->has('initials'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('initials') }}</strong>
                                        </span> 
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input id="slug" type="text" class="basic-usage form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug', $association->slug) }}" placeholder="SLUG CURSO" required autofocus> 
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('slug') }}</strong>
                                        </span> 
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input id="name" type="text" class="basic-usage form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $association->name) }}" placeholder="Associação" required autofocus> 
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span> 
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <select id="unionId" name="union_id" class="form-control{{ $errors->has('union_id') ? ' is-invalid' : '' }}">
                                        <option value="">União</option>
                                        @foreach ($unions as $value)
                                            <option value="{{ $value->id }}" {{ old('union_id', $association->union_id )== $value->id ? 'selected' : ''  }}>{{ $value->initials }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <span class="input-group-btn">
                                        <button class="category-modal btn btn-outline-dark" type="button" data-toggle="modal" data-target="#modalForm"><i class="fa fa-plus fa-fw"></i></button>
                                    </span> --}}
                                    @if ($errors->has('union_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('union_id') }}</strong>
                                        </span> 
                                    @endif
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar união</button>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
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
   {{--  <script src="//cdnjs.cloudflare.com/ajax/libs/speakingurl/13.0.0/speakingurl.min.js" type="text/javascript"></script>
    <script src="/dist/plugins/stringToSlug/jquery.stringtoslug.min.js"></script> --}}
    <script src="/dist/plugins/stringToSlug/jquery.stringToSlug.1.3.min.js"></script>
    
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <script src="/dist/js/demo.js"></script>

    <script>
        $(document).ready( function() {
            //$("#basic-usage").stringToSlug();
            $("#initials").stringToSlug({
                 getPut: '#slug',
            });
        });
    </script>

@stop