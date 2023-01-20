<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('home', [
            'products' => Product::latest()->with('category')->filter()->get()
        ]);
    }

    public function show(Product $product)
    {
        return view('product-detail', [
            'product' => $product
        ]);
    }

    public function showCategories(Category $category)
    {
        return view('home', [
            'products' => $category->products->load(['category', 'seller'])
        ]);
    }

    public function showSeller(User $seller)
    {
        return view('home', [
            'products' => $seller->products->load(['category', 'seller'])
        ]);
    }

    public function showProduct()
    {
        $auth = Auth::user()->id;

        return view('dashboard', [
            'products' => Product::where('user_id', '=', $auth)->get()
        ]);
    }

    public function edit(Product $product)
    {
        return view('crud.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $formfields = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);

        $product = Product::where('id', '=', $request->id);

        $product->update($formfields);

        return redirect('/dashboard')
            ->with('success', 'Product updated successfully');
    }

    public function delete(Request $request, Product $product)
    {
        $product = Product::where('id', '=', $request->id);

        $product->delete();

        return redirect('/dashboard')
            ->with('success', 'Product deleted successfully');
    }

    public function add()
    {
        return view('crud.add');
    }

    public function store(Request $request)
    {
        $user = Auth::user()->id;

        $categoryID = $request->category_id;

        $formfields = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        // dd($formfields['name']);
        DB::table('products')->insert([
            'category_id' => $categoryID,
            'user_id' => $user,
            'name' => $formfields['name'],
            'image' => $formfields['image'],
            'slug' => $formfields['slug'],
            'description' => $formfields['description'],
            'price' => $formfields['price']
        ]);

        return redirect('/dashboard')
            ->with('success', 'Product created successfully.');
    }
}