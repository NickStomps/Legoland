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
    
    public function update(Request $request, $id)
    {
            $accommodatie = Accommodatie::find($id);
        if ($accommodatie) {
            $accommodatie->name = $request->input('name');
            $accommodatie->description = $request->input('description');
            $accommodatie->imgPath = $request->input('imgPath');
            $accommodatie->save();
        }
        return redirect()->route('dashboard');
    }
        public function destroy(Accommodatie $accommodatie)
    {
        $accommodatie->delete();
        return redirect()->route('dashboard');
    }
}


