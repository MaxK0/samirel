<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'weight' => ['required', 'numeric'],
            'temp_max' => ['required'],
            'temp_min' => ['required'],
            'shelf_life' => ['required', 'integer'],
            'quantity_big' => ['nullable', 'integer'],
            'quantity_medium' => ['nullable', 'integer'],
            'quantity_small' => ['nullable', 'integer'],
        ]);

        return Product::create($data);
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => ['required'],
            'weight' => ['required', 'numeric'],
            'temp_max' => ['required'],
            'temp_min' => ['required'],
            'shelf_life' => ['required', 'integer'],
            'quantity_big' => ['nullable', 'integer'],
            'quantity_medium' => ['nullable', 'integer'],
            'quantity_small' => ['nullable', 'integer'],
        ]);

        $product->update($data);

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json();
    }
}
