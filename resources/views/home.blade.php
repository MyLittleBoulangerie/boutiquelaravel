@extends('layouts.template')
@section('content')

    <!-- For the dynamic meta tags -->
@section('metaDescription')
    'Bienvenue chez My Little Boulangerie, de savoureux pains, viennoiseries et pâtisseries, à acheter sur place ou à commander en click & collect!'
@endsection
@section('metaTitle')
    'My Little Boulangerie : accueil'
@endsection

<!-- For the content itself -->
    <div class="container-fluid text-center">
        <div class="row">
            @foreach($home as $categorie)
                <div class="col-md-6">
                    <img class="img-fluid d-lg-flex" src="resources/bootstrap/images/test.png">
                </div>
                <div class="col-md-6">
                    <h1> {{$categorie->name}} </h1>
                    <p> {{$categorie->description}} </p>
                    <button class="btn btn-primary" type="button">Button</button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
