<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function customer()
    {
        $data = User::where('role_as', '=', 0)->get();

        return view('Users.Customers.list', [
            'data' => $data,
        ]);
    }

    public function admin()
    {
        $data = User::where('role_as', '=', 1)->get();

        return view('Users.Admin.list', [
            'data' => $data,
        ]);
    }

    public function delete($id)
    {

        User::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
