<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Sistem Sekolah</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
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

    .login-container {
      background: #ffffff;
      padding: 45px 40px;
      border-radius: 18px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 380px;
      text-align: center;
      animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-container h2 {
      font-weight: 600;
      color: #1e3a8a;
      margin-bottom: 30px;
      font-size: 24px;
    }

    .form-group {
      text-align: left;
      margin-bottom: 18px;
    }

    .form-group label {
      display: block;
      color: #444;
      margin-bottom: 6px;
      font-weight: 500;
      font-size: 14px;
    }

    .form-group input {
      width: 100%;
      padding: 11px 12px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 14px;
      transition: all 0.25s ease;
    }

    .form-group input:focus {
      border-color: #2563eb;
      box-shadow: 0 0 5px rgba(37, 99, 235, 0.4);
      outline: none;
    }

    .btn {
      background-color: #2563eb;
      color: #fff;
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

    .extra-links {
      margin-top: 20px;
      font-size: 0.9rem;
      color: #555;
    }

    .extra-links a {
      color: #2563eb;
      text-decoration: none;
      font-weight: 500;
      margin-left: 4px;
    }

    .extra-links a:hover {
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

    @media (max-width: 480px) {
      .login-container {
        padding: 35px 25px;
      }

      .login-container h2 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Sistem Sekolah</h2>

    @if (session('info'))
      <div class="alert">
        {{ session('info') }}
      </div>
    @endif

    <form action="{{ route('masuk') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autocomplete="off">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <button type="submit" class="btn">Masuk</button>

      <div class="extra-links">
        Belum punya akun?
        <a href="{{ route('reg') }}">Daftar di sini</a>
      </div>
    </form>
  </div>

</body>
</html>
