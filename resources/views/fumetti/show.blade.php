@extends('layout.home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumbs}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="descrizione">{{$comic->description}}</p>
                <p class="card-text">{{$comic->price}}</p>
                <p class="card-text">{{$comic->series}}</p>
                <p class="card-text">{{$comic->sale_date}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
