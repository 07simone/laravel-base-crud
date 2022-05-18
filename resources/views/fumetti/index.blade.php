@extends('layout.home')

@section('content')

<div class="container">
    <div class="row">

@foreach ($comics as $comic )
    <div class="col-6">
        <div class="card">
            <img src="{{$comic->thumbs}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="descrizione">{{$comic->description}}</p>
                <p class="card-text">{{$comic->price}}</p>
                <p class="card-text">{{$comic->series}}</p>
                <p class="card-text">{{$comic->sale_date}}</p>
                <a href="{{route('fumetti.show',$comic->id)}}">
                    <button type="button" class="btn btn-warning">INFO</button>
                </a>
            </div>
        </div>
    </div>
@endforeach
</div>
</div>



@endsection
