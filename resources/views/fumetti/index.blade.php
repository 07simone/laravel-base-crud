@extends('layout.home')

@section('content')

<div class="container">
    <div class="row">

@foreach ($comics as $comic )
    <div class="col-6">
        <div class="card" style="width: 18rem;">
            <img src="{{$comic->thumbs}}" class="card-img-top" alt="...">
            <div class="card-body">
            <a href="{{route('fumetti.show',$comic->id)}}">
                <h5 class="card-title">{{$comic->title}}</h5>
            </a>

            <p class="descrizione">{{$comic->description}}</p>
            <p class="card-text">{{$comic->price}}</p>
            <p class="card-text">{{$comic->series}}</p>
            <p class="card-text">{{$comic->sale_date}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>
</div>



@endsection
