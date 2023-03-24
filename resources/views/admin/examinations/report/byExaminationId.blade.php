<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemeriksaan</title>

    <style>
        * {
            margin-top: 0;
        }

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

        td {
            padding: 8px;
            text-align: left;
        }

        table>tbody>tr>td {
            text-align: center;
            vertical-align: middle;
        }

        .line-title {
            border: 0;
            border-style: inset;
            border-top: 5px solid #000;
        }

        .table-border {
            border: 1px solid #000;
            margin-right: auto;
            margin-left: 0;
            width: 50%;
        }

        .table-border th,
        .table-border td {
            border: 1px solid #000;
        }

        textarea {
            border: 1px solid black;
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

    <h2>Hasil Pemeriksaan Pasien</h2>
    <br>

    <h4 style="margin: 0; padding: 0;">Nomor Antrian : {{ $examination->queue_number }}</h4>
    <h4 style="margin: 0; padding: 0;">Kunjungan Ke : {{ $examination->visit_to }}</h4>
    <h4 style="margin: 0; padding: 0;">Tanggal Pemeriksaan : {{ $examination->examination_date }}</h4>
    <h4 style="margin: 0; padding: 0;">Pemeriksa : {{ $examination->examiner }}</h4>
    <h4 style="margin: 0; padding: 0;">Data Diri Pasien :</h4>
    <br>

    <table class="table-border" align="center">
        <tbody>
            <tr>
                <td>1</td>
                <td>Nama Lengkap</td>
                <td>{{ $examination->fullname }}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Umur</td>
                <td>{{ $examination->age }}</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jenis Kelamin</td>
                <td>{{ $examination->gender }}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Desa</td>
                <td>{{ $examination->village }}</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Kecamatan</td>
                <td>{{ $examination->subdistrict }}</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Kabupaten</td>
                <td>{{ $examination->regency }}</td>
            </tr>
        </tbody>
    </table>

    <br>

    <h4>Anamnese :</h4>
    <textarea>{{ $examination->anamnese }}</textarea>
    <h4>Hasil Pemeriksaan :</h4>
    <textarea>{{ $examination->checkup_result }}</textarea>
    <h4>Terapi :</h4>
    <textarea>{{ $examination->therapy }}</textarea>
    <h4>Tindakan :</h4>
    <textarea>{{ $examination->action }}</textarea>

</body>

</html>
