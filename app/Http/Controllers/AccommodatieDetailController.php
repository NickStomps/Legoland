<?php

namespace App\Http\Controllers;

use App\Models\accommodatieDetail;
use Illuminate\Http\Request;
use App\Models\accommodatie;

class AccommodatieDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $accommodatie = accommodatie::where('id', $id)->first();

        return view('accommodatiesdetails' , ['accommodatie' => $accommodatie]);

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(accommodatieDetail $accommodatieDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(accommodatieDetail $accommodatieDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, accommodatieDetail $accommodatieDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accommodatieDetail $accommodatieDetail)
    {
        //
    }
}
