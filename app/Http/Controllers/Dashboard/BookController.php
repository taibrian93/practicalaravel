<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = Book::orderBy('id', 'desc')->paginate(10);
        if (!$request->has('search')) {
            $books = Book::orderBy('id', 'desc');
            
        } else {
            $books = Book::select('books.*')
                    ->leftJoin('authors', 'authors.id', '=', 'books.idAuthor')
                    ->whereRaw('CONCAT_WS(" ",nombre,apellido) LIKE ?', ['%'.$request->search.'%'])
                    ->orwhere('titulo', '%'.$request->search.'%')
                    ->orderBy('id', 'desc');
            
        }
        return view('dashboard.book.index')
                ->with([
                    'books' => $books->paginate(10),
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::select('id', DB::raw('CONCAT(nombre, " ", apellido) AS nombre'))->where('estado', '=', 1)->orderBy('id', 'desc')->pluck('nombre','id');
        return view('dashboard.book.create')
                    ->with([
                        'authors' => $authors,
                    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idAuthor' => 'required',
            'titulo' => 'required',
            'annoPublicacion' => 'required|regex:/^[0-9]{4}$/',
            'numeroCopia' => 'required|numeric|min:1|max:120|regex:/^[0-9]*$/',
            'ubicacionLibrero' => 'required',
            'descripcion' => 'required',
        ],[
            'annoPublicacion.required' => 'El campo año publicación es obligatorio.',
            'annoPublicacion.regex' => 'El formato del campo año publicación es inválido.',
        ]);
        
        Book::create($request->all());
        return redirect()
                ->route('book.index')
                ->with([
                    'message' => 'El registro se agrego satisfactoriamente!',
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::select('id', DB::raw('CONCAT(nombre, " ", apellido) AS nombre'))->orderBy('id', 'desc')->pluck('nombre','id');
        return view('dashboard.book.edit')
                ->with([
                    'authors' => $authors,
                    'book' => $book,
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

        $request->validate([
            'idAuthor' => 'required',
            'titulo' => 'required',
            'annoPublicacion' => 'required|regex:/^[0-9]{4}$/',
            'numeroCopia' => 'required|numeric|min:1|max:120|regex:/^[0-9]*$/',
            'ubicacionLibrero' => 'required',
            'descripcion' => 'required',
        ],[
            'annoPublicacion.required' => 'El campo año publicación es obligatorio.',
            'annoPublicacion.regex' => 'El formato del campo año publicación es inválido.',
        ]);
        
        $book->update($request->all());
        return redirect()
                ->route('book.index')
                ->with([
                    'message' => 'El registro se edito satisfactoriamente!',
                ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        Book::find($book)->delete();
    }


}
