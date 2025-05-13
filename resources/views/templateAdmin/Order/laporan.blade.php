<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laporan Pesanan</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: auto;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px 8px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .text-danger {
            color: red;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Laporan Pesanan yang Belum Selesai</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Produk Pesanan</th>
                <th>Total Harga</th>
                <th>Tanggal Pesanan</th>
                <th>Tanggal Pengambilan</th>
                <th>Alamat</th>
                <th>Status Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesanan as $no => $p)
            <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $p->nama_pelanggan }}</td>
                <td>{{ $p->produk_pesanan }}</td>
                <td>Rp {{ number_format($p->total_harga, 0, ',', '.') }}</td>
                <td>{{ $p->tanggal_pesanan }}</td>
                <td>{{ $p->tanggal_pengambilan }}</td>
                <td>{{ $p->alamat }}</td>
                <td class="{{ $p->status == 'selesai' ? '' : 'text-danger' }}">
                    {{ $p->status }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>