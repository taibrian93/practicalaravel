@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Autor</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard"> Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('author.index') }}"> Autor</a></li>
                <li class="breadcrumb-item active"> Editar Autor</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                {!! Form::model($author,['route' => ['author.update', $author], 'method' => 'put' ]) !!}
                    <div class="card-header">
                        <h3 class="card-title">
                            Editar Autor
                        </h3>
                    </div>
                    
                    <div class="card-body">
                        @include('dashboard.author.partials.form')
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" title="Editar">
                            <i class="fas fa-edit"></i>
                            
                        </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@stop

@section('css')

@stop

@section('js')
    <script src="{{ asset('js/author.js') }}"></script>
        
@stop
