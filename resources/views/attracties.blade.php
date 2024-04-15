@extends('layout')

@section('content')
<div class="attracties">
    @foreach($attracties as $attractie)
    <h3>{{$attractie->name}}</h3>
    <div class="attractie">
        <img src="{{Vite::asset($attractie->imgPath)}}" alt="">
        <p>{{$attractie->description}}</p>
    </div>
    @endforeach
</div>
@endsection