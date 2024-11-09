<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view('admin.auths.register');
    }

    public function handleRegister(Request $request)
    {
        // dd($request->all());
        User::create($request->all());
        return redirect('/admin/login')->with('success', 'Tạo tài khoản thành công!');
    }

    public function showFormLogin()
    {
        return view('admin.auths.login');
    }

    public function handleLogin()
    {
        // dd(request()->all());
        $credentials = request()->except('_token');

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            /**
             * @var User $user
             */
            Auth::user();
            return redirect('/admin/dashboard')->with('success', 'Đăng nhập thành công');
        }

        return back()->withErrors([
            'name' => 'Thông tin không chính xác',
            'password' => 'Thông tin không chính xác',
        ])->onlyInput('name');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/admin/welcome')->with('success', 'Đã đăng xuất!');
    }
}