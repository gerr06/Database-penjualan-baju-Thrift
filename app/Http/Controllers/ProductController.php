<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Simulasi update: tampilkan hasil input
        return view('products.update-result', [
            'updated' => $request->all()
        ]);
    }

    public function destroy($id)
    {
        // Simulasi hapus: tampilkan pesan
        return view('products.delete-result', compact('id'));
    }
}

