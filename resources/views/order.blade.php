@extends('Layouts.template')
@section('validate_order')
    <h1>Commande Validée !</h1>
    <p>Votre commande N° *** contenant <br/></p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Produit.s</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix Unitaire</th>
            <th scope="col">Prix Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cart_validate as $product):
        <tr>
            <td>{{$product['product']['name']}}</td>
            <td>{{$product['quantity']}}</td>
            <td>{{$product['product']['price']}}€</td>
            <td>{{$product['quantity'] * $product['product']['price']}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Prix Total de la commande</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> {{$totalprice}}€</td>
        </tr>
        </tbody>
    </table><br/>

    <p>A Bien était validée par nos services. </p><br/>
    <p>Vous pourrez venir régler et récupérer votre commande en boutique à partir de demain 9h00.</p>
@endsection
<?php /*{{\App\Models\Order::prixTotalProduits(1,5)}}
{{\App\Models\Order::prixTotalProduits(2,3)}}
{{\App\Models\Order::prixTotalProduits(2,6)}}
{{\App\Models\Order::prixTotalCommande()}}*/?>
