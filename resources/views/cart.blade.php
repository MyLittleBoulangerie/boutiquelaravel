@extends('Layouts.template')
@section('content')
    <h2>Votre panier:</h2>

    @foreach($cart as $cartItem)
        <ul>
            <li><img src="ressources/photos/{{$cartItem['name']}}.jpg" alt="Photo de {{$cartItem['name']}}">
                <h3>{{$cartItem['name']}}</h3>
                <p>{{$cartItem['description']}}</p>
                <p>prix: {{$cartItem['price']}}€</p>
                <p>quantité: {{$cartItem['quantity']}}€</p>
            </li>
        </ul>
    @endforeach
@endsection
