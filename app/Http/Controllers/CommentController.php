<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Menyimpan komentar / pertanyaan diskusi baru
    public function store(Request $request, Course $course)
    {
        $request->validate([
            'body' => 'required|string|max:1000',
        ]);

        Comment::create([
            'course_id' => $course->id,
            'user_id' => Auth::id(),
            'body' => $request->body,
        ]);

        return redirect()->route('courses.show', $course->id)->with('success', 'Komentar/Pertanyaan berhasil dikirim!');
    }
}