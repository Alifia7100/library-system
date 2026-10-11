<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $title = "Daftar Buku";
        $description = "Daftar Buku yang tersedia di Perpustakaan";

        // $books = [
        //     'Pemrograman PHP',
        //     'Laravel untuk Pemula',
        //     'Basis Data',
        //     'Algoritma dan Pemrograman',
        //     'Pemrograman Berbasis Web',
        // ];

        $books = Book::all();
        $stock = 5;

        return view('books.index', compact('title', 'description', 'books', 'stock'));
    }

    public function show($id) {
        return "ID Buku : " . $id;
    }

    // === METHOD CRUD ===

    public function create() 
    {
        return view('books.create');
    }

    public function store(Request $request) 
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);

        return redirect()->route('books.index');
    }

    public function edit(Book $book) 
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book) 
    {
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'stock' => $request->stock,
        ]);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book) 
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}