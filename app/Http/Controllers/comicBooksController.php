<?php

namespace App\Http\Controllers;

use App\comicBook;
use ComicSeeder;
use Illuminate\Http\Request;

class comicBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = comicBook::all();
        return view('fumetti.index', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)                     // mi richiamo tutto il db li passo il request e alle variabili li do le informazioni create nelle migration
    {
        $data = $request->all();
        $comics = new comicBook();
        $comics->title = $data['title'];
        $comics->description = $data['description'];
        $comics->thumbs = $data['thumbs'];
        $comics->price = $data['price'];
        $comics->series = $data['series'];
        $comics->sale_date = $data['sale_date'];
        $comics->type = $data['type'];
        $comics->save();

        return redirect()->route('fumetti.show', $comics);              // ridirezionami alla creazione del fumetto nuovo e inseriscimelo  nella pagina show
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newComic = comicBook::findOrFail($id);
        return view('fumetti.show', ['comic' => $newComic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
