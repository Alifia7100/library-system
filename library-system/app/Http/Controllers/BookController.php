<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
    $title = "Daftar Buku";
    $description = "Daftar Buku yang tersedia di Perpustakaan";
    
    //$books = [
    //    'Pemrograman PHP',
    //    'Laravel untuk Pemula',
    //    'Basis Data',
    //    'Algoritma dan Pemrograman',
    //    'Pemrograman Berbasis Web',
    //];

    $books = Book::all();
    $stock = 5;

    return view('books.index', compact('title', 'description', 'books', 'stock'));
 }

 public function show($id) {
    return "ID Buku : " . $id;
    }
}