<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Program Kerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        /* Kop Surat */
        .kop-surat {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px 0;
        }

        .kop-surat h2 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .kop-surat p {
            margin: 5px 0;
            font-size: 14px;
        }

        .garis-pembatas {
            border-top: 2px solid black;
            margin: 20px 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* CSS for print */
        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            h1 {
                font-size: 24px;
            }

            table {
                border: 1px solid black;
            }

            .garis-pembatas {
                border-top: 2px solid black;
            }

            /* Hide elements not needed in print */
            @page {
                size: A4;
                margin: 20mm;
            }

            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="kop-surat">
        <h2>HIMPUNAN MAHASISWA PROGRAM STUDI</h2>
        <h2>SISTEM INFORMASI (HMPS-SI)</h2>
        <h2>FAKULTAS SAINS DAN TEKNOLOGI</h2>
        <h2>UIN IMAM BONJOL PADANG</h2>
        <p>Sekretarian: Gedung Akademik FST lt.1 Fakultas SAINTEK UIN Imam Bonjol Padang</p>
        <p>Email: kominfo.hmps.si@gmail.com | Instagram: @hmpsisi.uinib</p>
    </div>
    <div class="garis-pembatas"></div>
    <h1>Laporan Program Kerja</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tugas</th>
                <th>Penanggung Jawab</th>
                <th>Tenggat Waktu</th>
                <th>Status</th>
                <th>Evaluasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataTugas as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->namatugas }}</td>
                    <td>{{ $p->sie }}</td>
                    <td>{{ $p->tenggatwaktu }}</td>
                    <td>{{ $p->status }}</td>
                    <td>{{ $p->evaluasi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
