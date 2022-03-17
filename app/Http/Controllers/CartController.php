<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        $cart[$product_id] = $quantity;

        $request->session()->put('cart', $cart);
        return redirect()->route('cart');

    }

    // Afficher tous les articles du panier
    public function index()
    {
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

    // supprimer un article du panier
    public function remove(Request $request)
    {
        $id = $request->input('id');
        $cart = $request->session()->get('cart');
        unset($cart[$id]);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
}
