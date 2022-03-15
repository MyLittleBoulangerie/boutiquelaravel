@extends('Layouts.template')
@section('content')

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
                <p>quantité: {{$product['quantity']}}</p>
                <div class="button-container" style="display: flex">
                <form action="{{route('product',$product['item']['id'] )}}" method="get">
                <button type="submit" value="{{$product['item']['id']}}">Modifier</button>
                </form>
                <form action="" method="post">
                <button type="submit" value="{{$product['item']['id']}}">Supprimer</button>
                </form>
                </div>
            </li>
        </ul>
    @endforeach
    @endif

@endsection
