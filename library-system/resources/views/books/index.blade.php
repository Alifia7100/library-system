@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <p>{{ $description}}</p>
    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book['judul'] }}</strong> - {{ $book['penulis'] }} ({{ $book['tahun'] }})
                
                @if($book['stok'] > 0)
                    <span style="color: green;">(Tersedia)</span>
                @else
                    <span style="color: red;">(Stok Habis)</span>
                @endif
            </li>
        @endforeach
    </ul>
@endsection