<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producers;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller

{
    public function index()
    {
        $data = Product::get();
        return view('management.list', compact('data'));
    }

    public function add()
    {
        $producers = Producers::get();
        $categories = Categories::get();
        return view('management.add', [
            'producers' => $producers,
            'categories' => $categories
        ]);
    }

    public function save(Request $request)
    {

        $product = new Product();
                // get request from view add_product

        $product->product_id = $request->id;
        $id = $request->id;
        $check = Product::where('product_id', '=', $id)->first();

        if ($check) {
            return redirect()->back()->with('failed', 'Product already exists');
        } else {
            $product->product_title = $request->name;
            $product->product_cat = $request->cat;
            $product->product_price = $request->price;
            $product->product_desc = $request->details;
            $product->product_image = $request->image1;
            $product->product_keywords = $request->keyword;
            $product->producer_id = $request->producer;
            $product->save();

            return redirect()->back()->with('success', 'Product added successfully');
        }
    }

    public function edit($id)
    {
        $data = Product::where('product_id', '=', $id)->first();
        $producers = Producers::get();
        $categories = Categories::get();
        return view('management.edit', [
            'data' => $data,
            'producers' => $producers,
            'categories' => $categories
        ]);
    }

    public function update(Request $request)
    {

        $id = $request->id;
        Product::where('product_id', '=', $id)->update([
            'product_title' => $request->name,
            'product_price' => $request->price,
            'product_desc' => $request->details,
            'product_image' => $request->image1,
            'producer_id' => $request->producer,
            'product_cat' => $request->cat,
            'product_keywords' => $request->keyword
        ]);
        return redirect()->back()->with('success', 'Product updated successfully');
    }

    public function delete($id)
    {

        Product::where('product_id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }



    public function loadProduct()
    {
        $data = Product::get();
        return view('index', [
            'data' => $data
        ]);
    }


    public function view_product($id)
    {
        $data = Product::where('product_id', '=', $id)->first();

        return view('home.viewproduct.pdp', compact('data'));
    }
}
