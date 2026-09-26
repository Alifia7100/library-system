@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>Daftar Buku</h1>
    <p>{{ $description}}</p>

    {{ route('buku') }}

    <ul>
        <!-- @foreach ($books as $book)
             <li>{{ $book }}</li>
             @endforeach -->
        @foreach($books as $book)
            <h3>{{ $book->title }}</h3>
            <p>ID: {{ $book->id }}</p>
            <p>Penulis: {{ $book->author }}</p>
            <p>Tahun: {{ $book->year }}</p>
            <p>Stok: {{ $book->stock }}</p>
        @endforeach
    </ul>

    @if ($stock > 0)
        <p>Stok tersedia</p>
    @else
        <p>Stok habis</p>
    @endif
@endsection