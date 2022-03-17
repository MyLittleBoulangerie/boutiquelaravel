@extends('layouts.template')

<!-- For the dynamic meta tags -->
@section('metaDescription')
    {{$category->description}}
@endsection
@section('metaTitle')
    MLB - Nos {{$category->name}}
@endsection

<!-- For the content itself -->

@section('content')
    <h2>Tous nos produits:</h2>
    <h3>Disponible uniquement en magasin et Click & Collect</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. </p>

    @foreach($products as $product)
        <div>
            <img src="ressources/photos/{{$product->name}}.jpg" alt="Photo de {{$product->name}}">
            <h3>{{$product->name}}</h3>
            <p>{{$product->description}}</p>
            <p>prix: {{$product->price}}€</p>
            <label for="quantity">quantité:</label>
            <form action="{{route('addcart')}}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="number" value="1" name="quantity"
                       min="1" max="{{$product->stock}}">
                <div>stock disponible: {{$product->stock}}</div>
                <a  href="{{route('product', $product->id)}}">Voir le produit</a>
                <button type="submit"> Ajouter au panier</button>
                <br/>
            </form>
        </div>
    @endforeach
@endsection

