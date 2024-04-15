@extends('layout')

@section('content')
<div class="contactForm">
    <h1>Contact</h1>
    <form method="POST" action="/contact/save">
        @csrf
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="bericht">Bericht:</label>
        <textarea id="bericht" name="bericht"></textarea>
        <button type="submit">Verstuur</button>
    </form>
    <div class="contactInformation">
        <p>Adres: Raadhuisstraat 26, 7001 EW Doetinchem</p>
        <p>Telefoonnummer: 0314-392537</p>
        <p>Email: info@legolanddoetinchem.nl</p>
    </div>

</div>

@endsection