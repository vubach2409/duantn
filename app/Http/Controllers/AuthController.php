<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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


    public function showProfileAdmin()
    {
        return view('auths.profile-admin');
    }


    public function edit()
    {
        $user = Auth::user();
        return view('auths.profile-admin-edit', compact('user'));
    }

    // Xử lý cập nhật thông tin
    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Validate dữ liệu
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id, // Đảm bảo không trùng với email của người dùng hiện tại
        'phone' => 'required|unique:users,phone,' . $user->id, // Đảm bảo không trùng với số điện thoại của người dùng hiện tại
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Tùy chọn upload ảnh
    ]);

    // Cập nhật thông tin
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;

    // Xử lý avatar nếu có file tải lên
    if ($request->hasFile('avatar')) {
        // Xóa avatar cũ nếu có
        if ($user->avatar) {
            Storage::delete('public/' . $user->avatar);
        }

        // Lưu avatar mới
        $path = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $path;
    }

    // Lưu các thay đổi vào cơ sở dữ liệu
    $user->save();

    return redirect()->route('admin.profile')->with('success', 'Cập nhật thông tin thành công.');
}

}
