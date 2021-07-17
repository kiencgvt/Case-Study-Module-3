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
        $user->delete();
    }

    public function searchUser(\Illuminate\Support\Facades\Request $request)
    {
        $keyword = $request->input('search');
        $users = User::where('name', 'LIKE', '%' . $keyword . '%');
        return view('admin.users.list', compact('users'));
    }
}
