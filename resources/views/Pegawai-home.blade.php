<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 60%;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        ul {
            line-height: 1.8;
        }
        li strong {
            color: #444;
        }
    </style>
</head>
<body>
    <h1>Data Pegawai</h1>
    <div class="card">
        <ul>
            <li><strong>Nama:</strong> {{ $name }}</li>
            <li><strong>Umur:</strong> {{ $my_age }} tahun</li>
            <li><strong>Hobi:</strong>
                <ul>
                    @foreach ($hobbies as $hobi)
                        <li>{{ $hobi }}</li>
                    @endforeach
                </ul>
            </li>
            <li><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda->format('d-m-Y') }}</li>
            <li><strong>Sisa Hari Menuju Wisuda:</strong> {{ $time_to_study_left }} hari</li>
            <li><strong>Semester Saat Ini:</strong> {{ $current_semester }}</li>
            <li><strong>Motivasi:</strong> {{ $motivasi }}</li>
            <li><strong>Cita-cita:</strong> {{ $future_goal }}</li>
        </ul>
    </div>
</body>
</html>
