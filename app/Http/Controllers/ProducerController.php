<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producers;


class ProducerController extends Controller
{
    public function getProducers()
    {
        $data = Producers::get();
        return view('listproducers', [
            'data' => $data,
        ]);
    }


    public function add()
    {
        return view('addProducer');
    }

    public function save(Request $request)
    {
        $producer = new Producers();

        // get request producer from addProducer

        $producer->producer_id = $request->id;
        //check exists producer in database
        $id = $request->id;
        $check = Producers::where('producer_id', '=', $id)->first();
        if ($check) {
            return redirect()->back()->with('failed', 'Producer already exists');
        } else {
            $producer->producer_id = $request->id;
            $producer->producer_name = $request->name;
            $producer->save();

            return redirect()->back()->with('success', 'Producer added successfully');
        }
    }
    public function edit($id)
    {
        $data = Product::where('producer_id', '=', $id)->first();
        return view('editproducer');
    }
}
