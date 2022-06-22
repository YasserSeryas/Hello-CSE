<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\star;
class starController extends Controller
{
    public function index(){
        $stars =star::all();
        dd($stars);
    }
}
