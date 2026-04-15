<!DOCTYPE html>
<html>
<head>
    <title>Data Parfum</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f6f9;
        }
        .container {
            width: 90%;
            margin: 30px auto;
        }
        h1 {
            color: #333;
        }
        .btn {
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
        }
        .btn-tambah {
            background-color: #28a745;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-hapus {
            background-color: #dc3545;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background-color: white;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Data Parfum</h1>

    <a href="/parfum/create" class="btn btn-tambah">+ Tambah Data</a>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        @foreach($parfums as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->merk }}</td>
            <td>Rp {{ number_format($p->harga,0,',','.') }}</td>
            <td>
                <a href="/parfum/{{ $p->id }}/edit" class="btn btn-edit">Edit</a>

                <form action="/parfum/{{ $p->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-hapus">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</div>

</body>
</html>