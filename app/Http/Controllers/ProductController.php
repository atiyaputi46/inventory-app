<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function insert()
    {
        $category = Category::first();

        if (!$category) {
            return redirect('/products')->with('error', 'Data kategori kosong! Jalankan seeder dulu.');
        }

        Product::create([
            'category_id' => $category->id, 
            'name'        => 'Produk Baru UTS',
            'description' => 'Deskripsi produk ini ditambahkan saat UTS.',
            'price'       => 2500000,
            'stock'       => 15,
            'status'      => 'tersedia'
        ]);

        return redirect('/products')->with('success', 'Data berhasil ditambahkan!');
    }

    public function update($id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name'   => 'Nama Produk Diubah',
            'status' => 'habis'
        ]);
        return redirect('/products')->with('success', 'Data produk berhasil diupdate!');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products')->with('success', 'Data produk berhasil dihapus!');
    }
}