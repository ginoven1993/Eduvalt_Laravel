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
        // $formations = Formations::orderBy('ID_Formation', 'DESC')
        // ->limit(8)
        // ->get();

        // $id_formation = Formations::orderBy('ID_Formation', 'DESC')->pluck('ID_Formation');

        // $id_categorie = Categories::orderBy('ID_Categorie', 'DESC')->pluck('ID_FORMATION');
        // $id_formateur = Formateurs::orderBy('ID_Formateur', 'DESC')->pluck('ID_FORMATION');

        // $images = Images::where('ID_Formation', $id_formation)->pluck('nom_image');
        // $authors = Authors::where('ID_Formation', $id_formation)->pluck('nom_image');

        // $categories = Categories::where('ID_Formation', $id_categorie)->pluck('Nom_Categorie');

        $formations = DB::table('formations')
        ->join('formateurs', 'formations.ID_Formateur', '=', 'formateurs.ID_Formateur')
        ->join('categories', 'formations.ID_Categorie', '=', 'categories.ID_Categorie')
        ->select('formations.ID_Formation as ID_Formation',
        'formations.Prix as prix',
        'formations.titre as titre',
        'formations.chapitre as chapitre',
        'formations.Heure as heure',
        'formations.studentLesson as studentLesson',
        'formations.ratenote as ratenote',
        'formations.authors as author_image',
        'formations.images as image',
        'formateurs.Nom_formateur as Nom_formateur',
        'categories.Nom_Categorie as Nom_Categorie')->limit(8)->get(); 
            
        return view('index', compact('formations'));
    }

    public function show(){
        return view('shop-details');
    }


}
