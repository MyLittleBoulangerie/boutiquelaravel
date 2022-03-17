@extends('layouts.template')

<!-- For the content itself -->

@section('content')

    <h2>Formulaire de création d'un produit en DB :</h2>

    <!--TODO  A finaliser -->
    <form action="{{route('adminproductstore')}}" method="POST">
        @csrf
        <label for="name">Nom du nouveau produit :</label>
        <input type="text" name="name"><br>

        <label for="description">Description du produit :</label>
        <input type="textarea" name="description"><br>

        <label for="price">Prix de vente Hors Taxes :</label>
        <input type="text" name="price"><br>

        <p>Merci d'attribuer la catégorie de ce produit :</p>
        <input type="radio" id="pain" name="productCategory" value="Pain">
        <label for="pain">Pain</label><br>

        <input type="radio" id="viennoiserie" name="productCategory" value="Viennoiserie">
        <label for="Viennoiserie">Viennoiserie</label><br>

        <input type="radio" name="productCategory" value="Patisserie">
        <label for="patisserie">Patisserie</label><br>

        <input type="submit" value="Submit">
    </form>

@endsection
