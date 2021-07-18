<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getAllUser()
    {
        $users = User::paginate(3);
        return view('admin.users.list', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user = User::where('id',$id)->first()->delete();

        return redirect()->route('user.index');
    }

    public function searchUser(Request $request)
    {
        $keyword = $request->input('search');
/*        $users = User::query()->where('name', 'LIKE', '%' . $keyword . '%')->get()->pagiate(2);*/
        $users = User::where('name','LIKE','%'.$keyword.'%')->paginate(2);
        return view('admin.users.list', compact('users'));
    }
}
