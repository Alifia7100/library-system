<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
    ['judul' => 'Pemrograman PHP', 'penulis' => 'Budi Santoso', 'tahun' => 2020, 'stok' => 5],
    ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Rian Hidayat', 'tahun' => 2021, 'stok' => 0],
    ['judul' => 'Basis Data', 'penulis' => 'Siti Aminah', 'tahun' => 2019, 'stok' => 3],
    ['judul' => 'Algoritma dan Pemrograman', 'penulis' => 'Eko Prasetyo', 'tahun' => 2018, 'stok' => 2],
    ['judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Dian Wijaya', 'tahun' => 2022, 'stok' => 0]
    ];
        $description = "Daftar Buku yang Tersedia di Perpustakaan";

        return view('books.index', compact('books', 'description'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}