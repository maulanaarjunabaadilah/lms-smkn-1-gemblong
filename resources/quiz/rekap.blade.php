<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="fw-extrabold text-dark fs-2 mb-0">
                📊 Rekap Nilai Kuis: {{ $course->title }}
            </h1>
            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-secondary fw-bold px-4 py-2 rounded-pill">
                ← Kembali ke Materi
            </a>
        </div>
    </x-slot>

    <div class="py-5">
        <div class="row g-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                    <h3 class="fw-bold mb-4 text-dark">Daftar Nilai Siswa</h3>
                    
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Email</th>
                                    <th>Nilai Akhir</th>
                                    <th>Waktu Pengerjaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($results as $index => $result)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td class="fw-bold text-primary">{{ $result->user->name }}</td>
                                        <td>{{ $result->user->email }}</td>
                                        <td>
                                            <span class="badge bg-success fs-6 px-3 py-2">{{ $result->score }} / 100</span>
                                        </td>
                                        <td class="text-muted small">{{ $result->created_at->format('d M Y, H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5 text-muted fst-italic">
                                            Belum ada siswa yang mengerjakan kuis untuk kursus ini.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>