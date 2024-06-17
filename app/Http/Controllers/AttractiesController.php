<?php

namespace App\Http\Controllers;

use App\Models\Attracties;
use Illuminate\Http\Request;

class AttractiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attracties = Attracties::all();
        return view('attracties', ['attracties' => $attracties]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attracties = new Attracties();
        $attracties->name = $request->input('name');
        $attracties->description = $request->input('description');
        $attracties->imgPath = $request->input('imgPath');
        $attracties->save();
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attracties $attracties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attracties $attracties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $attracties = Attracties::find($id);
        if ($attracties) {
            $attracties->name = $request->input('name');
            $attracties->description = $request->input('description');
            $attracties->imgPath = $request->input('imgPath');
            $attracties->save();
        }
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attracties $attracties)
    {
        $attracties->delete();
        return redirect()->route('dashboard');
    }
}
