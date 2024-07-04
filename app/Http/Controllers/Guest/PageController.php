<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\ComicBook;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $comicsList = ComicBook::all();
        $data = ['comicslist' => $comicsList];

        return view('comics.index', $data);
    }
}
