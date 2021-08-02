<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::orderBy('id', 'desc')->paginate(10);
        return view('dashboard.author.index')
                ->with([
                    'authors' => $authors,
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.author.create');
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
            'nombre' => 'required|min:2',
            'apellido' => 'required|min:2',
            'dni' => 'required|regex:/^[0-9]{8}$/|unique:authors,dni',
            'edad' => 'required|numeric|min:1|max:120|regex:/^[0-9]*$/',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);
        
        Author::create($request->all());
        return redirect()
                ->route('author.index')
                ->with([
                    'message' => 'El registro se agrego satisfactoriamente!',
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('dashboard.author.edit')
                ->with([
                   'author' => $author,
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'nombre' => 'required|min:2',
            'apellido' => 'required|min:2',
            'dni' => 'required|regex:/^[0-9]{8}$/|unique:authors,dni,' . $author->id,
            'edad' => 'required|numeric|min:1|max:120|regex:/^[0-9]*$/',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);
        
        $author->update($request->all());
        return redirect()
                ->route('author.index')
                ->with([
                    'message' => 'El registro se edito satisfactoriamente!',
                ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($author)
    {
        Author::find($author)->delete();
    }
}
