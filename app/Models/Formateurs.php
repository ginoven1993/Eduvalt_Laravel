<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_Formateur',
        'Nom_formateur',
        'title',
        'short_bio',
        'long_bio'
    ];

   
}
