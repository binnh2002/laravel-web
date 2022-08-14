<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::paginate(15);
        return view('list', [
            'data' => $data,
            'data' => DB::table('products')->paginate(15)
        ]);
    }

    public function add()
    {

        return view('add');
    }

    public function save(Request $request)
    {

        $product = new Product();
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
            $product->product_image = $request->image;
            $product->product_keyword = $request->keyword;
            $product->producer_id = $request->producer;
            $product->save();

            return redirect()->back()->with('success', 'Product added successfully');
        }
    }

    public function edit($id)
    {
        $data = Product::where('product_id', '=', $id)->first();
        return view('edit', compact('data'));
    }

    public function update(Request $request)
    {

        $id = $request->id;
        Product::where('product_id', '=', $id)->update([
            'productName' => $request->name,
            'productPrice' => $request->price,
            'productDetails' => $request->details,
            'productImage1' => $request->image1,
            'producerID' => $request->producer,
        ]);
        return redirect()->back()->with('success', 'Product updated successfully');
    }

    public function delete($id)
    {

        Product::where('product_id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }
}
