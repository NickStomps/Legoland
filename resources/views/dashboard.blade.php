@extends('layout')

@section('content')
<div class="klap-uit-attracties">Pas de attracties aan:</div>
<div class="attracies-pas-aan-ding">
    @foreach ($attracties as $attractie)
        <div class="edit">
                <form method="POST" action="{{ route('attracties.update', ['attractie' => $attractie->id]) }}">
                @csrf
                @method('PUT')
                <h3>Pas attractie: {{$attractie->name }} aan</h3>
                <label for="name">Naam:</label>
                <input type="text" name="name" value="{{$attractie->name}}">
                <label for="description">Beschrijving:</label>
                <textarea name="description" rows="8" cols="36">{{$attractie->description}}</textarea>
                <label for="imgPath">image path:</label>
                <input type="text" name="imgPath" value="{{$attractie->imgPath}}">
                <button type="submit">Opslaan</button>
            </form>
            <form method="POST" action="{{ route('attracties.delete', ['attracties' => $attractie->id]) }}">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit">Delete</button>    
            </form>
        </div>
    @endforeach
    <div class="save">
        <form method="POST" action="/attracties/save">
            @csrf
            <h3>Maak een nieuwe attractie aan</h3>
            <label for="name">Naam:</label>
            <input type="text" name="name">
            <label for="description">Beschrijving:</label>
            <textarea name="description" rows="8" cols="36"></textarea>
            <label for="imgPath">image path:</label>
            <input type="text" name="imgPath" value="resources/images/">
            <button type="submit">Opslaan</button>
        </form>
    </div>
</div>
@endsection