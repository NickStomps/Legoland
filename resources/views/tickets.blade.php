@extends('layout')

@section('content')
<h1>Tickets</h1>
<div class="form">
    <form method="POST" action="/bestellingen/save">
<div class="tickets">
    @foreach($tickets as $ticket)
    <div class="ticket">
        <h3>{{$ticket->ticketNaam}}</h3>
        <p>&euro;{{($ticket->prijs)}}</p>
        <div class="aantalSelector">
            <input type="number" name="tickets[{{($ticket->id)}}]">
        </div>
    </div>
    @endforeach
</div>

        @csrf
        <label for="naam">Achternaam:</label>
        <input type="text" id="naam" name="achternaam">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="telefoonnummer">Telefoonnummer:</label>
        <input type="tel" id="telefoonnummer" name="telefoonnummer">
        <label for="adres">Adres:</label>
        <input type="text" id="adres" name="adres">
        <button type="submit">Bestel</button>
    </form>
</div>
@endsection