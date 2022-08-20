<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function get_category()
    {
        $data = Categories::get();
        return view('management.list_category', [
            'data' => $data,
        ]);
    }


    public function add()
    {
        return view('management.add_category');
    }

    public function save(Request $request)
    {
        $categories = new Categories();

        // get request producer from addProducer

        $categories->cat_id = $request->id;
        //check exists producer in database
        $id = $request->id;
        $check = Categories::where('cat_id', '=', $id)->first();
        if ($check) {
            return redirect()->back()->with('failed', 'Category already exists');
        } else {
            $categories->cat_id = $request->id;
            $categories->cat_title = $request->name;
            $categories->save();

            return redirect()->back()->with('success', 'Category added successfully');
        }
    }
    public function edit($id)
    {

        $data = Categories::where('cat_id', '=', $id)->first();
        return view('management.edit_category', [
            'data' => $data,
        ]);
    }

    public function update(Request $request)
    {

        $id = $request->id;
        Categories::where('cat_id', '=', $id)->update([
            'cat_title' => $request->name,
        ]);
        return redirect()->back()->with('success', 'Category updated successfully');
    }

    public function delete($id)
    {

        Categories::where('cat_id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}
