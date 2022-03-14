<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller

{
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
        return redirect()->route('home');

    }

    public function index()
    {
        $firstItem = [
            'name' => 'blabla',
            'description' => 'blablablablablablablabla',
            'quantity' => '10',
            'price' => '50'];
        $secondItem = [
            'name' => 'blabla',
            'description' => 'blablablablablablablabla',
            'quantity' => '10',
            'price' => '50'];
        $anotherItem = [
            'name' => 'blabla',
            'description' => 'blablablablablablablabla',
            'quantity' => '10',
            'price' => '50'];

        /* $cart = [
             $firstItem,
             $secondItem,
             $anotherItem
         ];*/

        $cartSession = Session::get('cart');


        $cart = [];

        foreach ($cartSession as $id => $quantity) {
            $item = Product::find($id);
            $product=['item'=>$item, 'quantity'=>$quantity];
            array_push($cart, $product);
            //dd($cart);
        }
        //dd($cart);
        return view('cart.index', ['productInCart' => $cart]);

    }


}