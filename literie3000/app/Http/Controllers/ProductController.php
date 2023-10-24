<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->image = "https://picsum.photos/200/300";
        $product->brand = "EPEDA";
        $product->name = "Matelas Brigitte";
        $product->price = 759.00;
        $product->save();

        $product = new Product;
        $product->image = "https://picsum.photos/200/300";
        $product->brand = "DREAMWAY";
        $product->name = "Matelas Marine";
        $product->price = 809.00;
        $product->save();

        $product = new Product;
        $product->image = "https://picsum.photos/200/300";
        $product->brand = "BULTEX";
        $product->name = "Matelas Positive Attitude";
        $product->price = 529.00;
        $product->save();

        $product = new Product;
        $product->image = "https://picsum.photos/200/300";
        $product->brand = "EPEDA";
        $product->name = "Matelas Buro Club";
        $product->price = 1019.00;
        $product->save();

        return $product;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
