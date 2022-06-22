<?php

namespace App\Models;
use App\Helper\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class star extends Model
{
    use HasFactory;
    protected $table ="star";
    protected $fillable =[
        "nom",
        "prenom",
        "image",
        "description",
    ];
     public function storeStar($request)
    {   
        $this->nom = $request->nom;
        $this->prenom = $request->prenom;
        $this->description = $request->description;
        $this->save();

        return $this;
    }
    public function storeMedia($request)
    {
        $path = public_path('tmp/uploads');

        if ( ! file_exists($path) ) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('image');

        $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
        
        $this->image = $fileName;
        $this->save();
        
        $file->move($path, $fileName);

        return $this;
    }
}
