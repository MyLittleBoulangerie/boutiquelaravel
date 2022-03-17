<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = [];
        $totalPrice = 0;
        foreach (Session::get('cart', []) as $id => $quantity) {
            $product = Product::find($id);
            $cart[] = [
                'product' => $product,
                'quantity' => $quantity
            ];
            $totalPrice += $product->price * $quantity;
        }

        return view('order', ['cart_validate' => $cart, 'totalprice' => $totalPrice]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $session = Session::get('cart', []);
        if (empty($session)) {
            echo "Votre panier est vide";
        } else {

            $order = new Order();
            $order->save();
            $totalPrice = 0;
            foreach ($session as $productId => $quantity) {
                $order->products()->attach($productId, ['quantity' => $quantity]);
            }
            $request->session()->put('cart', []);
            $totalPrice += $order->price * $quantity;
            return view('order', ['order' => $order, 'totalprice' => $totalPrice]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function addData(Request $request)
    {

    }
}
