<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <p class="text-uppercase text-muted-custom fw-bold small mb-1">Kursus Baru</p>
                <h1 class="fw-bold fs-2 mb-0">Buat materi pembelajaran</h1>
            </div>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-bold">
                <i class="bi bi-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </x-slot>

    <div class="row g-4 justify-content-center">
        <div class="col-lg-8">
            <div class="glass-panel rounded-4 p-4 p-lg-5">
                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label fw-bold">Judul Kursus</label>
                            <input type="text" name="title" class="form-control form-control-lg rounded-4" required placeholder="Contoh: Konfigurasi Jaringan Mikrotik">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold">Nama Pengajar / Guru</label>
                            <input type="text" name="instructor" class="form-control rounded-4" required placeholder="Contoh: Pak Maulana">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold">Link Video YouTube</label>
                            <input type="url" name="video_url" class="form-control rounded-4" placeholder="https://www.youtube.com/watch?v=xxxx">
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold">Upload Modul / Materi</label>
                            <input type="file" name="file_path" class="form-control rounded-4">
                            <div class="form-text">Gunakan PDF dengan ukuran ringan agar mudah dibuka siswa.</div>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold">Deskripsi Lengkap Materi</label>
                            <textarea name="description" rows="6" class="form-control rounded-4" required placeholder="Tuliskan tujuan belajar, ringkasan materi, dan instruksi praktik."></textarea>
                        </div>

                        <div class="col-12 d-flex flex-column flex-sm-row justify-content-end gap-2 pt-2">
                            <a href="{{ route('courses.index') }}" class="btn btn-light rounded-pill px-4 fw-bold">Batal</a>
                            <button type="submit" class="btn btn-brand px-4 py-2">
                                <i class="bi bi-save me-2"></i>Simpan Kursus
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="course-card bg-white p-4">
                <span class="icon-pill bg-warning-subtle text-warning mb-3"><i class="bi bi-magic"></i></span>
                <h2 class="h5 fw-bold">Tips materi bagus</h2>
                <p class="text-muted-custom mb-0">Buat judul singkat, tulis deskripsi yang jelas, sertakan video, dan tambahkan modul praktik agar siswa bisa langsung mencoba.</p>
            </div>
        </div>
    </div>
</x-app-layout>
