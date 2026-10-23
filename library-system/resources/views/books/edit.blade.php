<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book) }}" method="POST" novalidate>
        @csrf
        @method('PUT')
        <div>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ $book->title }}" required>
        </div>
        <div>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ $book->author }}" required>
        </div>
        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ $book->year }}" required>
        </div>
        <div>
            <label>Stok:</label><br>
            <input type="number" name="stock" value="{{ $book->stock }}" required>
        </div>
        <div>
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id">
            <option value="">Pilih kategori</option>
            @foreach ($categories as $category)
        <option
            value="{{ $category->id }}"
            @selected(old('category_id', $book->category_id) == $category->id)
            >
            {{ $category->name }}
        </option>
            @endforeach
        </select>
        
            @error('category_id')
        <p>{{ $message }}</p>
            @enderror
        </div>
        <br>
        <button type="submit">Update</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
</body>
</html>