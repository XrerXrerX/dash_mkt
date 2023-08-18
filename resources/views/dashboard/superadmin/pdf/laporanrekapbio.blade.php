<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <style>
        /* CSS untuk judul h3 */
        h3 {
            text-align: center;
        }

        /* CSS untuk judul table (th) */
        table th {
            text-align: center;
            font-weight: bold;
            background-color: rgb(206, 134, 0);
            padding: 5px;
            border: 1px solid black;
            /* Penambahan border 1 */
            color: white;
            font-size: 13px;
        }

        /* CSS untuk setiap baris (tr) dalam body */
        table tbody tr:nth-child(even) {
            background-color: lightorange;
        }

        table tbody tr:nth-child(odd) {
            background-color: pink;
        }

        /* CSS untuk mengatur seluruh table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* CSS untuk setiap sel (td) dalam body */
        table td {
            padding: 5px;
            border: 1px solid black;
            font-size: 11px;

        }

        /* CSS untuk baris total */
        .total-row {
            font-weight: bold;
            background-color: red;
            font-size: 13px;
            color: white;
        }

        /* CSS untuk mengatur align ke kanan pada kolom Gaji, Potongan, dan Casbon */
        .align-right {
            text-align: right;
        }

        /* CSS untuk mengatur rata tengah pada kolom DOWNLINE, TOTAL DOWNLINE, NEW DEPO, dan NEW MEMBER */
        .align-center {
            text-align: center;
        }

        /* CSS untuk mengatur lebar kolom Gaji, Potongan, dan Casbon */
        .col-gaji,
        .col-potongan,
        .col-casbon,
        .col-total {
            width: 100px;
        }

        /* CSS untuk mengurangi tinggi (height) dari elemen <tr> di dalam <tbody> */
        tbody tr {
            height: 10px;
            /* Anda dapat mengubah angka ini sesuai kebutuhan */
        }

        .red-text {
            color: red;
        }

        .col-casbon .align-center {
            color: black;
        }

        .black-text {
            color: black;
        }
    </style>
</head>

<body>
    <h3>{{ $title }}</h3>
    <h3>{{ $title2 }}</h3>
    <h3>{{ ucwords($title3) }}</h3>
    <p>{{ $content }}</p>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA TEAM</th>
                <th class="align-center">BIOTRACK</th>
                <th class="align-center">LOGIN</th>
                <th class="align-center">DAFTAR</th>
                <th class="align-center">WHTASAPP</th>
                <th class="align-center">FACEBOOK</th>
                <th class="align-center">INSTAGRAM</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalbiotrack = 0;
                $totallogin = 0;
                $totaldaftar = 0;
                $totalwhatsapp = 0;
                $totalfacebook = 0;
                $totalinstagram = 0;
            @endphp
            @foreach ($data as $index => $d)
                <tr>
                    <td class="align-center">{{ $index + 1 . '.' }}</td>
                    <td class="align-center">{{ $d->nama_team }}</td>
                    <td class="align-center">{{ $d->biotrack }}</td>
                    <td class="align-center">{{ $d->login }}</td>
                    <td class="align-center">{{ $d->daftar }}</td>
                    <td class="align-center">{{ $d->whatsapp }}</td>
                    <td class="align-center">{{ $d->facebook }}</td>
                    <td class="align-center">{{ $d->instagram }}</td>
                </tr>
                @php
                    $totalbiotrack += $d->biotrack; // Penambahan nilai gaji pada setiap iterasi
                    $totallogin += $d->loginp; // Penambahan nilai potongan pada
                    $totaldaftar += $d->daftar; // Penambahan nilai casbon pada setiap
                    $totalwhatsapp += $d->whatsapp;
                    $totalfacebook += $d->facebook;
                    $totalinstagram += $d->instagram;
                    
                @endphp
            @endforeach
            <!-- Baris total -->
            <tr class="total-row">
                <td colspan="2" align="right" style="color: black;">Total Keseluruhan</td>
                <td class="col-casbon align-center black-text">{{ number_format($totalbiotrack, 0, ',', '.') }}</td>
                <td class="col-casbon align-center black-text">{{ number_format($totallogin, 0, ',', '.') }}</td>
                <td class="col-casbon align-center black-text">{{ number_format($totaldaftar, 0, ',', '.') }}</td>
                <td class="col-casbon align-center black-text">{{ number_format($totalwhatsapp, 0, ',', '.') }}</td>
                <td class="col-casbon align-center black-text">{{ number_format($totalfacebook, 0, ',', '.') }}</td>
                <td class="col-casbon align-center black-text">{{ number_format($totalinstagram, 0, ',', '.') }}</td>

            </tr>
        </tbody>
    </table>
</body>

</html>
