@extends('Layouts.template')

<!-- For the dynamic meta tags -->
@section('metaDescription')
    'Validation de votre commande'
@endsection
@section('metaTitle')
    'MLB - Commande validée'
@endsection


@section('content')
    <h2>Votre commande n° XXX a bien été validée:</h2>
    <p>Présentez ce n° à la boulangerie et récupérez votre commande</p>

    <h3>Récapitulatif de votre commande:</h3>

        <h4>Vos produits :</h4>
    <ul>
        <li>{{$products}}</li>
        <li>{{$products}}</li>
        <li>{{$products}}</li>
    </ul>
        <h4>Prix total de votre commande: {{$totalPrice}}</h4>

    <p>Vous pouvez dès à présent vous présenter à la boulangerie</p>
@endsection
