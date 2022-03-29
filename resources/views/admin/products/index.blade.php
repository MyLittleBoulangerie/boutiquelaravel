@extends('layouts.template')

<!-- For the content itself -->

@section('content')

    <a class="btn btn-primary action-button" href="{{route('adminproductcreate')}}">Créer un produit</a>
    <h2>Tous nos produits:</h2>

    @foreach($products as $product)
        <div>
            <img src="ressources/photos/{{$product->name}}.jpg" alt="Photo de {{$product->name}}">
            <h3>{{$product->name}}</h3>
            <p>{{$product->description}}</p>
            <a class="btn btn-secondary" href="{{route('adminproductedit', $product)}}">Modifier le produit</a>
        </div>
    @endforeach
@endsection

