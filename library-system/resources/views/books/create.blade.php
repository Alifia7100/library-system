<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku Baru</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Penulis:</label><br>
            <input type="text" name="author" required>
        </div>
        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" required>
        </div>
        <div>
            <label>Stok:</label><br>
            <input type="number" name="stock" required>
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
</body>
</html>