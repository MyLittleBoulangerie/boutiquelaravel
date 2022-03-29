@extends('Layouts.template')
@section('validate_order')

    <h1>Commande Validée !</h1>
    <p>Votre commande N° {{$order->id}} contenant <br/></p>
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
        @foreach($order->products as $product):
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->pivot->quantity}}</td>
            <td>{{$product->price}}€</td>
            <td>{{$product->pivot->quantity * $product->price}}</td>

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
            <td>{{$totalprice}} €</td>
        </tr>
        </tbody>
    </table><br/>

    <p>A bien été validée par nos services. </p><br/>
    <p>Vous pourrez venir régler et récupérer votre commande en boutique à partir de demain 9h00.</p>
@endsection
