<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producers;


class ProducerController extends Controller
{
    // lay danh sach producer tu database
    public function get_producers()
    {
        $data = Producers::get(); // lay du lieu producer tu database
        return view('management.list_producers', compact('data'));
    }

    // add new producer
    public function add()
    {
        return view('management.add_producer');
    }                            

    // khi click add, lay du lieu tu add.blade.php va luu vao database
    public function save(Request $request)
    {
        $producer = new Producers();

        // get request from view add_producer

        $producer->producer_id = $request->id;
        //check exists producer in database
        $id = $request->id;
        $check = Producers::where('producer_id', '=', $id)->first(); // lay producer_id dau tien
        if ($check) {
            return redirect()->back()->with('failed', 'Producer already exists');
        } else {
            $producer->producer_id = $request->id;
            $producer->producer_name = $request->name;
            $producer->producer_image = $request->image;
            $producer->save();

            return redirect()->back()->with('success', 'Producer added successfully');
        }
    }
    public function edit($id)
    {

        $data = Producers::where('producer_id', '=', $id)->first();
        return view('management.edit_producer', [
            'data' => $data,
        ]);
    }

    public function update(Request $request)
    {

        $id = $request->id;
        Producers::where('producer_id', '=', $id)->update([
            'producer_name' => $request->name,
            'producer_image' => $request->image
        ]);
        return redirect()->back()->with('success', 'Producer updated successfully');
    }

    public function delete($id)
    {

        Producers::where('producer_id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Producer deleted successfully');
    }
    
}
