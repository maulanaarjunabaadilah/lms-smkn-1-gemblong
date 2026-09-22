<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'instructor',
        'video_url',
        'file_path',
    ];

    // Relasi ke tabel quizzes (Satu kursus bisa memiliki banyak soal kuis)
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    // Relasi ke tabel comments (Satu kursus bisa memiliki banyak komentar/diskusi)
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
}