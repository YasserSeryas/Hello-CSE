<?php

namespace App\Http\Controllers;
use App\Http\Requests\ImageUploadRequest;
use Illuminate\Http\Request;
use App\Models\star;
class starController extends Controller
{   public function home(){
        $stars =star::all();
        return view('welcome',compact('stars'));
    }
    // Tableau de bord Admin 
    public function index(){
        $stars =star::all();
        return view('stars.index',compact('stars'));
    }
    // Fonction pour la création d'une fiche de star 
    public function create(){
        return view('stars.create');
    }
    public function store(ImageUploadRequest $request, star $star)
    {   
        
        $star->storeStar($request)->storeMedia($request);
        return redirect()->route('stars.index');
    }
    // Fonction pour la modification et mise à jour d'une fiche de star 
    public function edit($id){
        $starEdit = star::findOrfail($id);
        return view('stars.edit', compact('starEdit'));
    }
    public function update(Request $request,$id){
        $stars = star::findOrfail($id);
        $stars -> nom = $request->get('nom');
        $stars->prenom = $request->get('prenom');
        $stars->description = $request->get('description');
        
        $stars->save();
        return redirect()->route('stars.index');
    }
   // Fonction pour la suppression d'une fiche de star
    public function delete($id){
        $stars = star::destroy($id);
        return redirect()->route('stars.index');
    }
    // Fonction pour ouvrir une fiche specifique de star
    public function open($id){
        $stars =star::all();
        $starOpen = star::findOrfail($id);
        return view('star', compact('starOpen','stars'));
    }

}
