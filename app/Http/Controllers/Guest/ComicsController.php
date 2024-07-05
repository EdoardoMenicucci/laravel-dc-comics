<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\ComicBook;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = ComicBook::all();
        $data = ['comicslist' => $comicsList];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comicBook = new ComicBook();

        $comicBook->title = $data['title'];
        $comicBook->description = $data['description'];
        $comicBook->price = $data['price'];
        $comicBook->series = $data['series'];
        $comicBook->type = $data['type'];

        $comicBook->save();

        return redirect()->route('comics.show', $comicBook->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comicBook = ComicBook::find($id);
        $data = ['comic' => $comicBook];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comicBook = ComicBook::find($id);
        $comic = ['comic' => $comicBook];

        return view('comics.edit', $comic);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $comicBook = ComicBook::findOrFail($id);

        // if (isset($data['title'])) {
        $comicBook->title = $data['title'];
        // }
        // if ($data['description']) {
        $comicBook->description = $data['description'];
        //}
        //if ($data['price']) {
        $comicBook->price = $data['price'];
        //}
        // if ($data['series']) {
        $comicBook->series = $data['series'];
        //}
        //if ($data['type']) {
        $comicBook->type = $data['type'];
        //}

        $comicBook->save();

        return redirect()->route('comics.show', $comicBook->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
