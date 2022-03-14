@extends('Layouts.template')
@section('content')
    <h2>Votre panier:</h2>

    @if(empty($productInCart))
        <p>Votre panier est vide pour l'instant</p>
    @else

    @foreach($productInCart as $product)
        <ul>
            <li><img src="ressources/photos/{{$product['item']['name']}}.jpg"
                     alt="Photo de {{$product['item']['name']}}">
                <h3>{{$product['item']['name']}}</h3>
                <p>{{$product['item']['description']}}</p>
                <p>prix: {{$product['item']['price']}}€</p>
                <p>quantité: {{$product['quantity']}}</p>
            </li>
        </ul>
    @endforeach
    @endif
@endsection
