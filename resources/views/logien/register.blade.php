<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Sekolah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* ===== Reset ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        /* ===== Container ===== */
        .form-container {
            background: #ffffff;
            padding: 45px 40px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            font-weight: 600;
            color: #1e3a8a;
            margin-bottom: 30px;
            font-size: 24px;
        }

        /* ===== Form ===== */
        .form-group {
            text-align: left;
            margin-bottom: 18px;
        }

        label {
            display: block;
            color: #444;
            margin-bottom: 6px;
            font-weight: 500;
            font-size: 14px;
        }

        input,
        select {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.25s ease;
        }

        input:focus,
        select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 5px rgba(37, 99, 235, 0.4);
            outline: none;
        }

        /* ===== Button ===== */
        .btn {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(29, 78, 216, 0.3);
        }

        /* ===== Link Tambahan ===== */
        .extra {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #555;
        }

        .extra a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }

        .extra a:hover {
            text-decoration: underline;
        }

        .alert {
            background-color: #e0f2fe;
            color: #0369a1;
            border-left: 5px solid #0284c7;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            text-align: left;
            font-size: 14px;
        }

        /* ===== Footer ===== */
        footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: #f0f0f0;
            font-size: 0.9rem;
        }

        /* ===== Responsif ===== */
        @media (max-width: 480px) {
            .form-container {
                padding: 35px 25px;
            }

            h2 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Daftar Akun</h2>
        @if (session('info'))
            <div class="alert">
                {{ session('info') }}
            </div>
        @endif
        <form action="{{ route('daftar') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn">Daftar</button>

            <div class="extra">
                Sudah punya akun?
                <a href="{{ route('start') }}">Login di sini</a>
            </div>
        </form>
    </div>

</body>

</html>
