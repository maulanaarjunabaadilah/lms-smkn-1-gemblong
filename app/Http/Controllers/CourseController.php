<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'instructor' => 'required|string|max:255',
            'video_url' => 'nullable|url',
            'file_path' => 'nullable|mimes:pdf|max:2048', // Maksimal file PDF 2MB
        ]);

        $filePath = null;
        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('modules', 'public');
        }

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'instructor' => $request->instructor,
            'video_url' => $request->video_url,
            'file_path' => $filePath,
        ]);

        return redirect()->route('courses.index')->with('success', 'Kursus menarik berhasil ditambahkan!');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
}