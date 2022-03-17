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
                <li><img src="ressources/photos/{{$product['item']['name']}}.jpg"
                         alt="Photo de {{$product['item']['name']}}">
                    <h3>{{$product['item']['name']}}</h3>
                    <p>{{$product['item']['description']}}</p>
                    <p>prix: {{$product['item']['price']}}€</p>
                    <form action="{{route('updatecart')}}" method="POST">
                        @csrf
                        <label>quantité:</label>
                        <input type="hidden" name="product_id" value="{{$product['item']['id']}}">
                        <input type="number" name="quantity" value="{{$product['quantity']}}">
                        <button type="submit">Modifier</button>
                    </form>

                    <form action="{{route('delete')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$product['item']['id']}}">
                        <button type="submit" >Supprimer</button>
                        <br/>
                    </form>
                </li>
            </ul>
        @endforeach
        <h4>Prix total: XXXX</h4>
    @endif

@endsection
