<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CategoryController extends Controller
{

    public function index()
    {
        $productsData = Product::all();
        return view('allProducts', ['products' => $productsData]);
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $quantity = $request->input('quantity');

        $request->session()->put($id, $quantity);
    }

    public function show(Request $request)
    {
        self::store($request);
        dd($request->session()->all());
    }
}
