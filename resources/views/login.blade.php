<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - Rumah Belajar Femi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-box {
            background-color: #ffffff;
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 550px;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #343a40;
            font-size: 28px;
            font-weight: bold;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border-color: #007bff;
            font-size: 18px;
            padding: 12px;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.process') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control form-control-lg" required
                    autofocus>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="{{ route('register') }}" class="btn" style="color: #007bff">Belum punya akun?. </a>
        </form><br>
        <a href="/" class="btn btn-outline-secondary btn-back w-100">← Kembali ke Beranda</a>

    </div>

</body>

</html>
