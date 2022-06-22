<?php

namespace App\Http\Controllers;
use App\Http\Requests\ImageUploadRequest;
use Illuminate\Http\Request;
use App\Models\star;
class starController extends Controller
{
    public function index(){
        $stars =star::all();
        return view('welcome',compact('stars'));
    }
    public function create(){
        return view('star.create');
    }
    public function edit($id){
        $starEdit = star::findOrfail($id);
        return view('star.edit', compact($starEdit));
    }
    public function update(Request $request,$id){
        $stars = star::findOrfail($id);

        $stars->save();
    }
    public function store(ImageUploadRequest $request, star $star)
    {   
        
        $star->storeStar($request)->storeMedia($request);
        return 'Image uploaded successfully';
    }
    public function delete($id){
        $stars = star::destroy($id);
        return redirect()->route('star.index');
    }
}
