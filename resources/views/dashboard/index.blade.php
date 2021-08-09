@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Inicio</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> Inicio</li>
            </ol>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-maroon">
                <div class="inner">
                    <h3>{{ $countAuthors }}</h3>
                    <p>Autores</p>
                </div>
                <div class="icon">
                    <i class="fas fa-university"></i>
                </div>
                <a href="{{ route('author.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-olive">
                <div class="inner">
                    <h3>{{ $countBooks }}</h3>
                    <p>Libros</p>
                </div>
                <div class="icon">
                    <i class="fas fa-city"></i>
                </div>
                <a href="{{ route('book.index') }}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-lightblue">
                <div class="inner">
                    <h3>{{ $countUsers }}</h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="/dashboard" class="small-box-footer" style="pointer-events: none;"><i class="fas fa-smile-wink"></i></a>
            </div>
        </div>
    </div>

    <x-card>
        @slot('ctitle')
            Lista de Libros Disponibles
        @endslot

        @slot('tsearch')
            <x-card-tools-search />
        @endslot

        @slot('cbody')
            <x-table>
                @slot('thead')
                    <tr>
                        <th style="max-width: 5%">Nro.</th>
                        <th style="max-width: 10%">Autor</th>
                        <th style="max-width: 18%">Titulo</th>
                        <th style="max-width: 25%">Descripcion</th>
                        <th style="max-width: 10%">Año</th>
                        <th style="max-width: 8%">Ubicacion</th>
                        <th style="max-width: 10%">Copia</th>
                        <th style="max-width: 14%">Fecha R.</th>
                    </tr>
                @endslot

                @slot('tbody')
                    @foreach ($books as $key => $book)
                        <tr>
                            <td>{{ (($books->currentPage()-1)*10)+($key+1) }}</td>
                            <td>{{ $book->author->nombre.' '.$book->author->apellido }}</td>
                            <td>{{ $book->titulo }}</td>
                            <td>{{ $book->descripcion }}</td>
                            <td>{{ $book->annoPublicacion }}</td>
                            <td>{{ $book->ubicacionLibrero }}</td>
                            <td>{{ $book->numeroCopia }}</td>
                            <td>{{ $book->created_at->format('d-m-Y') }}</td>
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

@stop
