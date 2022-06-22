<?php

namespace App\Models;

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

}
