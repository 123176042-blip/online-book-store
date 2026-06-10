<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   public function home ()
   {
    $books= Book::latest()->take(6)->get();
    return(view('home',compact('books')));
   } 

  public function index(Request $request)
{
    $search = $request->search;

    $books = Book::query()

        ->when($search, function ($query) use ($search) {

            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%");

        })

        ->latest()
        ->get();

    return view('books.index', compact('books', 'search'));
}

public function show($id)
{
    $book = Book::findOrFail($id);

    return view('books.show', compact('book'));
}

}
