<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulir Pendaftaran Siswa</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f3f4f6;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background: #fff;
            padding: 30px;
            max-width: 500px;
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 5px;
            text-align: center;
            color: #1f2937;
        }

        .subtitle {
            text-align: center;
            font-size: 0.95rem;
            color: #6b7280;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            font-size: 0.95rem;
            margin-bottom: 6px;
            color: #374151;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        form input:focus,
        form textarea:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: #3b82f6;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            cursor: pointer;
            transition: background 0.2s;
            flex: 1;
            text-align: center;
        }

        .btn-primary:hover {
            background: #2563eb;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #d1d5db;
            color: #374151;
            padding: 10px 18px;
            border-radius: 8px;
            font-size: 0.95rem;
            text-decoration: none;
            text-align: center;
            transition: all 0.2s;
            flex: 1;
        }

        .btn-outline:hover {
            border-color: #3b82f6;
            color: #3b82f6;
        }

        .info-text {
            margin-top: 20px;
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Formulir Pendaftaran Siswa</h1>
        <p class="subtitle">Rumah Belajar Femi - Bimbel Calistung</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    <p>{{ $err }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('register.process') }}" method="post">
            @csrf
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="...." required />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="...." required />

            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control form-control-lg"
                placeholder="...." required>

            <div class="button-group">
                <button type="submit" class="btn-primary">Kirim Pendaftaran</button>
                <a href="/" class="btn-outline">← Kembali ke Beranda</a>
            </div>
        </form>

        <p class="info-text">Pastikan data yang Anda masukkan sudah benar. Admin akan memproses pendaftaran Anda dalam
            waktu 1x24 jam.</p>
    </div>

</body>

</html>
