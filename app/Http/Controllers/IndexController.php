<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\Categories;
use App\Models\Formateurs;
use App\Models\Formations;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $formations = Formations::orderBy('ID_Formation', 'DESC')
        ->limit(8)
        ->get();
        $id_formation = Formations::orderBy('ID_Formation', 'DESC')->pluck('ID_Formation');

        $id_categorie = Categories::orderBy('ID_Categorie', 'DESC')->pluck('ID_FORMATION');
        $id_formateur = Formateurs::orderBy('ID_Formateur', 'DESC')->pluck('ID_FORMATION');

        $images = Images::where('ID_Formation', $id_formation)->pluck('nom_image');
        $authors = Authors::where('ID_Formation', $id_formation)->pluck('nom_image');

        $categories = Categories::where('ID_Formation', $id_categorie)->pluck('Nom_Categorie');

        $images = DB::table('images')->join('formations', 'images.ID_Formation', '=', 'formations.ID_Formation')->select(
            'images.nom_image as image')->get(); 
        return view('index');
    }



}
