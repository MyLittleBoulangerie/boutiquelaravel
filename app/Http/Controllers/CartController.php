<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\ArrayKey;

class CartController extends Controller

{
    // Placer des produits en session
    public function store(Request $request)
    {

        $product_id = $request->input('product_id');
        (int)$quantity = $request->input('quantity');

        // $cart = $_SESSION['cart']
        $cart = $request->session()->get('cart', []);


        // Debut logique d'ajout
        if (array_key_exists($product_id, $cart)) {
            $cart[$product_id] += $quantity;
        } else {
            $cart[$product_id] = $quantity;
        }

        $totalProduct = 0;
        foreach ($cart as $key => $value) {
            $totalProduct += $value;
        }
        $request->session()->put('totalQte', $totalProduct);
        // Fin
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    // Modifier la quantité d'un produit depuis le panier
    public function updatecart(Request $request)
    {

        $product_id = $request->input('product_id');
        (int)$quantity = $request->input('quantity');

        $cart = $request->session()->get('cart', []);
        $totalProduct = $request->session()->get('totalQte');

        $cart[$product_id] = $quantity;
        foreach ($cart as $item) {
         //   $item += $item;
        }

        $totalProduct = $cart[$product_id];

        $request->session()->put('totalQte', $totalProduct);
        $request->session()->put('cart', $cart);
        return redirect()->back();

    }

    // Afficher tous les articles du panier
    public function index()
    {

        // tentative de refactorisation:
        $cart = [];
        (int)$totalPrice = 0;
        foreach (Session::get('cart', []) as $id => $quantity) {
            $item = Product::find($id);
            $cart[] = [
                'item' => $item,
                'quantity' => $quantity
            ];
            $totalPrice += $item['price'] * $quantity;
        }
        return view('cart.index', ['productInCart' => $cart, 'totalPrice' => $totalPrice]);

    }

    public function remove(Request $request)
    {
        $id = $request->input('id');
        $cart = $request->session()->get('cart');
        unset($cart[$id]);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
}
