@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>Daftar Buku</h1>
    <p>{{ $description }}</p>

    <!-- Tombol menuju Form Tambah Buku -->
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">+ Tambah Buku Baru</a>
    <br><br>

    <ul>
        @foreach($books as $book)
            <li>
                <h3>{{ $book->title }}</h3>
                <p>ID: {{ $book->id }}</p>
                <p>Penulis: {{ $book->author }}</p>
                <p>Tahun: {{ $book->year }}</p>
                <p>Stok: {{ $book->stock }}</p>

                <!-- Tombol Edit & Hapus -->
                <a href="{{ route('books.edit', $book) }}">Edit</a> | 

                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                </form>
            </li>
            <hr>
        @endforeach
    </ul>

    @if ($stock > 0)
        <p>Stok tersedia</p>
    @else
        <p>Stok habis</p>
    @endif
@endsection