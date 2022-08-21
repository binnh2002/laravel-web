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


    public function edit_admin_profile($id)
    {
        $data = User::where('id', '=', $id)->get();
        $role = User::get();

        return view('management.edit_admin_profile', [
            'data' => $data,
            'role' => $role
        ]);
    }

    public function update_admin_profile(Request $request)
    {
        $id = $request->id;
        User::where('id', '=', $id)->update([
            'name' => $request->name,
            'role_as' => $request->role
        ]);

        return redirect()->back()->with('success', 'information updated successfully');
    }
    public function edit_user_profile($id)
    {
        $data = User::where('id', '=', $id)->get();

        return view('Users.Customers.edit_profile', [
            'data' => $data,
        ]);
    }
    public function update_user_profile(Request $request)
    {
        $id = $request->id;
        User::where('id', '=', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'information updated successfully');
    }
}
