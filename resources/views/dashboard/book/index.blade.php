@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Libro</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard"> Inicio</a></li>
                <li class="breadcrumb-item active"> Libro</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <x-card-success>

    </x-card-success>

    <div class="row mb-4">
        <div class="col-md-12 d-flex justify-content-end">
            <a href="{{ route('book.create') }}" class="btn btn-success">
                Crear Libro
            </a>
        </div>
    </div>

    <x-card>
        @slot('ctitle')
            Lista de Libros
        @endslot

        @slot('tsearch')
            <div class="card-tools">
                {!! Form::open(['route' => 'book.index', 'method' => 'get']) !!}
                    <div class="input-group input-group-sm" style="width: 30vw;">
                            <input type="text" name="search" class="form-control float-right" placeholder="Buscar...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                    </div>
                {!! Form::close() !!}
            </div>
        @endslot

        @slot('cbody')
            <x-table>
                @slot('thead')
                    <tr>
                        <th style="width: 5%">Nro.</th>
                        <th style="width: 15%">Autor</th>
                        <th style="width: 20%">Titulo</th>
                        <th style="width: 5%">Año</th>
                        <th style="width: 25%">Ubicacion</th>
                        <th style="width: 10%">Copia</th>
                        <th style="width: 10%">F. Registro</th>
                        <th style="width: 10%"></th>
                    </tr>
                @endslot

                @slot('tbody')
                    @foreach ($books as $key => $book)
                        <tr>
                            <td>{{ (($books->currentPage()-1)*10)+($key+1) }}</td>
                            <td>{{ ($book->idAuthor == NULL ? '' : $book->author->nombre).' '.($book->idAuthor == NULL ? '' : $book->author->apellido) }}</td>
                            <td>{{ $book->titulo }}</td>
                            <td>{{ $book->annoPublicacion }}</td>
                            <td>{{ $book->ubicacionLibrero }}</td>
                            <td>{{ $book->numeroCopia }}</td>
                            <td>{{ $book->created_at->format('d-m-Y') }}</td>
                            <th class="text-nowrap">
                                
                                    <a href="{{ route('book.edit', $book)}}" class="btn bg-lightblue btn-sm" title="Editar">
                                        <i class="fas fa-edit"></i>
                                        
                                    </a>
            
                                    <a href="#" class="btn btn-danger btn-sm delete" book="{{ $book->id }}" title="Eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                        
                                    </a>
                                
                            </th>
                        </tr>
                    @endforeach
                @endslot
            </x-table>
        @endslot
        
        <x-slot name="cfooter">
            {{ $books->links() }}
        </x-slot>  
            
    </x-card>
@stop

@section('css')
    
@stop

@section('js')
 
        
    <script src="{{ asset('js/book.js') }}"></script>

@stop
