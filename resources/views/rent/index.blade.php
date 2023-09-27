<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>HTML Table</h2>

    <table>
        <tr>
            <th>No</th>
            <th>id_user</th>
            <th>id_buku</th>
            <th>title</th>
            <th>tanggal_pinjam</th>
            <th>tanggal_kembali</th>
            <th>Created At</th>
        </tr>
        @foreach($pinjam as $rent)
        <tr>
            <td> {{ $rent->id }} </td>
            <td> {{ $rent->id_user }} </td>
            <td> {{ $rent->id_buku }} </td>
            <td> {{ $rent->title }} </td>
            <td> {{ $rent->tanggal_pinjam }} </td>
            <td> {{ $rent->tanggal_kembali  }} </td>
            <td> {{ $rent->created_at }} </td>
        </tr>
        @endforeach
        <!-- <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr> -->
    </table>

</body>

</html>