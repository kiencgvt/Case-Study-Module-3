<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class ProfileController extends Controller
{
    public function index()
    {
        return view('front-end.profile.profile');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        session()->flash('update-success', 'Cập nhật thông tin cá nhân thành công');
        return redirect()->route('profile.index');
    }

    public function destroy($id)
    {
        //
    }

    public function showViewChangePassword()
    {
        return view('front-end.profile.change-password');
    }

    public function changePassword(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            if ($request->newPassword == $request->confirmPassword) {
                $user = User::findOrFail(\auth()->user()->id);
                $user->password = Hash::make($request->newPassword);
                $user->save();
                session()->flash('success-change', 'Đổi mật khẩu thành công');
                return redirect()->route('profile.index');
            }
            else {
                session()->flash('not-match', 'Mật khẩu mới và xác nhận mật khẩu mới không trùng nhau');
                return back();
            }
        }
        else {
            session()->flash('wrong-password', 'Mật khẩu hiện tại sai');
            return back();
        }
    }
}
