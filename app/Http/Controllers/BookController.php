<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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


// Admin

public function adminIndex()
{
    $books = Book::all();

    return view('admin.books.index', compact('books'));
}

public function store(Request $request)
{
    Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'price' => $request->price,
        'stock' => $request->stock,
        'description' => $request->description
    ]);

    return redirect('/admin/books');
}

public function create()
{
    return view('admin.books.create');
}

public function edit($id)
{
    $book = Book::findOrFail($id);

    return view('admin.books.edit', compact('book'));
}

public function update(Request $request, $id)
{
    $book = Book::findOrFail($id);

    $book->update([
        'title' => $request->title,
        'author' => $request->author,
        'price' => $request->price,
        'stock' => $request->stock,
        'description' => $request->description
    ]);

    return redirect('/admin/books');
}

public function delete($id)
{
    $book = Book::findOrFail($id);

    $book->delete();

    return redirect('/admin/books');
}

// API


public function apiBooks()
{
    $response = Http::get(
        'https://openlibrary.org/search.json?q=laravel'
    );

    $books = $response->json();

    return view('api-books', compact('books'));
}

}