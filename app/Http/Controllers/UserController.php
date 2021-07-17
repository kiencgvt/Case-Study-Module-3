<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUser()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user = User::where('id',$id)->first()->delete();
        return redirect()->route('user.list');
    }

    public function searchUser(Request $request)
    {
        $keyword = $request->input('search');
        $users = User::query()->where('name', 'LIKE', '%' . $keyword . '%')->get();
        return view('admin.users.list', compact('users'));
    }
}
