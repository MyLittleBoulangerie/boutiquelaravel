@extends('layouts.template')

<!-- For the dynamic meta tags -->
@section('metaDescription')
    'Votre panier My Little Boulangerie'
@endsection
@section('metaTitle')
    'MLB - Votre panier'
@endsection


@section('content')
    <h2>Votre panier:</h2>

    @if(empty($productInCart))
        <p>Votre panier est vide pour l'instant</p>
    @else

        @foreach($productInCart as $product)
            <ul>
                <li><img src="resources/img/{{$product['item']['id']}}.jpg"
                         alt="Photo de {{$product['item']['name']}}">
                    <h3>{{$product['item']['name']}}</h3>
                    <p>{{$product['item']['description']}}</p>
                    <p>prix unitaire: {{$product['item']['price']}}€</p>
                    <p>prix: {{$product['item']['price']*$product['quantity']}}€</p>
                    <form action="{{route('updatecart')}}" method="POST">
                        @csrf
                        <label>quantité:</label>
                        <input type="hidden" name="product_id" value="{{$product['item']['id']}}">
                        <input type="number" min="1" max="{{$product['item']['stock']}}" name="quantity" value="{{$product['quantity']}}">
                        <button type="submit">Modifier</button>
                    </form>

                    <form action="{{route('remove')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$product['item']['id']}}">
                        <button type="submit" >Supprimer</button>
                        <br/>
                    </form>
                </li>
            </ul>
        @endforeach
        <h4>Prix total: {{$totalPrice}}</h4>

        <form action="{{route('deletecart')}}" method="POST">
            @csrf
            <button type="submit">Annuler mon panier</button>
        </form>
    @endif
@endsection
