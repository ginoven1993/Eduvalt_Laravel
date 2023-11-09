<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_Formateur',
        'ID_Categorie',
        'Titre',
        'chapitre',
        'Heure',
        'Descriptionp',
        'Descriptionc',
        'Descriptiond',
        'langue',
        'Prix',
        'chapterone',
        'chaptertwo',
        'chapterthree',
        'chapterfour',
        'chapterfive',
        'chaptersix',
        'chapterseven',
        'chaptereight',
        'chapternine',
        'chapterten',
        'timeone',
        'timetwo',
        'timethree',
        'timefour',
        'timefive',
        'timesix',
        'timeseven',
        'timeeight',
        'timenine',
        'timeten',
        'studentLesson',
        'studentTeacher',
        'ratenote',
        'authors',
        'images',
        'rates',
        'videos',
        'courses_video',
    ];

    public function formateurs()
    {
        return $this->belongsTo(Formateurs::class, 'ID_Formateur');
    }
    public function categories()
    {
        return $this->belongsTo(Categories::class, 'ID_Categorie');
    }
}
