<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rumah Belajar Femi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

  <style>
    :root {
      --primary: #2c7be5;
      --accent: #edf6ff;
      --text: #333;
      --white: #fff;
      --dark: #222;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--white);
      color: var(--text);
      line-height: 1.7;
    }

    header {
      background: linear-gradient(to right, #2c7be5, #409eff);
      color: var(--white);
      padding: 60px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 2.8rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto;
    }

    .btn-main {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 30px;
      background-color: var(--white);
      color: var(--primary);
      border-radius: 50px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.2s ease;
    }

    .btn-main:hover {
      background-color: #dce9ff;
    }

    nav {
      background-color: var(--white);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      padding: 15px 20px;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    nav a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 500;
      padding: 8px 16px;
      border-radius: 5px;
      transition: 0.3s;
    }

    nav a:hover {
      background-color: var(--accent);
      color: var(--dark);
    }

    main {
      max-width: 960px;
      margin: 50px auto;
      padding: 0 20px;
    }

    h2 {
      font-size: 2rem;
      margin-top: 50px;
      margin-bottom: 20px;
      color: var(--primary);
      text-align: center;
    }

    h4 {
      font-size: 1.2rem;
      color: #444;
      margin-top: 30px;
    }

    p {
      margin-bottom: 15px;
      color: var(--text);
    }

    section {
      margin-bottom: 60px;
    }

    .program {
      background-color: #f9fbff;
      padding: 40px;
      border-radius: 10px;
    }

    .gallery-placeholder {
      background-color: #e8f0ff;
      color: #888;
      padding: 60px;
      text-align: center;
      border-radius: 8px;
      font-style: italic;
    }

    footer {
      background-color: var(--primary);
      color: var(--white);
      text-align: center;
      padding: 30px 20px;
      margin-top: 80px;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }

      nav {
        flex-direction: column;
        gap: 10px;
      }

      main {
        padding: 0 15px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Selamat Datang di Rumah Belajar Femi</h1>
    <p>Tempat belajar Calistung yang menyenangkan dan penuh kasih untuk anak-anak usia dini.</p>
    <a href="#" class="btn-main">Kenali Kami Lebih Jauh</a>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">Tentang</a>
    <a href="#">Testimoni</a>
    <a href="#">Kontak</a>
    <a href="/login">Login Daftar Sekarang</a>
  </nav>

  <main>
    <section>
      <h2>Tentang Kami</h2>
      <p>
        Rumah Belajar Femi adalah tempat bimbingan belajar khusus Calistung (Baca, Tulis, Hitung) yang didedikasikan untuk anak-anak usia dini.
        Kami percaya bahwa pendidikan awal yang menyenangkan dan penuh kasih adalah fondasi penting bagi tumbuh kembang anak.
        Dengan pendekatan pembelajaran yang menyenangkan, kreatif, dan ramah anak, kami menciptakan lingkungan belajar yang membuat anak merasa seperti di rumah sendiri.
      </p>
      <p>
        Tim pengajar kami terdiri dari tenaga profesional yang berpengalaman dalam dunia pendidikan anak.
        Kami tidak hanya fokus pada hasil akademik, tetapi juga mengembangkan karakter, percaya diri, serta kemampuan sosial anak melalui berbagai aktivitas interaktif.
        Orang tua juga dilibatkan secara aktif untuk memastikan perkembangan anak terpantau dengan baik.
      </p>
      <p>
        Dengan metode belajar yang terbukti efektif, fasilitas yang mendukung, dan pendekatan yang menyenangkan,
        Rumah Belajar Femi telah dipercaya sebagai tempat terbaik untuk mengenalkan dunia belajar pada anak.
      </p>
    </section>

    <section class="program">
      <h2>Program Kami</h2>

      <h4>Program Calistung</h4>
      <p>Belajar membaca, menulis, dan berhitung dengan pendekatan bermain dan praktik langsung.</p>

      <h4>Kelas Kreatif</h4>
      <p>Melatih kreativitas melalui menggambar, mewarnai, dan bermain peran.</p>

      <h4>Latihan Mandiri</h4>
      <p>Memberikan latihan rumah yang ringan dan menyenangkan agar anak terbiasa mandiri.</p>
    </section>

    <section>
      <h2>Galeri Kegiatan</h2>
      <div class="gallery-placeholder">[Tampilkan foto kegiatan anak di sini]</div>
    </section>
  </main>

  <footer>
    &copy; 2025 Rumah Belajar Femi. All rights reserved.
  </footer>

</body>
</html>
