<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <p class="text-uppercase text-muted-custom fw-bold small mb-1">Detail Kursus</p>
                <h1 class="fw-bold fs-2 mb-0">{{ $course->title }}</h1>
            </div>
            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-bold">
                <i class="bi bi-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </x-slot>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="course-card bg-white overflow-hidden mb-4">
                @if($course->video_url)
                    @php
                        $videoUrl = $course->video_url;
                        if (str_contains($videoUrl, 'watch?v=')) {
                            $videoUrl = str_replace('watch?v=', 'embed/', $videoUrl);
                        }
                    @endphp
                    <div class="ratio ratio-16x9 bg-dark">
                        <iframe src="{{ $videoUrl }}" title="Video pembelajaran {{ $course->title }}" allowfullscreen></iframe>
                    </div>
                @else
                    <div class="ratio ratio-16x9 bg-dark-subtle d-flex align-items-center justify-content-center">
                        <div class="text-center text-muted-custom">
                            <i class="bi bi-camera-video-off display-5 d-block mb-2"></i>
                            <strong>Belum ada video pembelajaran.</strong>
                        </div>
                    </div>
                @endif
            </div>

            <div class="glass-panel rounded-4 p-4 p-lg-5">
                <div class="d-flex align-items-start gap-3 mb-4">
                    <span class="icon-pill bg-primary-subtle text-primary"><i class="bi bi-journal-text"></i></span>
                    <div>
                        <h2 class="h4 fw-bold mb-1">Ringkasan Materi</h2>
                        <p class="text-muted-custom mb-0">Pengajar: <span class="fw-semibold text-dark">{{ $course->instructor ?? $course->user->name ?? 'Guru' }}</span></p>
                    </div>
                </div>
                <p class="text-muted-custom lh-lg mb-0" style="white-space: pre-line;">{{ $course->description }}</p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="glass-panel rounded-4 p-4 mb-4">
                <h3 class="h5 fw-bold mb-3">Progres Belajar</h3>
                <div class="progress mb-2" style="height: 10px;">
                    <div class="progress-bar bg-success" style="width: 45%"></div>
                </div>
                <p class="text-muted-custom small mb-0">45% selesai dipelajari</p>
            </div>

            <div class="glass-panel rounded-4 p-4 mb-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="icon-pill bg-success-subtle text-success"><i class="bi bi-file-earmark-pdf"></i></span>
                    <h3 class="h5 fw-bold mb-0">Modul & Lampiran</h3>
                </div>
                @if($course->file_path)
                    <p class="text-muted-custom">Unduh modul PDF untuk belajar ulang atau praktik mandiri.</p>
                    <a href="{{ asset('storage/' . $course->file_path) }}" target="_blank" class="btn btn-brand w-100 py-3">
                        <i class="bi bi-download me-2"></i>Download Modul PDF
                    </a>
                @else
                    <p class="text-muted-custom fst-italic mb-0">Belum ada file modul yang diunggah.</p>
                @endif
            </div>

            <div class="glass-panel rounded-4 p-4">
                <h3 class="h5 fw-bold mb-3">Langkah Berikutnya</h3>
                <div class="d-grid gap-2">
                    @if(Route::has('quiz.show'))
                        <a href="{{ route('quiz.show', $course->id) }}" class="btn btn-outline-success rounded-pill fw-bold">
                            <i class="bi bi-ui-checks me-2"></i>Buka Kuis
                        </a>
                    @endif
                    <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary rounded-pill fw-bold">
                        Lihat Materi Lain
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
