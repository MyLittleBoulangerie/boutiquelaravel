@extends('layouts.template')

<!-- For the content itself -->

@section('content')

    <h2>Formulaire de modification du produit {{$product->name}}en DB :</h2>

    <!--TODO  A finaliser -->
    <form action="{{route('adminproductupdate', $product->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Nom du nouveau produit :</label>
        <input type="text" name="name" value="{{$product->name}}"><br>

        <label for="description">Description du produit :</label>
        <input type="textarea" name="description" value="{{$product->description}}"><br>

        <label for="price">Prix de vente :</label>
        <input type="text" name="price" value="{{$product->price}}"><br>

        <label for="stock">Stock du produit :</label>
        <input type="text" name="stock" value="{{$product->stock}}"><br>

        <p>Merci d'attribuer la catégorie de ce produit :</p>
        <input type="radio" id="pain" name="category_id" value="1" @if( $product->category_id ==1)checked @endif>
        <label for="pain">Pain</label><br>

        <input type="radio" id="viennoiserie" name="category_id" value="2"
               @if( $product->category_id ==2)checked @endif>
        <label for="Viennoiserie">Viennoiserie</label><br>

        <input type="radio" id="patisserie" name="category_id" value="3" @if( $product->category_id ==3)checked @endif>
        <label for="patisserie">Patisserie</label><br>

        <input type="submit" value="Submit">
    </form>

@endsection
