<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_Categorie',
        'Description_Categorie',
        'Nom_Categorie'
    ];

   
}
