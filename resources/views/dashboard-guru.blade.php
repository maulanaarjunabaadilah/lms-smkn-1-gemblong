<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <p class="text-uppercase text-muted-custom fw-bold small mb-1">Dashboard Guru</p>
                <h1 class="fw-bold fs-2 mb-0">Panel pengajar LMS SMKN 1 Gemlong</h1>
            </div>
            <a href="{{ route('courses.create') }}" class="btn btn-brand px-4 py-2">
                <i class="bi bi-plus-lg me-2"></i>Buat Kursus
            </a>
        </div>
    </x-slot>

    <section class="hero-panel p-4 p-lg-5 mb-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge rounded-pill text-bg-light text-success fw-bold px-3 py-2 mb-3">Panel Kendali Pengajar</span>
                <h2 class="display-6 fw-bold mb-3">Selamat datang, {{ Auth::user()->name }}.</h2>
                <p class="fs-5 text-white-50 mb-4">
                    Kelola materi, video pembelajaran, modul PDF, kuis, dan diskusi kelas dengan alur yang lebih jelas.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('courses.create') }}" class="btn btn-light btn-lg rounded-pill fw-bold px-4">
                        <i class="bi bi-plus-circle me-2"></i>Buat Kursus Baru
                    </a>
                    <a href="{{ route('courses.index') }}" class="btn btn-outline-light btn-lg rounded-pill fw-bold px-4">
                        <i class="bi bi-grid me-2"></i>Kelola Kursus
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="glass-panel rounded-4 p-4 text-dark">
                    <p class="fw-bold mb-3">Checklist Publikasi</p>
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <span class="icon-pill bg-primary-subtle text-primary"><i class="bi bi-camera-video"></i></span>
                        <div>
                            <h6 class="fw-bold mb-0">Video siap ditonton</h6>
                            <small class="text-muted-custom">Pastikan link YouTube publik.</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <span class="icon-pill bg-warning-subtle text-warning"><i class="bi bi-file-earmark-pdf"></i></span>
                        <div>
                            <h6 class="fw-bold mb-0">Modul ringkas</h6>
                            <small class="text-muted-custom">File PDF sebaiknya ringan.</small>
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
                    <span class="icon-pill bg-primary-subtle text-primary mb-3"><i class="bi bi-kanban"></i></span>
                    <h3 class="h5 fw-bold text-dark">Manajemen Modul</h3>
                    <p class="text-muted-custom mb-0">Atur judul, deskripsi, video, dan lampiran materi.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('courses.index') }}" class="text-decoration-none">
                <div class="metric-card bg-white p-4 h-100">
                    <span class="icon-pill bg-success-subtle text-success mb-3"><i class="bi bi-clipboard-data"></i></span>
                    <h3 class="h5 fw-bold text-dark">Kuis & Rekap</h3>
                    <p class="text-muted-custom mb-0">Siapkan evaluasi dan pantau hasil belajar siswa.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('courses.index') }}" class="text-decoration-none">
                <div class="metric-card bg-white p-4 h-100">
                    <span class="icon-pill bg-warning-subtle text-warning mb-3"><i class="bi bi-people"></i></span>
                    <h3 class="h5 fw-bold text-dark">Diskusi Siswa</h3>
                    <p class="text-muted-custom mb-0">Bantu siswa lewat komentar pada detail materi.</p>
                </div>
            </a>
        </div>
    </div>

    <section class="glass-panel rounded-4 p-4 p-lg-5 mb-4">
        <h3 class="fw-bold mb-1">Menu Pintas Pengajar</h3>
        <p class="text-muted-custom mb-4">Aksi cepat untuk mengelola pembelajaran digital.</p>
        <div class="row g-3">
            <div class="col-md-6">
                <a href="{{ route('courses.index') }}" class="action-card d-flex align-items-center gap-3 bg-white p-4 text-decoration-none h-100">
                    <span class="icon-pill bg-primary-subtle text-primary"><i class="bi bi-folder2-open"></i></span>
                    <div>
                        <h4 class="h6 fw-bold text-dark mb-1">Kelola & Daftar Kursus</h4>
                        <p class="text-muted-custom mb-0 small">Lihat semua materi yang tersedia di LMS.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <div class="action-card d-flex align-items-center gap-3 bg-white p-4 h-100">
                    <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-lightning-charge"></i></span>
                    <div>
                        <h4 class="h6 fw-bold text-dark mb-1">Ritme Mengajar</h4>
                        <p class="text-muted-custom mb-0 small">Buat satu materi singkat, satu latihan, lalu buka diskusi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="mini-card p-4 h-100">
                <span class="icon-pill bg-primary-subtle text-primary mb-3"><i class="bi bi-book-half"></i></span>
                <p class="text-muted-custom fw-semibold mb-1">Materi Aktif</p>
                <h3 class="fw-bold mb-0">18 Modul</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="mini-card p-4 h-100">
                <span class="icon-pill bg-success-subtle text-success mb-3"><i class="bi bi-people-fill"></i></span>
                <p class="text-muted-custom fw-semibold mb-1">Siswa Terpantau</p>
                <h3 class="fw-bold mb-0">124</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="mini-card p-4 h-100">
                <span class="icon-pill bg-warning-subtle text-warning mb-3"><i class="bi bi-clipboard-check"></i></span>
                <p class="text-muted-custom fw-semibold mb-1">Kuis Aktif</p>
                <h3 class="fw-bold mb-0">7 Paket</h3>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="mini-card p-4 h-100">
                <span class="icon-pill bg-danger-subtle text-danger mb-3"><i class="bi bi-chat-square-text"></i></span>
                <p class="text-muted-custom fw-semibold mb-1">Diskusi Baru</p>
                <h3 class="fw-bold mb-0">16 Pesan</h3>
            </div>
        </div>
    </section>
    <section class="row g-4 mb-4">
        <div class="col-lg-7">
            <div class="glass-panel rounded-4 p-4 p-lg-5 h-100">
                <div class="d-flex align-items-center justify-content-between gap-3 mb-4">
                    <div>
                        <h3 class="section-title h4 mb-1">Rencana Mengajar Minggu Ini</h3>
                        <p class="text-muted-custom mb-0">Urutan kerja agar materi, kuis, dan diskusi tersiapkan.</p>
                    </div>
                    <span class="badge rounded-pill text-bg-success px-3 py-2">Produktif</span>
                </div>
                <div class="timeline">
                    <div class="timeline-item">
                        <span class="timeline-dot"><i class="bi bi-pencil"></i></span>
                        <div class="mini-card p-3">
                            <p class="fw-bold mb-1">Senin - Susun ringkasan materi</p>
                            <small class="text-muted-custom">Buat tujuan belajar dan langkah praktik yang jelas.</small>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-dot"><i class="bi bi-camera-video"></i></span>
                        <div class="mini-card p-3">
                            <p class="fw-bold mb-1">Selasa - Upload video pembelajaran</p>
                            <small class="text-muted-custom">Pastikan video publik dan mudah dipahami siswa.</small>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-dot"><i class="bi bi-ui-checks-grid"></i></span>
                        <div class="mini-card p-3">
                            <p class="fw-bold mb-1">Rabu - Buat kuis evaluasi</p>
                            <small class="text-muted-custom">Gunakan pertanyaan dari konsep dasar sampai praktik.</small>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-dot"><i class="bi bi-chat-dots"></i></span>
                        <div class="mini-card p-3">
                            <p class="fw-bold mb-1">Kamis - Pantau diskusi siswa</p>
                            <small class="text-muted-custom">Jawab pertanyaan yang paling sering muncul.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="glass-panel rounded-4 p-4 p-lg-5 h-100">
                <h3 class="section-title h4 mb-1">Antrian Pengajar</h3>
                <p class="text-muted-custom mb-4">Hal yang perlu dicek sebelum kelas berikutnya.</p>
                <div class="feature-list">
                    <div class="feature-row">
                        <span class="icon-pill bg-danger-subtle text-danger"><i class="bi bi-exclamation-circle"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">3 modul belum punya lampiran</h4>
                            <p class="small text-muted-custom mb-0">Tambahkan PDF agar siswa bisa belajar offline.</p>
                        </div>
                    </div>
                    <div class="feature-row">
                        <span class="icon-pill bg-warning-subtle text-warning"><i class="bi bi-hourglass-split"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">5 kuis perlu dicek ulang</h4>
                            <p class="small text-muted-custom mb-0">Pastikan opsi jawaban dan kunci sudah benar.</p>
                        </div>
                    </div>
                    <div class="feature-row">
                        <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-check-circle"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">12 siswa aktif diskusi</h4>
                            <p class="small text-muted-custom mb-0">Gunakan pertanyaan mereka untuk pembahasan kelas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="soft-band p-4 p-lg-5 mb-4">
        <div class="row g-4 align-items-center">
            <div class="col-lg-4">
                <h3 class="section-title h4 mb-2">Standar Materi Bagus</h3>
                <p class="text-muted-custom mb-0">Checklist singkat agar setiap kursus nyaman dipakai siswa.</p>
            </div>
            <div class="col-lg-8">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="mini-card p-3 h-100">
                            <i class="bi bi-bullseye text-success fs-4"></i>
                            <h4 class="h6 fw-bold mt-3">Tujuan jelas</h4>
                            <p class="small text-muted-custom mb-0">Siswa tahu hasil akhir yang harus dikuasai.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-card p-3 h-100">
                            <i class="bi bi-laptop text-primary fs-4"></i>
                            <h4 class="h6 fw-bold mt-3">Ada praktik</h4>
                            <p class="small text-muted-custom mb-0">Materi dilengkapi tugas atau lab kecil.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-card p-3 h-100">
                            <i class="bi bi-bar-chart-fill text-warning fs-4"></i>
                            <h4 class="h6 fw-bold mt-3">Ada evaluasi</h4>
                            <p class="small text-muted-custom mb-0">Kuis membantu melihat pemahaman siswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row g-4 mb-4">
        <div class="col-lg-6">
            <div class="glass-panel rounded-4 p-4 p-lg-5 h-100">
                <h3 class="section-title h4 mb-4">Rekap Kelas Cepat</h3>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-semibold">Kehadiran belajar</span>
                        <span class="text-success fw-bold">82%</span>
                    </div>
                    <div class="progress" style="height: 10px;"><div class="progress-bar bg-success" style="width: 82%"></div></div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-semibold">Kuis terkumpul</span>
                        <span class="text-primary fw-bold">74%</span>
                    </div>
                    <div class="progress" style="height: 10px;"><div class="progress-bar bg-primary" style="width: 74%"></div></div>
                </div>
                <div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-semibold">Diskusi aktif</span>
                        <span class="text-warning fw-bold">61%</span>
                    </div>
                    <div class="progress" style="height: 10px;"><div class="progress-bar bg-warning" style="width: 61%"></div></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="glass-panel rounded-4 p-4 p-lg-5 h-100">
                <h3 class="section-title h4 mb-4">Ide Fitur Pembelajaran</h3>
                <div class="feature-list">
                    <div class="feature-row">
                        <span class="icon-pill bg-primary-subtle text-primary"><i class="bi bi-file-earmark-richtext"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Jobsheet praktikum</h4>
                            <p class="small text-muted-custom mb-0">Lampirkan langkah kerja dan kolom hasil praktik.</p>
                        </div>
                    </div>
                    <div class="feature-row">
                        <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-patch-question"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Bank soal latihan</h4>
                            <p class="small text-muted-custom mb-0">Buat variasi soal untuk latihan mandiri siswa.</p>
                        </div>
                    </div>
                    <div class="feature-row">
                        <span class="icon-pill bg-warning-subtle text-warning"><i class="bi bi-megaphone"></i></span>
                        <div>
                            <h4 class="h6 fw-bold mb-1">Pengumuman kelas</h4>
                            <p class="small text-muted-custom mb-0">Tulis info tugas, jadwal lab, dan persiapan alat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-panel p-4 p-lg-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h3 class="fw-bold mb-2">Siap menambah materi baru?</h3>
                <p class="text-white-50 mb-lg-0">Buat kursus yang ringkas, mudah dipraktikkan, dan punya evaluasi.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('courses.create') }}" class="btn btn-light rounded-pill fw-bold px-4 py-3">
                    Buat Kursus <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
