<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_image',
        'ID_Formation',
        'nom_image'
    ];

    public function formations()
    {
        return $this->hasMany(Formations::class, 'ID_Formation');
    }
}
