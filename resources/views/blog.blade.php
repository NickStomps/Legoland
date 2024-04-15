@extends('layout')

@section('content')
    <div class="image overlay" style="background-image: url({{Vite::asset('resources/images/kinderen_in_achtbaan.webp')}});">
            <h1>Welkom in Legoland! </h1>
    </div>
    <div class="introduction">
        <img src="{{Vite::asset('resources/images/random-kind.webp')}}" alt="">
        <p>Legoland Doetinchem is een creatieve en kleurrijke indoor speeltuin en attractiepark gelegen in Doetinchem, Nederland. Het park biedt een avontuurlijke en educatieve ervaring voor kinderen en hun families, met een scala aan LEGO®-geïnspireerde attracties, speelzones en bouwactiviteiten. Van interactieve bouwworkshops tot opwindende attracties en thematische zones, Legoland Doetinchem is een populaire bestemming waar fantasie tot leven komt en waar plezier en leren hand in hand gaan. Met zijn unieke combinatie van vermaak en creativiteit is Legoland Doetinchem een favoriete bestemming voor gezinnen en LEGO®-liefhebbers.</p>
    </div>
@endsection