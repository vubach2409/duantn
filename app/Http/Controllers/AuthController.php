<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view('auths.register');
    }

    public function handleRegister(Request $request)
    {
        // dd($request->all());
        // User::create($request->all());
        $validator = FacadesValidator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Thêm quy tắc cho file hình ảnh
        ]);

        // Xử lý tải lên file avatar
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public'); // Lưu vào thư mục avatars trong storage
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'avatar' => $avatarPath, // Lưu đường dẫn đến file avatar
            'role' => 1, // có thể thay đổi theo logic của bạn
        ]);
        return redirect('/login')->with('success', 'Tạo tài khoản thành công!');
    }

    public function showFormLogin()
    {
        return view('auths.login');
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
            return redirect('/admin-main/dashboard')->with('success', 'Đăng nhập thành công');
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
