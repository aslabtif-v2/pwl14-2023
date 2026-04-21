<?php

namespace App\Http\Controllers;

use App\Models\Bookshelf;
use App\Models\Bookshelves;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $bookshelves = Bookshelves::get();
        return view('books.index', compact('bookshelves'));
    }

    public function show($id)
    {
        $bookshelves = Bookshelves::findOrFail($id);
        return view('books.show', compact('bookshelves'));
    }
}
