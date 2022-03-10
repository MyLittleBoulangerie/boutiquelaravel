<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>
<body class="antialiased">
<header>
    <h1>Bienvenue chez My Little Boulangerie</h1>
    <div>Mon panier: {{'infos de session: id et quantity de chaque produit'}}
        <ul>
            <li>{{'id - quantity'}}</li>
            <li>{{'id - quantity'}}</li>
        </ul>
    </div>
</header>
<main>
    <h2>Tous nos produits:</h2>
    <h3>Disponible uniquement en magasin et Click & Collect</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. </p>
    @foreach($products as $product)
        <div>
            <img src="ressources/photos/{{$product->name}}.jpg" alt="Photo de {{$product->name}}">
            <h3>{{$product->name}}</h3>
            <p>{{$product->description}}</p>
            <label for="quantity">quantité:</label>
            <form action="/category" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="number" placeholder="1" name="quantity"
                       min="1" max="{{$product->stock}}">
                <div>stock disponible: {{$product->stock}}</div>
                <button type="submit"> Ajouter au panier</button>
                <br/>
            </form>
        </div>
    @endforeach
</main>
<footer></footer>
</body>
</html>
