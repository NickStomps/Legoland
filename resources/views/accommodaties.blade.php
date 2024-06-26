@extends('layout')

@section('content')
    <div class="container m-0 p-3 mw-100 mh-100 d-flex justify-content-center" style="min-height: 80vh">
        @if (session('status'))
            <div class="alert alert-success w-30 h-10">
                {{ session('status') }}
            </div>
        @endif
        <div class="row w-100 h-100 d-flex justify-content-center m-0 p-0 " style="width:100vh">


            @foreach($accommodaties as $accommodatie)

                <div class="col-4">
                <div class="card d-flex justify-content-center">
                    <a href="/accommodatiesdetails/{{$accommodatie->id}}" class="" style="color:black; text-decoration: none">
                    <h2 class="card-header"> {{$accommodatie->name}}</h2>
                    <img class="card-img-top " style="max-width:300px; max-height: 400px;" src="{{$accommodatie->imgPath}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text background-primary">{{$accommodatie->description}}</p>
                    </div>
                </a>

        </div>
            </div>


            @endforeach
        </div>
    </div>
    <script>
        window.onload = function() {
            setTimeout(function() {
                let alertBox = document.getElementById('status-alert');
                if (alertBox) alertBox.style.display = 'none';
            }, 3000);
        };
    </script>
@endsection

