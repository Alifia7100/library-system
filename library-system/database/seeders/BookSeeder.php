<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'John Doe',
            'year' => 2024,
            'stock' => 5,
        ]);
        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Andi',
            'year' => 2023,
            'stock' => 10,
        ]);
        Book::create([
            'title' => 'Basis Data',
            'author' => 'Cici',
            'year' => 2025,
            'stock' => 8,
        ]);
        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Deni',
            'year' => 2021,
            'stock' => 4,
        ]);
        Book::create([
            'title' => 'Pemrograman Web Framework',
            'author' => 'Eka',
            'year' => 2024,
            'stock' => 12,
        ]);
    }
}
