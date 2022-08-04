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
        $product->productID = $request->id;
        $id = $request->id;
        $check = Product::where('productID', '=', $id)->first();

        if ($check) {
            return redirect()->back()->with('failed', 'Product already exists');
        } else {
            $product->productName = $request->name;
            $product->productPrice = $request->price;
            $product->productPrice = $request->price;
            $product->productDetails = $request->details;
            $product->productImage1 = $request->image1;
            $product->producerID = $request->producer;
            $product->save();

            return redirect()->back()->with('success', 'Product added successfully');
        }
    }

    public function edit($id)
    {
        $data = Product::where('productID', '=', $id)->first();
        return view('edit', compact('data'));
    }

    public function update(Request $request)
    {

        $id = $request->id;
        Product::where('productID', '=', $id)->update([
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

        Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }
}
