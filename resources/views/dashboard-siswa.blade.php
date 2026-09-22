<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <p class="text-uppercase text-muted-custom fw-bold small mb-1">Dashboard Siswa</p>
                <h1 class="fw-bold fs-2 mb-0">Ruang belajar {{ Auth::user()->name }}</h1>
            </div>
            <span class="badge rounded-pill px-3 py-2 text-bg-success">Siswa Aktif</span>
        </div>
    </x-slot>

    <section class="hero-panel p-4 p-lg-5 mb-4 overflow-hidden">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge rounded-pill text-bg-light text-success fw-bold px-3 py-2 mb-3">LMS SMKN 1 Gemlong</span>
                <h2 class="display-6 fw-bold mb-3">Belajar produktif, rapi, dan siap praktik.</h2>
                <p class="fs-5 text-white-50 mb-4">
                    Akses materi, video, modul PDF, kuis, dan diskusi kelas dari satu tempat yang nyaman.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('courses.index') }}" class="btn btn-light btn-lg rounded-pill fw-bold px-4">
                        <i class="bi bi-journal-bookmark me-2"></i>Buka Katalog Kursus
                    </a>
                    <a href="{{ route('student.tips') }}" class="btn btn-outline-light btn-lg rounded-pill fw-bold px-4">
                        <i class="bi bi-lightbulb me-2"></i>Tips Belajar
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="glass-panel rounded-4 p-4 text-dark">
                    <p class="fw-bold mb-3">Target Hari Ini</p>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-play-btn"></i></span>
                        <div>
                            <h6 class="fw-bold mb-0">Tonton materi</h6>
                            <small class="text-muted-custom">Pahami video dari guru.</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <span class="icon-pill bg-warning-subtle text-warning"><i class="bi bi-check2-square"></i></span>
                        <div>
                            <h6 class="fw-bold mb-0">Kerjakan kuis</h6>
                            <small class="text-muted-custom">Ukur pemahamanmu.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <a href="{{ route('courses.index') }}" class="text-decoration-none">
                <div class="metric-card bg-white p-4 h-100">
                    <span class="icon-pill bg-primary-subtle text-primary mb-3"><i class="bi bi-collection-play"></i></span>
                    <h3 class="h5 fw-bold text-dark">Materi & Video</h3>
                    <p class="text-muted-custom mb-0">Pelajari modul dari guru dengan tampilan yang mudah dipindai.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('courses.index') }}" class="text-decoration-none">
                <div class="metric-card bg-white p-4 h-100">
                    <span class="icon-pill bg-success-subtle text-success mb-3"><i class="bi bi-ui-checks-grid"></i></span>
                    <h3 class="h5 fw-bold text-dark">Kuis Evaluasi</h3>
                    <p class="text-muted-custom mb-0">Latihan soal untuk mengecek kemampuan sebelum praktik atau ujian.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('courses.index') }}" class="text-decoration-none">
                <div class="metric-card bg-white p-4 h-100">
                    <span class="icon-pill bg-warning-subtle text-warning mb-3"><i class="bi bi-chat-dots"></i></span>
                    <h3 class="h5 fw-bold text-dark">Diskusi Kelas</h3>
                    <p class="text-muted-custom mb-0">Tanya jawab langsung di halaman materi bersama guru dan teman kelas.</p>
                </div>
            </a>
        </div>
    </div>

    <section class="glass-panel rounded-4 p-4 p-lg-5 mb-4">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3 mb-4">
            <div>
                <h3 class="fw-bold mb-1">Menu Pintas Pembelajaran</h3>
                <p class="text-muted-custom mb-0">Langsung masuk ke aktivitas yang paling sering dipakai.</p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <a href="{{ route('courses.index') }}" class="action-card d-flex align-items-center gap-3 bg-white p-4 text-decoration-none h-100">
                    <span class="icon-pill bg-primary-subtle text-primary"><i class="bi bi-book"></i></span>
                    <div>
                        <h4 class="h6 fw-bold text-dark mb-1">Katalog & Daftar Kursus</h4>
                        <p class="text-muted-custom mb-0 small">Masuk ke materi, video, modul, dan kuis.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('student.tips') }}" class="action-card d-flex align-items-center gap-3 bg-white p-4 text-decoration-none h-100">
                    <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-stars"></i></span>
                    <div>
                        <h4 class="h6 fw-bold text-dark mb-1">Tips & Motivasi Belajar</h4>
                        <p class="text-muted-custom mb-0 small">Bangun ritme belajar yang lebih konsisten.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="mini-card p-4 h-100">
                <span class="icon-pill bg-success-subtle text-success mb-3"><i class="bi bi-graph-up-arrow"></i></span>
                <p class="text-muted-custom fw-semibold mb-1">Progres Minggu Ini</p>
                <h3 class="fw-bold mb-0">68%</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="mini-card p-4 h-100">
                <span class="icon-pill bg-primary-subtle text-primary mb-3"><i class="bi bi-play-circle"></i></span>
                <p class="text-muted-custom fw-semibold mb-1">Video Ditonton</p>
                <h3 class="fw-bold mb-0">12 Materi</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="mini-card p-4 h-100">
                <span class="icon-pill bg-warning-subtle text-warning mb-3"><i class="bi bi-award"></i></span>
                <p class="text-muted-custom fw-semibold mb-1">Nilai Terbaik</p>
                <h3 class="fw-bold mb-0">92</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="mini-card p-4 h-100">
                <span class="icon-pill bg-danger-subtle text-danger mb-3"><i class="bi bi-clock-history"></i></span>
                <p class="text-muted-custom fw-semibold mb-1">Deadline Dekat</p>
                <h3 class="fw-bold mb-0">3 Tugas</h3>
            </div>
        </div>
    </section>

    <section class="row g-4 mb-4">
        <div class="col-lg-7">
            <div class="glass-panel rounded-4 p-4 p-lg-5 h-100">
                <div class="d-flex align-items-center justify-content-between gap-3 mb-4">
                    <div>
                        <h3 class="section-title h4 mb-1">Jadwal Belajar Hari Ini</h3>
                        <p class="text-muted-custom mb-0">Susun fokus belajarmu dari pagi sampai sore.</p>
                    </div>
                    <span class="badge rounded-pill text-bg-success px-3 py-2">Terencana</span>
                </div>
                <div class="timeline">
                    <div class="timeline-item">
                        <span class="timeline-dot"><i class="bi bi-play-fill"></i></span>
                        <div class="mini-card p-3">
                            <p class="fw-bold mb-1">07.30 - Video materi jaringan dasar</p>
                            <small class="text-muted-custom">Tonton penjelasan guru dan catat command penting.</small>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-dot"><i class="bi bi-tools"></i></span>
                        <div class="mini-card p-3">
                            <p class="fw-bold mb-1">10.00 - Praktik mandiri</p>
                            <small class="text-muted-custom">Coba konfigurasi ulang dari modul PDF.</small>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-dot"><i class="bi bi-ui-checks"></i></span>
                        <div class="mini-card p-3">
                            <p class="fw-bold mb-1">13.00 - Kuis evaluasi</p>
                            <small class="text-muted-custom">Kerjakan latihan untuk mengukur pemahaman.</small>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-dot"><i class="bi bi-chat"></i></span>
                        <div class="mini-card p-3">
                            <p class="fw-bold mb-1">15.00 - Diskusi kelas</p>
                            <small class="text-muted-custom">Tanyakan bagian yang belum jelas di halaman materi.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="glass-panel rounded-4 p-4 p-lg-5 h-100">
                <h3 class="section-title h4 mb-1">Rekomendasi Belajar</h3>
                <p class="text-muted-custom mb-4">Urutan ringan agar belajarmu tidak lompat-lompat.</p>
                <div class="feature-list">
                    <div class="feature-row">
                        <span class="icon-pill bg-primary-subtle text-primary"><i class="bi bi-router"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Jaringan Komputer</h4>
                            <p class="small text-muted-custom mb-0">Mulai dari IP address, subnetting, lalu praktik konfigurasi.</p>
                        </div>
                    </div>
                    <div class="feature-row">
                        <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-code-slash"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Pemrograman Web</h4>
                            <p class="small text-muted-custom mb-0">Pahami HTML, CSS, PHP, lalu baca struktur project Laravel.</p>
                        </div>
                    </div>
                    <div class="feature-row">
                        <span class="icon-pill bg-warning-subtle text-warning"><i class="bi bi-shield-check"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Keamanan Dasar</h4>
                            <p class="small text-muted-custom mb-0">Biasakan password kuat dan pahami validasi input.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="soft-band p-4 p-lg-5 mb-4">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <h3 class="section-title h4 mb-2">Peta Kompetensi Siswa</h3>
                <p class="text-muted-custom mb-0">Pantau area yang sudah kuat dan bagian yang perlu latihan lagi.</p>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="mini-card p-3 h-100">
                            <i class="bi bi-check-circle-fill text-success fs-4"></i>
                            <h4 class="h6 fw-bold mt-3">Paham Teori</h4>
                            <p class="small text-muted-custom mb-0">Baca modul dan rangkum inti materi.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-card p-3 h-100">
                            <i class="bi bi-cpu-fill text-primary fs-4"></i>
                            <h4 class="h6 fw-bold mt-3">Siap Praktik</h4>
                            <p class="small text-muted-custom mb-0">Coba lab dan screenshot hasil kerja.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-card p-3 h-100">
                            <i class="bi bi-trophy-fill text-warning fs-4"></i>
                            <h4 class="h6 fw-bold mt-3">Siap Ujian</h4>
                            <p class="small text-muted-custom mb-0">Latihan kuis sampai skor stabil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row g-4 mb-4">
        <div class="col-lg-6">
            <div class="glass-panel rounded-4 p-4 p-lg-5 h-100">
                <h3 class="section-title h4 mb-4">Aktivitas Terbaru</h3>
                <div class="feature-list">
                    <div class="feature-row">
                        <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-check2"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Kuis selesai dikumpulkan</h4>
                            <p class="small text-muted-custom mb-0">Nilai akan tampil setelah guru mengecek rekap.</p>
                        </div>
                    </div>
                    <div class="feature-row">
                        <span class="icon-pill bg-primary-subtle text-primary"><i class="bi bi-download"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Modul berhasil diunduh</h4>
                            <p class="small text-muted-custom mb-0">Gunakan modul untuk latihan offline.</p>
                        </div>
                    </div>
                    <div class="feature-row">
                        <span class="icon-pill bg-warning-subtle text-warning"><i class="bi bi-bell"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Pengingat diskusi</h4>
                            <p class="small text-muted-custom mb-0">Tulis pertanyaan sebelum jam pelajaran dimulai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="glass-panel rounded-4 p-4 p-lg-5 h-100">
                <h3 class="section-title h4 mb-4">Pengumuman Kelas</h3>
                <div class="alert alert-success border-0 rounded-4">
                    <strong>Praktik minggu ini:</strong> siapkan laptop dan koneksi internet untuk lab jaringan.
                </div>
                <div class="alert alert-warning border-0 rounded-4">
                    <strong>Deadline:</strong> kumpulkan catatan command sebelum pertemuan berikutnya.
                </div>
                <div class="alert alert-primary border-0 rounded-4 mb-0">
                    <strong>Tips:</strong> screenshot hasil praktik agar mudah didiskusikan dengan guru.
                </div>
            </div>
        </div>
    </section>

    <section class="hero-panel p-4 p-lg-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h3 class="fw-bold mb-2">Siap lanjut belajar?</h3>
                <p class="text-white-50 mb-lg-0">Buka katalog, pilih materi, lalu lanjutkan progresmu hari ini.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('courses.index') }}" class="btn btn-light rounded-pill fw-bold px-4 py-3">
                    Mulai Sekarang <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
