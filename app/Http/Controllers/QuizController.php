<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    // Menampilkan form tambah soal kuis (khusus guru)
    public function create(Course $course)
    {
        if (auth()->user()->role !== 'guru') {
            abort(403);
        }
        return view('quiz.create', compact('course'));
    }

    // Menyimpan soal kuis ke database
    public function store(Request $request, Course $course)
    {
        if (auth()->user()->role !== 'guru') {
            abort(403);
        }

        $request->validate([
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
        ]);

        Quiz::create([
            'course_id' => $course->id,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct_answer' => $request->correct_answer,
        ]);

        return redirect()->route('quiz.create', $course->id)->with('success', 'Soal kuis berhasil ditambahkan!');
    }

    // Menampilkan halaman kuis untuk dikerjakan siswa
    public function show(Course $course)
    {
        $quizzes = $course->quizzes;
        return view('quiz.show', compact('course', 'quizzes'));
    }

    // Memproses jawaban kuis siswa dan menghitung nilai secara otomatis
    public function submit(Request $request, Course $course)
    {
        $quizzes = $course->quizzes;
        $answers = $request->input('answers', []);
        
        $totalQuestions = count($quizzes);
        if ($totalQuestions === 0) {
            return redirect()->route('courses.show', $course->id)->with('success', 'Belum ada soal kuis pada kursus ini.');
        }

        $correctCount = 0;

        foreach ($quizzes as $quiz) {
            // Cek apakah jawaban siswa sesuai dengan kunci jawaban
            if (isset($answers[$quiz->id]) && $answers[$quiz->id] === $quiz->correct_answer) {
                $correctCount++;
            }
        }

        // Hitung nilai akhir skala 0 - 100
        $score = ($correctCount / $totalQuestions) * 100;

        // Simpan atau update hasil kuis siswa ke database
        QuizResult::updateOrCreate(
            [
                'user_id' => Auth::id(),
                // Asumsi relasi quiz mengambil course_id melalui quiz pertama atau menggunakan tabel quiz_results
            ],
            [
                'quiz_id' => $quizzes->first()->id ?? null,
                'score' => round($score, 2),
            ]
        );

        return redirect()->route('courses.show', $course->id)->with('success', "Kuis selesai! Nilai Anda: " . round($score, 2));
    }

    // Menampilkan rekap nilai kuis seluruh siswa untuk guru
    public function rekapNilai(Course $course)
    {
        // Pastikan hanya guru yang bisa mengakses
        if (auth()->user()->role !== 'guru') {
            abort(403, 'Unauthorized action.');
        }

        // Ambil data nilai siswa yang berelasi dengan kuis di kursus ini
        $results = QuizResult::with('user')
            ->whereHas('quiz', function($query) use ($course) {
                $query->where('course_id', $course->id);
            })
            ->latest()
            ->get();

        return view('quiz.rekap', compact('course', 'results'));
    }
}