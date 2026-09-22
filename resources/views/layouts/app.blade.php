<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS SMKN 1 Gemlong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #102033;
            --muted: #64748b;
            --brand: #0f766e;
            --brand-dark: #134e4a;
            --accent: #f59e0b;
            --surface: #ffffff;
            --soft: #eef7f6;
        }

        body {
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at top left, rgba(20, 184, 166, .18), transparent 32rem),
                linear-gradient(180deg, #f8fbff 0%, #eef7f6 100%);
        }

        .navbar-custom {
            background: rgba(15, 23, 42, .94);
            backdrop-filter: blur(14px);
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--brand), var(--accent));
            color: #fff;
            font-weight: 800;
            box-shadow: 0 14px 30px rgba(15, 118, 110, .28);
        }

        .page-shell {
            padding-bottom: 4rem;
        }

        .page-header {
            border-bottom: 1px solid rgba(15, 23, 42, .08);
            background: rgba(255, 255, 255, .8);
            backdrop-filter: blur(12px);
        }

        .glass-panel {
            border: 1px solid rgba(255, 255, 255, .52);
            background: rgba(255, 255, 255, .82);
            box-shadow: 0 24px 70px rgba(15, 23, 42, .10);
        }

        .hero-panel {
            border-radius: 28px;
            color: #fff;
            background:
                linear-gradient(135deg, rgba(19, 78, 74, .96), rgba(15, 118, 110, .94) 54%, rgba(245, 158, 11, .92)),
                url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            box-shadow: 0 28px 70px rgba(19, 78, 74, .26);
        }

        .metric-card,
        .action-card,
        .course-card {
            border: 0;
            border-radius: 20px;
            box-shadow: 0 16px 45px rgba(15, 23, 42, .08);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .metric-card:hover,
        .action-card:hover,
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 22px 60px rgba(15, 23, 42, .13);
        }

        .icon-pill {
            width: 48px;
            height: 48px;
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
        }

        .btn-brand {
            --bs-btn-color: #fff;
            --bs-btn-bg: var(--brand);
            --bs-btn-border-color: var(--brand);
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: var(--brand-dark);
            --bs-btn-hover-border-color: var(--brand-dark);
            --bs-btn-border-radius: 999px;
            font-weight: 800;
        }

        .text-muted-custom {
            color: var(--muted);
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .section-title {
            font-weight: 800;
            letter-spacing: 0;
        }

        .mini-card {
            border: 1px solid rgba(15, 23, 42, .07);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 12px 32px rgba(15, 23, 42, .06);
        }

        .feature-list {
            display: grid;
            gap: .9rem;
        }

        .feature-row {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
            padding: 1rem;
            border-radius: 18px;
            background: rgba(255, 255, 255, .72);
            border: 1px solid rgba(15, 23, 42, .06);
        }

        .timeline {
            position: relative;
            display: grid;
            gap: 1rem;
            padding-left: .25rem;
        }

        .timeline-item {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: .9rem;
            align-items: flex-start;
        }

        .timeline-dot {
            width: 34px;
            height: 34px;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: var(--brand);
            box-shadow: 0 10px 22px rgba(15, 118, 110, .24);
        }

        .soft-band {
            border-radius: 24px;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, .9), rgba(238, 247, 246, .8)),
                linear-gradient(135deg, rgba(15, 118, 110, .08), rgba(245, 158, 11, .08));
            border: 1px solid rgba(15, 23, 42, .06);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm sticky-top">
        <div class="container py-2">
            <a class="navbar-brand d-flex align-items-center gap-3 fw-bold" href="{{ route('dashboard') }}">
                <span class="brand-mark">L1</span>
                <span>
                    <span class="d-block lh-1">LMS SMKN 1 Gemlong</span>
                    <small class="text-white-50 fw-semibold">Learning Management System</small>
                </span>
            </a>

            <div class="ms-auto d-flex align-items-center gap-3">
                <span class="text-white-50 fw-semibold small d-none d-md-inline">
                    Halo, <span class="text-white">{{ Auth::user()->name }}</span>
                </span>
                <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-outline-light rounded-pill px-3 d-none d-sm-inline-flex align-items-center gap-2">
                    <i class="bi bi-person-circle"></i> Profil
                </a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-light rounded-pill px-3 fw-bold">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </nav>

    @isset($header)
        <header class="page-header py-4 mb-4">
            <div class="container">
                {{ $header }}
            </div>
        </header>
    @endisset

    <main class="container page-shell">
        {{ $slot }}
    </main>

    <footer class="bg-white border-top py-4 text-center text-muted-custom small">
        <div class="container">
            <strong class="text-dark">LMS SMKN 1 Gemlong</strong> - belajar lebih terarah, materi lebih mudah diakses.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
