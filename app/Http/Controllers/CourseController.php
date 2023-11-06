<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseCreateRequest;
use App\Models\Formations;
use App\Models\Formateurs;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(){
        $formateurs = Formateurs::all();
        $categories = Categories::all();
        return view('upload-courses', compact('formateurs', 'categories'));
    }

    public function store(Request $request){
        try{
            if ($request->isMethod('post')) {

                if ($request->hasFile('authors')) {
                    $authors = $request->authors;
                    $name_auth =  uniqid() . '.' . $authors->getClientOriginalExtension();
                    $authors->move('assets2/lms/authors', $name_auth);
                }
                if ($request->hasFile('images')) {
                    $image = $request->images;
                    $name =  uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move('assets2/lms/img', $name);
                }
                if ($request->hasFile('rates')) {
                    $rate = $request->rates;
                    $name_rate =  uniqid() . '.' . $rate->getClientOriginalExtension();
                    $rate->move('assets2/lms/rate', $name_rate);
                }
                if ($request->hasFile('videos')) {
                    $video = $request->videos;
                    $name_video =  uniqid() . '.' . $video->getClientOriginalExtension();
                    $video->move('assets2/lms/videos', $name_video);
                }

               
                if ($request->hasFile('courses_video')) {
                    ini_set('max_execution_time', 80);
                    $zip = $request->courses_video;
                    $name_zip =  uniqid() . '.' . $zip->getClientOriginalExtension();
                    $zip->move('assets2/lms/zip', $name_zip);
                }

                ini_set('max_execution_time', 80);
                Formations::create([
                    'ID_Formateur'  => $request->ID_Formateur,
                    'ID_Categorie'  => $request->ID_Categorie,
                    'Titre'  => $request->Titre,
                    'chapitre'  => $request->chapitre,
                    'Heure'  => $request->Heure,
                    'Descriptionp'  => $request->Descriptionp,
                    'Descriptionc'  => $request->Descriptionc,
                    'Descriptiond'  => $request->Descriptiond,
                    'langue'  => $request->langue,
                    'Prix'  => $request->Prix,
                    'chapterone'  => $request->chapterone,
                    'chaptertwo'  => $request->chaptertwo,
                    'chapterthree'  => $request->chapterthree,
                    'chapterfour'  => $request->chapterfour,
                    'chapterfive'  => $request->chapterfive,
                    'chaptersix'  => $request->chaptersix,
                    'chapterseven'  => $request->chapterseven,
                    'chaptereight'  => $request->chaptereight,
                    'chapternine'  => $request->chapternine,
                    'chapterten'  => $request->chapterten,
                    'timeone'  => $request->timeone,
                    'timetwo'  => $request->timetwo,
                    'timethree'  => $request->timethree,
                    'timefour'  => $request->timefour,
                    'timefive'  => $request->timefive,
                    'timesix'  => $request->timesix,
                    'timeseven'  => $request->timeseven,
                    'timeeight'  => $request->timeeight,
                    'timenine'  => $request->timenine,
                    'timeten'  => $request->timeten,
                    'studentLesson'  => $request->studentLesson,
                    'studentTeacher'  => $request->studentTeacher,
                    'ratenote'  => $request->ratenote,
                    'authors'  => $name_auth,
                    'images'  => $name,
                    'rates'  => $name_rate,
                    'videos'  => $name_video,
                    'courses_video'  => $name_zip,
                ]);
               
                return redirect()->back()->with('flash_message_success', 'Formation crée avec succès');
                
            }
        }
        catch(\Exception $e){
                return redirect()->back()->with('flash_message_error',$e->getMessage());
        }
    }

    public function show($id){

        $courses = DB::table('formations')
        ->join('formateurs', 'formations.ID_Formateur', '=', 'formateurs.ID_Formateur')
        ->join('categories', 'formations.ID_Categorie', '=', 'categories.ID_Categorie')
        ->select('categories.Nom_Categorie as Nom_Categorie')
        ->where('ID_Formation', $id)->first();

        $relates = DB::table('formations')
        ->join('formateurs', 'formations.ID_Formateur', '=', 'formateurs.ID_Formateur')
        ->join('categories', 'formations.ID_Categorie', '=', 'categories.ID_Categorie')
        ->select('categories.Nom_Categorie as Nom_Categorie',
        'formations.ID_Formation as ID_Formation',
        'formations.Prix as prix',
        'formations.Titre as titre',
        'formations.images as image')->where('Nom_Categorie', $courses->Nom_Categorie)->limit(3)->get();

      

        $details = DB::table('formations')
        ->join('formateurs', 'formations.ID_Formateur', '=', 'formateurs.ID_Formateur')
        ->join('categories', 'formations.ID_Categorie', '=', 'categories.ID_Categorie')
        ->select('formations.ID_Formation as ID_Formation',
        'formations.Prix as prix',
        'formations.Titre as titre',
        'formations.chapitre as chapitre',
        'formations.Heure as heure',
        'formations.langue as langue',
        'formations.studentLesson as studentLesson',
        'formations.studentTeacher as studentTeacher',
        'formations.ratenote as ratenote',
        'formations.Descriptionp as Descriptionp',
        'formations.Descriptionc as Descriptionc',
        'formations.Descriptiond as Descriptiond',
        'formations.authors as author_image',
        'formations.images as image',
        'formations.rates as rate',
        'formations.videos as video',
        'formations.chapterone as chapterone','formations.timeone as timeone',
        'formations.chaptertwo as chaptertwo','formations.timetwo as timetwo',
        'formations.chapterthree as chapterthree','formations.timethree as timethree',
        'formations.chapterfour as chapterfour','formations.timefour as timefour',
        'formations.chapterfive as chapterfive','formations.timefive as timefive',
        'formations.chaptersix as chaptersix','formations.timesix as timesix',
        'formations.chapterseven as chapterseven', 'formations.timeseven as timeseven',
        'formations.chaptereight as chaptereight', 'formations.timeeight as timeeight',
        'formations.chapternine as chapternine', 'formations.timenine as timenine',
        'formations.chapterten as chapterten', 'formations.timeten as timeten',
        'formateurs.Nom_formateur as Nom_formateur',
        'formateurs.title as formateur_title',
        'formateurs.long_bio as long_bio',
        'categories.Nom_Categorie as Nom_Categorie')->where('ID_Formation', $id)->first(); 
        return view('courses-details', compact('details', 'relates'));
    }

    public function addToCart($id){

        $formations = DB::table('formations')
        ->join('formateurs', 'formations.ID_Formateur', '=', 'formateurs.ID_Formateur')
        ->join('categories', 'formations.ID_Categorie', '=', 'categories.ID_Categorie')
        ->select('formations.ID_Formation as ID_Formation',
        'formations.Prix as prix',
        'formations.Titre as titre',
        'formations.chapitre as chapitre',
        'formations.Heure as heure',
        'formations.langue as langue',
        'formations.studentLesson as studentLesson',
        'formations.studentTeacher as studentTeacher',
        'formations.ratenote as ratenote',
        'formations.Descriptionp as Descriptionp',
        'formations.Descriptionc as Descriptionc',
        'formations.Descriptiond as Descriptiond',
        'formations.firstDescrip as firstDescrip',
        'formations.authors as author_image',
        'formations.images as image',
        'formations.rates as rate',
        'formateurs.Nom_formateur as Nom_formateur',
        'formateurs.title as formateur_title',
        'formateurs.long_bio as long_bio',
        'categories.Nom_Categorie as Nom_Categorie')->where('ID_Formation', $id)->first();

        // $formations = Formations::findOrFail($id);
        $total = 0;
        $total += $formations->prix;

        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "Nom_formateur" => $formations->Nom_formateur,
                "image" => $formations->image,
                "prix" => $formations->prix,
                "titre" => $formations->titre,
                "total_Prix" => $total,
                "quantity" => 1
                ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('flash_message_success', 'Cours ajouté au panier avec succès!', compact('formations'));
    }

//      public function remove(Request $request)
//     {
//         if($request->id) {
//             $cart = session()->get('cart');
//             if(isset($cart[$request->id])) {
//                 unset($cart[$request->id]);
//                 session()->put('cart', $cart);
//             }
//             session()->flash('success', 'Cours retiré avec succès!');
//         }
//     }
}
