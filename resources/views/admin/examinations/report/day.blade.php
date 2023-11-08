<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemeriksaan</title>

    <style>
        h1 {
            font-size: 36px;
            font-weight: 700;
            text-align: center;
        }

        h2 {
            font-size: 14px;
            font-weight: 700;
            text-align: center;
        }

        h3 {
            font-size: 12px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        table>thead>tr>th {
            text-align: center;
            vertical-align: middle;
            background-color: #F2F2F2;
            font-weight: 600;
        }

        .line-title {
            border: 0;
            border-style: inset;
            border-top: 5px solid #000;
        }

        .table-border {
            border: 1px solid #000;
        }

        .table-border th,
        .table-border td {
            border: 1px solid #000;
        }

        .table-leader {
            width: auto;
            float: right;
            border-collapse: collapse;
        }

        .table-leader tr td {
            text-align: center !important;
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                <h1>PMP - CARE</h1>
                <h3>Alamat : Jl. Hulabulo, Desa Popodu, Kecamatan Bulango Timur</h3>
                <h3>Kabupaten Bone Bolango, Provinsi Gorontalo. Kode Pos 96125</h3>
                <h3>No Telpon : 0811-4316-901, 812-4409-2046</h3>
            </td>
        </tr>
    </table>
    <hr class="line-title">
    <br>

    <h2>Laporan Pemeriksaan Pasien</h2>

    <br>

    <table class="table-border" align="center">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal Pemeriksaan</th>
                <th>Nama Pasien</th>
                <th>Desa</th>
                <th>Kecamatan</th>
                <th>Kunjungan Ke</th>
                <th>No Antrian</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($examinations as $item)
                <tr>
                    <td style="text-align:center;vertical-align:middle; ">{{ $loop->iteration }}</td>
                    <td style="text-align:center;vertical-align:middle; ">{{ $item->examination_date }}</td>
                    <td>{{ $item->fullname }}</td>
                    <td>{{ $item->village }}</td>
                    <td>{{ $item->subdistrict }}</td>
                    <td style="text-align:center;vertical-align:middle; color: #0062D6; ">{{ $item->visit_to }}</td>
                    <td style="text-align:center;vertical-align:middle; ">{{ $item->queue_number }}</td>
                    <td style="text-align:center;vertical-align:middle; ">{{ $item->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
