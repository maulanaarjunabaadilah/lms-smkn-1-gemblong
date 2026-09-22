<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman Utama / Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Utama (Otomatis membedakan tampilan Siswa atau Guru berdasarkan Role)
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'guru') {
        return view('dashboard-guru');
    }
    return view('dashboard-siswa');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route yang membutuhkan autentikasi (Login)
Route::middleware('auth')->group(function () {
    // Profil Pengguna (Bawaan Laravel Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Manajemen Kursus & Materi (Lihat, Buat, Simpan, Hapus)
    Route::resource('courses', CourseController::class);

    // Fitur Keras & Ujian Kuis
    Route::get('/courses/{course}/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
    Route::post('/courses/{course}/quiz', [QuizController::class, 'store'])->name('quiz.store');
    Route::get('/courses/{course}/quiz', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/courses/{course}/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');

    // Fitur Rekap Nilai Kuis untuk Guru
    Route::get('/courses/{course}/quiz/rekap', [QuizController::class, 'rekapNilai'])->name('quiz.rekap');

    // Fitur Komentar / Diskusi Kelas di Detail Kursus
    Route::post('/courses/{course}/comments', [CommentController::class, 'store'])->name('comments.store');

    // Halaman Khusus Tips & Motivasi Belajar Siswa
    Route::get('/tips-motivasi', function () {
        return view('student.tips');
    })->name('student.tips');
});

// Memuat rute autentikasi bawaan (login, register, logout, dll)
require __DIR__.'/auth.php';