<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <p class="text-uppercase text-muted-custom fw-bold small mb-1">Tips Belajar</p>
                <h1 class="fw-bold fs-2 mb-0">Ritme belajar yang lebih konsisten</h1>
            </div>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-bold">
                <i class="bi bi-arrow-left me-2"></i>Dashboard
            </a>
        </div>
    </x-slot>

    <div class="row g-4 justify-content-center">
        <div class="col-lg-8">
            <div class="hero-panel p-4 p-lg-5 mb-4">
                <span class="badge rounded-pill text-bg-light text-success fw-bold px-3 py-2 mb-3">LMS SMKN 1 Gemlong</span>
                <h2 class="display-6 fw-bold mb-3">Belajar IT paling cepat kalau sering praktik.</h2>
                <p class="fs-5 text-white-50 mb-0">Gunakan LMS sebagai tempat mulai: tonton, catat, coba, lalu tanyakan bagian yang belum jelas.</p>
            </div>

            <div class="glass-panel rounded-4 p-4 p-lg-5">
                <div class="d-flex gap-3 mb-4">
                    <span class="icon-pill bg-primary-subtle text-primary"><i class="bi bi-tools"></i></span>
                    <div>
                        <h3 class="h5 fw-bold">1. Praktik langsung</h3>
                        <p class="text-muted-custom mb-0">Jangan berhenti di video. Coba ulang langkah konfigurasi, kode, atau simulasi yang dijelaskan guru.</p>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-4">
                    <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-pencil-square"></i></span>
                    <div>
                        <h3 class="h5 fw-bold">2. Catat hal penting</h3>
                        <p class="text-muted-custom mb-0">Tulis command, error yang muncul, dan solusi yang berhasil supaya mudah diulang saat praktik berikutnya.</p>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-4">
                    <span class="icon-pill bg-warning-subtle text-warning"><i class="bi bi-chat-left-text"></i></span>
                    <div>
                        <h3 class="h5 fw-bold">3. Aktif berdiskusi</h3>
                        <p class="text-muted-custom mb-0">Kalau bingung, tanyakan di komentar materi. Pertanyaan yang jelas biasanya mempercepat paham.</p>
                    </div>
                </div>

                <div class="alert alert-success border-0 rounded-4 p-4 mb-0">
                    <h4 class="h6 fw-bold mb-1">Pesan hari ini</h4>
                    <p class="mb-0">Keahlian jaringan dan pemrograman tumbuh dari latihan kecil yang dilakukan terus-menerus.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
