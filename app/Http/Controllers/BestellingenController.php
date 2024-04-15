<?php

namespace App\Http\Controllers;

use App\Models\Bestellingen;
use App\Models\Ticket;
use App\Models\BestellingenRegel;
use Illuminate\Http\Request;

class BestellingenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets', ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Bestellingen::with('bestellingen_regels.ticket')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bestelling = new Bestellingen();
        $bestelling->achternaam = $request->input('achternaam');
        $bestelling->telefoonnummer = $request->input('telefoonnummer');
        $bestelling->email = $request->input('email');
        $bestelling->adres = $request->input('adres');
        $bestelling->save();

        foreach($request->tickets as $ticketId => $aantal){
            $bestellingRegel = new BestellingenRegel();
            $bestellingRegel->bestelling_id = $bestelling->id;
            $bestellingRegel->ticket_id = $ticketId;
            $bestellingRegel->aantal = $aantal;
            $bestellingRegel->save();
        }
        return redirect()->route('tickets');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bestellingen $bestellingen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bestellingen $bestellingen)
    {
        //
    }
}
