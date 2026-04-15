<!DOCTYPE html>
<html>
<head>
    <title>Edit Parfum</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f9;
        }
        .container {
            width: 50%;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0 15px;
        }
        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .btn-update {
            background-color: #007bff;
        }
        .btn-kembali {
            background-color: #6c757d;
            text-decoration: none;
            padding: 8px 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data Parfum</h2>

    <form action="/parfum/{{ $parfum->id }}" method="POST">
        @csrf
        @method('PUT')

        Nama:
        <input type="text" name="nama" value="{{ $parfum->nama }}">

        Merk:
        <input type="text" name="merk" value="{{ $parfum->merk }}">

        Harga:
        <input type="number" name="harga" value="{{ $parfum->harga }}">

        Deskripsi:
        <textarea name="deskripsi">{{ $parfum->deskripsi }}</textarea>

        <button type="submit" class="btn btn-update">Update</button>
        <a href="/parfum" class="btn btn-kembali">Kembali</a>
    </form>
</div>

</body>
</html>