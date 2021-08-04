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

        @slot('cbody')
            <x-table>
                @slot('thead')
                    <tr>
                        <th style="max-width: 5%">Nro.</th>
                        <th style="max-width: 5%">Autor</th>
                        <th style="max-width: 20%">Titulo</th>
                        <th style="max-width: 10%">Año</th>
                        <th style="max-width: 10%">Ubicacion</th>
                        <th style="max-width: 10%">Copia</th>
                        <th style="max-width: 10%">F. Registro</th>
                        <th style="max-width: 15%"></th>
                    </tr>
                @endslot

                @slot('tbody')
                    @foreach ($books as $key => $book)
                        <tr>
                            <td>{{ (($books->currentPage()-1)*10)+($key+1) }}</td>
                            <td>{{ $book->author->nombre.' '.$book->author->apellido }}</td>
                            <td>{{ $book->titulo }}</td>
                            <td>{{ $book->annoPublicacion }}</td>
                            <td>{{ $book->ubicacionLibrero }}</td>
                            <td>{{ $book->numeroCopia }}</td>
                            <td>{{ $book->created_at->format('d-m-Y') }}</td>
                            <th class="text-nowrap">
                                
                                    <a href="{{ route('book.edit', $book)}}" class="btn bg-lightblue btn-md" title="Editar">
                                        <i class="fas fa-edit"></i>
                                        
                                    </a>
            
                                    <a href="#" class="btn btn-danger btn-md delete" book="{{ $book->id }}" title="Eliminar">
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
