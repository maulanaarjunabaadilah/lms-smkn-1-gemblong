<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS SMKN 1 Gemlong - Platform Belajar Modern</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
        .hero-section {
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #1d4ed8 100%);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -0.025em;
        }
        .hero-subtitle {
            font-size: 1.25rem;
            color: #cbd5e1;
            line-height: 1.6;
        }
        .feature-card {
            border: none;
            border-radius: 16px;
            transition: all 0.3s ease;
            background: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .icon-box {
            width: 70px;
            height: 70px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        .navbar-brand {
            font-size: 1.5rem;
            letter-spacing: -0.01em;
        }
        .btn-custom-primary {
            background: #ffffff;
            color: #1e1b4b;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 12px;
            transition: all 0.2s;
        }
        .btn-custom-primary:hover {
            background: #f1f5f9;
            color: #0f172a;
            transform: scale(1.02);
        }
        .btn-custom-outline {
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 12px;
            transition: all 0.2s;
        }
        .btn-custom-outline:hover {
            border-color: #ffffff;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 sticky-top shadow-sm" style="background-color: #1e1b4b !important;">
        <div class="container">
            <a class="navbar-brand fw-extrabold d-flex align-items-center gap-2" href="#">
                <span class="fs-3">🎓</span> <span class="tracking-tight">LMS SMKN 1 Gemlong</span>
            </a>
            <div class="ms-auto d-flex align-items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-light px-3 py-2 rounded-pill fw-bold text-white">Dashboard</a>
                    @endauth
                    
                    <a href="{{ route('login') }}" class="text-white text-decoration-none fw-semibold px-2 py-2">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary px-4 py-2 rounded-pill fw-bold shadow-sm">Register</a>
                    @endif
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-white text-center">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <span class="badge bg-indigo-subtle text-indigo px-3 py-2 rounded-pill mb-4 fw-bold" style="background: rgba(99, 102, 241, 0.2); color: #818cf8; border: 1px solid rgba(129, 140, 248, 0.3);">
                        ✨ Platform E-Learning Terpadu Generasi Baru
                    </span>
                    <h1 class="hero-title mb-4">
                        Jelajahi Dunia Pengetahuan Tanpa Batas 🚀
                    </h1>
                    <p class="hero-subtitle mb-5 mx-auto" style="max-width: 750px;">
                        Tingkatkan prestasi dan keahlianmu bersama para pengajar hebat. Akses materi pembelajaran video interaktif, modul digital, dan evaluasi kuis secara real-time.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-custom-primary shadow-lg">Buka Dashboard Saya</a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-custom-primary shadow-lg">Mulai Belajar Gratis</a>
                            <a href="{{ route('login') }}" class="btn btn-custom-outline">Masuk ke Akun</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="container py-5 my-5">
        <div class="text-center mb-5">
            <h2 class="fw-extrabold display-5 mb-3" style="color: #0f172a; letter-spacing: -0.02em;">Fitur Unggulan LMS SMKN 1 Gemlong</h2>
            <p class="text-muted fs-5" style="max-width: 600px; margin: 0 auto;">Dirancang khusus untuk memberikan pengalaman belajar yang interaktif, menyenangkan, dan efektif.</p>
        </div>
        <div class="row g-4 pt-4">
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4">
                    <div class="card-body">
                        <div class="icon-box bg-primary-subtle text-primary" style="background: #eff6ff; color: #2563eb;">
                            📺
                        </div>
                        <h4 class="card-title fw-bold fs-3 mb-3" style="color: #1e293b;">Video Pembelajaran</h4>
                        <p class="card-text text-muted fs-6 leading-relaxed">Tonton pemaparan materi mendalam secara langsung melalui video interaktif berkualitas tinggi yang disiapkan khusus oleh pengajar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4">
                    <div class="card-body">
                        <div class="icon-box" style="background: #f0fdf4; color: #16a34a;">
                            📁
                        </div>
                        <h4 class="card-title fw-bold fs-3 mb-3" style="color: #1e293b;">Modul & Lampiran PDF</h4>
                        <p class="card-text text-muted fs-6 leading-relaxed">Unduh modul ringkasan materi, lembar kerja praktikum, serta panduan belajar lengkap langsung ke perangkat Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card h-100 p-4">
                    <div class="card-body">
                        <div class="icon-box" style="background: #faf5ff; color: #9333ea;">
                            🎯
                        </div>
                        <h4 class="card-title fw-bold fs-3 mb-3" style="color: #1e293b;">Kuis & Evaluasi</h4>
                        <p class="card-text text-muted fs-6 leading-relaxed">Uji pemahaman materi melalui latihan soal pilihan ganda interaktif lengkap dengan sistem penilaian otomatis yang transparan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-5 border-top text-muted">
        <div class="container">
            <p class="mb-1 fw-semibold text-dark fs-5">LMS SMKN 1 Gemlong</p>
            <p class="mb-0 small text-secondary">&copy; 2026 Hak Cipta Dilindungi. Dibuat dengan penuh dedikasi untuk kemajuan dunia pendidikan.</p>
        </div>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
