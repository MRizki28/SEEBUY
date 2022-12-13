<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table .static {
            border: 1px solid black;
        }
        table .static th , td{
            padding: 8px 10px;
        }
        th{
            background-color: cornsilk
        }

    </style>
    <title>CETAK DATA PESANAN</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pesanan</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Nama Pemesan</th>
                <th>Jumlah</th>
                <th>No Hp</th>
                <th>Detail</th>
                <th>Kode</th>
                <th>Total Harga </th>
            </tr>
            @php
            $no = 1;
            
        @endphp
          @foreach ($dataCetak as $cetak)
            <tr>
              
                <td>{{ $no++ }}</td>
                <td>{{ $cetak->bazar->nama_menu }}</td>
                <td>{{ $cetak->nama_pemesan }}</td>
                <td>{{ $cetak->jumlah_pesanan }}</td>
                <td>{{ $cetak->nohp }}</td>
                <td>{{ $cetak->detail }}</td>
                <td>{{ $cetak->kode_pesanan }}</td>
                <td>Rp. {{ number_format($cetak->total_harga) }}</td>
                    
              
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
