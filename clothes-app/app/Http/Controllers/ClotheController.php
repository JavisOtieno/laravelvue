<?php

namespace App\Http\Controllers;

use App\Models\Clothe;
use Illuminate\Http\Request;

class ClotheController extends Controller
{
    //

    public function index() {
        $clothes = Clothe::all();
        return view('clothes.index',['clothes'=>$clothes]);
    }

    public function indexApi() {
        $clothes = Clothe::all();
        return response()->json($clothes);
        //return view('clothes.index',['clothes'=>$clothes]);
    }
}
