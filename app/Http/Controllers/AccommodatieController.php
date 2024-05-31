<?php

namespace App\Http\Controllers;

use App\Models\Accommodatie;
use Illuminate\Http\Request;

class AccommodatieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('accommodaties');
    }
}
