@extends('layout.home')

@section('content')

<div class="container">
    <div class="row">
        <form action="{{route('fumetti.store')}}" method="post">
            @csrf
            <div class="co-2">
                <label for="name">title</label>
                <input type="text" name ='title' id="name">
            </div>

            <div class="col-2">
                <label for="name">description</label>
                <input type="text" name ='description' id="description">
            </div>

            <div class="col-2">
                <label for="name">immagini</label>
                <input type="text" name ='thumbs' id="thumbs">
            </div>


            <div class="col-2">
                <label for="name">Prezzo</label>
                <input type="text" name ='price' id="price">
            </div>

            <div class="col-2">
                <label for="name">Serie</label>
                <input type="text" name ='series' id="series">
            </div>


            <div class="col-2">
                <label for="name">Uscita</label>
                <input type="text" name ='sale_date' id="sale_date">
            </div>


            <div class="col-2">
                <label for="name">Tipo</label>
                <input type="text" name ='type' id="type">
            </div>


            <div class="col-2">
                <input type="submit" value= 'invia'>
            </div>

        </form>
    </div>
</div>
@endsection
