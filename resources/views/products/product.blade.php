@extends('layouts.template')

<!-- For the dynamic meta tags -->
@section('metaDescription')
    {{$product->description}}
@endsection
@section('metaTitle')
    {{$product->name}}
@endsection


<!-- For the content itself -->
@section('content')
    <h2>{{$product->name}}</h2>

    <div>
        <img src="ressources/photos/{{$product->name}}.jpg" alt="Photo de {{$product->name}}">

        <h4>Disponible uniquement en magasin et Click & Collect</h4>
        <p>{{$product->description}}</p>
        <p>prix: {{$product->price}}€</p>
        <label for="quantity">quantité:</label>
        <form action="{{route('addcart')}}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <input type="number" value="1" name="quantity"
                   min="1" max="{{$product->stock}}">
            <div>stock disponible: {{$product->stock}}</div>
            <button type="submit"> Ajouter au panier</button>
            <br/>
        </form>
    </div>
@endsection
