<?php

namespace App\Http\Controllers;

use App\Models\Accommodatie;
use Illuminate\Http\Request;

class AccommodatieController extends Controller
{
    /**
     * Display a listing of the resources
     */
    public function index()
    {
        $accommodaties = Accommodatie::all();
        return view('accommodaties' , ['accommodaties' => $accommodaties]);
    }
}


