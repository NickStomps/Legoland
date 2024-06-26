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
<div class="klap-uit-accomodaties">Pas de accomodaties aan:</div>
<div class="accomodaties-pas-aan-ding">
    @foreach ($accommodaties as $accommodatie)
        <div class="edit">
                <form method="POST" action="/accommodaties/{{$accommodatie->id}}/update">
                @csrf
                @method('PUT')
                <h3>Pas accomodatie: {{$accommodatie->name }} aan</h3>
                <label for="name">Naam:</label>
                <input type="text" name="name" value="{{$accommodatie->name}}">
                <label for="description">Beschrijving:</label>
                <textarea name="description" rows="8" cols="36">{{$accommodatie->description}}</textarea>
                <label for="imgPath">image path:</label>
                <input type="text" name="imgPath" value="{{$accommodatie->imgPath}}">
                <button type="submit">Opslaan</button>
            </form>
            <form method="POST" action="/accommodaties/{{$accommodatie->id}}/delete">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit">Delete</button>    
            </form>
        </div>
    @endforeach
    <div class="save">
        <form method="POST" action="/attracties/save">
            @csrf
            <h3>Maak een nieuwe accomodatie aan</h3>
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

<div class="klap-uit-orders">Alle orders:</div>
<div class="orders-ding">
@foreach ($orders as $order)
    <table class="d-flex justify-content-center" style="max-width: 500px; margin: 0 auto;">
        <tr style="border: 1px solid black">
            <th>Accommodatie naam</th>
            <th>Start datum</th>
            <th>Eind datum</th>
        </tr>
        <tr>
            @foreach ($accommodaties as $accommodatie)
                @if ($accommodatie->id == $order->accommodatie_id)
                    <td>{{$accommodatie->name}}</td>
                @endif
            @endforeach
            <td>{{$order->start_date}}</td>
            <td>{{$order->end_date}}</td>
        </tr>
    </table>
    @endforeach
</div>

@endsection