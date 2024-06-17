@extends('layout')

@section('content')
    <div class="container-fluid m-0 p-0 d-flex flex-column full-height" style="height:72vh">
        <h1>{{ $accommodatie->name }}</h1>
        <div class="accommodatie flex-grow-1 d-flex flex-row justify-content-center align-items-center">
            <div class="container-left col-md-6 p-3">
                <img src="{{$accommodatie->imgPath}}" alt="" class="img-fluid rounded">
            </div>
            <div class="container-right col-md-6 p-3">
                <p>{{$accommodatie->description}}</p>
                <form>
                    <div class="form-group text-center">
                        <label for="start_date">Check in datum</label>
                        <input type="date" class="form-control mx-auto" id="start_date" name="start_date" style="width: 50%;">
                    </div>
                    <div class="form-group text-center">
                        <label for="end_date">Check uit datum</label>
                        <input type="date" class="form-control mx-auto" id="end_date" name="end_date" style="width: 50%;">
                    </div>
                    <button type="submit" class="btn btn-warning mt-3">Order nu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
