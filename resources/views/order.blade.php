@extends('Layouts.template')
@section('validate_order')
    <h1>Commande Validée !</h1>
    <p>Votre commande N° *** contenant <br /></p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Produit.s</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix Total </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>product_name1</td>
            <td>product_has_order.Qté</td>
            <td></td>
        </tr>
        <tr>
            <td>product_name2</td>
            <td>product_has_order.Qté</td>
            <td></td>
        </tr>
        <tr>
            <td>product_name3</td>
            <td>product_has_order.Qté</td>
            <td></td>
        </tr>
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
            <td>€</td>
        </tr>
        </tbody>
    </table><br />

    <p>A Bien était validée par nos services. </p><br />
    <p>Vous pourrez venir régler et récupérer votre commande en boutique à partir de demain 9h00.</p>
@endsection
<?php /*{{\App\Models\Order::prixTotalProduits(1,5)}}
{{\App\Models\Order::prixTotalProduits(2,3)}}
{{\App\Models\Order::prixTotalProduits(2,6)}}
{{\App\Models\Order::prixTotalCommande()}}*/?>
