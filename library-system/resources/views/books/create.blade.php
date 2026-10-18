<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku Baru</h1>

    <form action="{{ route('books.store') }}" method="POST" novalidate>
        @csrf

        <div>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" required value="{{ old('title') }}">
            @error('title')
                <p style="color:red;">{{ $message}}</p>
            @enderror
        </div>
        <div>
            <label>Penulis:</label><br>
            <input type="text" name="author" required value="{{ old('author') }}">
            @error('author')
                <p style="color:red;">{{ $message}}</p>
            @enderror
        </div>
        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" required value="{{ old('year') }}">
            @error('year')
                <p style="color:red;">{{ $message}}</p>
            @enderror
        </div>
        <div>
            <label>Jumlah Stok Buku:</label><br>
            <input type="number" name="stock" required value="{{ old('stock') }}">
            @error('stock')
                <p style="color:red;">{{ $message}}</p>
            @enderror
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
</body>
</html>