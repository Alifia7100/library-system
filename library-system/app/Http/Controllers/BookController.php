<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

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

        $books = Book::with('category')->get();
        $stock = 5;

        return view('books.index', compact('title', 'description', 'books', 'stock'));
    }

    public function show($id) {
        return "ID Buku : " . $id;
    }

    // === METHOD CRUD ===

    public function create() 
    {
        $categories = Category::orderBy('name')->get();

        return view('books.create', compact('categories'));
    }

    public function store(Request $request) 
    {
       $validated = $request->validate([
        'title' => 'required|string|max:255|unique:books',
        'author' => 'required|string|max:255',
        'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
        'stock' => 'required|integer|min:0|max:1000',
        'category_id' => 'required|exists:categories,id',
 ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Data Buku Berhasil Ditambahkan')
;
    }

    public function edit(Book $book) 
    {
        $categories = Category::orderBy('name')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book) 
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:books,title,' . $book->id,
            'author' => 'required|string|max:255',
            'year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Data Buku Berhasil Diperbarui');
    }

    public function destroy(Book $book) 
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Data Buku Berhasil Dihapus');
    }
}