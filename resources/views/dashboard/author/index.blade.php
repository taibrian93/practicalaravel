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
                <li class="breadcrumb-item active"> Autor</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <x-card-success>

    </x-card-success>
    
    <div class="row mb-4">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="{{ route('author.create') }}" class="btn btn-success">
                Crear Autor
            </a>
        </div>
    </div>

    <x-card>
        @slot('ctitle')
            Lista de Autores
        @endslot

        @slot('cbody')
            <x-table class="text-nowrap">
                @slot('thead')
                    <tr>
                        <th>Nro.</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Edad</th>
                        <th>Fecha Registro</th>
                        <th style="width: 15%"></th>
                    </tr>
                @endslot

                @slot('tbody')
                    @foreach ($authors as $key => $author)
                        <tr>
                            <td>{{ (($authors->currentPage()-1)*10)+($key+1) }}</td>
                            <td>{{ $author->nombre.' '.$author->apellido }}</td>
                            <td>{{ $author->dni }}</td>
                            <td>{{ $author->edad }}</td>
                            <td>{{ $author->created_at->format('d-m-Y') }}</td>
                            <th>
                                
                                    <a href="{{ route('author.edit', $author)}}" class="btn bg-lightblue btn-md" title="Editar">
                                        <i class="fas fa-edit"></i>
                                        
                                    </a>
            
                                    <a href="#" class="btn btn-danger btn-md delete" author="{{ $author->id }}" title="Eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                        
                                    </a>
                                
                            </th>
                        </tr>
                    @endforeach
                @endslot
            </x-table>
        @endslot
        
        <x-slot name="cfooter">
            {{ $authors->links() }}
        </x-slot>  
            
    </x-card>

@stop

@section('css')

@stop

@section('js')
    <script src="{{ asset('js/author.js') }}"></script>
@stop
