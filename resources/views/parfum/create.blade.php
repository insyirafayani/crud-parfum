<!DOCTYPE html>
<html>
<head>
    <title>Tambah Parfum</title>
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
        .btn-simpan {
            background-color: #28a745;
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
    <h2>Tambah Data Parfum</h2>

    <form action="/parfum" method="POST">
        @csrf

        Nama:
        <input type="text" name="nama">

        Merk:
        <input type="text" name="merk">

        Harga:
        <input type="number" name="harga">

        Deskripsi:
        <textarea name="deskripsi"></textarea>

        <button type="submit" class="btn btn-simpan">Simpan</button>
        <a href="/parfum" class="btn btn-kembali">Kembali</a>
    </form>
</div>

</body>
</html>