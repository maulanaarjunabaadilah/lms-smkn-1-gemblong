<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <p class="text-uppercase text-muted-custom fw-bold small mb-1">Katalog Pembelajaran</p>
                <h1 class="fw-bold fs-2 mb-0">Daftar kursus & materi pelajaran</h1>
            </div>
            @if(auth()->user()->role === 'guru')
                <a href="{{ route('courses.create') }}" class="btn btn-brand px-4 py-2">
                    <i class="bi bi-plus-lg me-2"></i>Buat Kursus Baru
                </a>
            @endif
        </div>
    </x-slot>

    <section class="glass-panel rounded-4 p-4 p-lg-5 mb-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge rounded-pill text-bg-success px-3 py-2 mb-3">LMS SMKN 1 Gemlong</span>
                <h2 class="fw-bold mb-2">Pilih materi, lanjutkan belajar.</h2>
                <p class="text-muted-custom mb-0">Setiap kursus berisi ringkasan, video pembelajaran, modul, kuis, dan ruang diskusi jika sudah disiapkan oleh guru.</p>
            </div>
            <div class="col-lg-4">
                <div class="d-flex gap-3 justify-content-lg-end">
                    <div class="text-center bg-white rounded-4 px-4 py-3 shadow-sm">
                        <div class="h3 fw-bold mb-0">{{ $courses->count() }}</div>
                        <small class="text-muted-custom fw-semibold">Kursus tersedia</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row g-4">
        @forelse($courses as $course)
            <div class="col-md-6 col-xl-4">
                <div class="course-card bg-white h-100 overflow-hidden">
                    <div class="p-4 text-white" style="background: linear-gradient(135deg, #134e4a, #0f766e 62%, #f59e0b);">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <span class="badge rounded-pill bg-white text-success px-3 py-2">Materi Pembelajaran</span>
                            <span class="icon-pill bg-white bg-opacity-25 text-white"><i class="bi bi-mortarboard"></i></span>
                        </div>
                        <h3 class="h4 fw-bold text-white mb-2">{{ $course->title }}</h3>
                        <p class="text-white-50 mb-0 small">
                            Pengajar: <span class="text-white fw-semibold">{{ $course->user->name ?? $course->instructor ?? 'Guru' }}</span>
                        </p>
                    </div>

                    <div class="p-4">
                        <p class="text-muted-custom line-clamp-2 mb-4">{{ $course->description }}</p>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            @if($course->video_url)
                                <span class="badge rounded-pill bg-primary-subtle text-primary"><i class="bi bi-play-circle me-1"></i>Video</span>
                            @endif
                            @if($course->file_path)
                                <span class="badge rounded-pill bg-success-subtle text-success"><i class="bi bi-file-earmark-pdf me-1"></i>Modul</span>
                            @endif
                            <span class="badge rounded-pill bg-warning-subtle text-warning"><i class="bi bi-chat-dots me-1"></i>Diskusi</span>
                        </div>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-brand w-100 py-3">
                            Mulai Belajar <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="glass-panel rounded-4 p-5 text-center">
                    <span class="icon-pill bg-warning-subtle text-warning mx-auto mb-3"><i class="bi bi-folder2-open"></i></span>
                    <h4 class="fw-bold">Belum ada kursus yang tersedia.</h4>
                    <p class="text-muted-custom mb-0">Silakan tunggu pengajar membuat materi baru.</p>
                </div>
            </div>
        @endforelse
    </div>
</x-app-layout>
