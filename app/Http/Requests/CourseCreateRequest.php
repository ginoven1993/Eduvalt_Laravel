<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ID_Formateur' => 'required',
            'ID_Categorie' => 'required',
            'titre' => 'required',
            'chapitre' => 'required',
            'Heure' => 'required',
            'firstDescrip' ,
            'Descriptionp',
            'Descriptionc',
            'Descriptiond',
            'langue' => 'required',
            'Prix' => 'required',
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
            'ratenote' => 'required',
            'authors' => 'required|file|mimes:jpg,png,jpeg,gif|max:2048',
            'images' => 'required|file|mimes:jpg,png,jpeg,gif|max:2048',
            'rates' => 'required|file|mimes:jpg,png,jpeg,gif|max:2048',
            'videos' => 'required|file|mimes:mp4,avi,mov,wmv|max:50000',
            'files'
        ];
    }
}
