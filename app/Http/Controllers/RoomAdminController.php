<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Room;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomAdminController extends Controller
{

    public function index()
    {
        $rooms = Room::all();

        return view('admin-main.pages.room.index', compact('rooms'));
    }

    public function create()
    {
        $categories = Category::all(); // Lấy danh sách danh mục
        $services = Service::all(); // Lấy danh sách dịch vụ
        $landlords = User::where('role', 1)->get();
        return view('admin-main.pages.room.add', compact('categories', 'services', 'landlords'));
    }

    public function store(Request $request)
    {
        try {
            // Xác thực dữ liệu đầu vào
            $request->validate([
                'name' => 'required|string|max:255',
                'category_id' => 'nullable|exists:categories,id', // Cho phép null
                'service_id' => 'required|exists:services,id',
                'user_id' => 'required|exists:services,id',
                'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
                'description' => 'required|string',
                'address' => 'required|string',
                'price' => 'required|numeric',
            ]);

            // Kiểm tra category_id, nếu không có giá trị thì gán 0
            $categoryId = $request->category_id ?? 0;

            // Xử lý upload hình ảnh
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('rooms', 'public'); // Lưu vào storage/app/public/rooms
            } else {
                return redirect()->back()->withErrors(['image' => 'Hình ảnh là bắt buộc.']);
            }

            // Tạo mới phòng
            Room::create([
                'name' => $request->name,
                'category_id' => $categoryId, // Sử dụng giá trị categoryId
                'service_id' => $request->service_id,
                'user_id' => $request->user_id,
                'image' => $imagePath,
                'address' => $request->address,
                'description' => $request->description,
                'price' => $request->price,
            ]);

            // Chuyển hướng với thông báo thành công
            return redirect()->route('admin.room.list')->with('success', 'Thêm phòng thành công!');
        } catch (\Exception $e) {
            // Xử lý lỗi và chuyển hướng với thông báo lỗi
            return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()])->withInput();
        }
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $categories = Category::all(); // Lấy danh sách danh mục
        $services = Service::all(); // Lấy danh sách dịch vụ
        return view('admin-main.pages.room.edit', compact('room', 'categories', 'services'));
    }

    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'service_id' => 'required|exists:services,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string',
            'address' => 'required|string|max:255', // Thêm xác thực cho trường address
            'price' => 'required|numeric',
        ]);

        // Kiểm tra category_id, nếu không có giá trị thì gán 0
        $categoryId = $request->category_id ?? 0;

        // Tìm phòng
        $room = Room::findOrFail($id);

        // Xử lý upload hình ảnh
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('rooms', 'public');
            $room->image = $imagePath; // Cập nhật đường dẫn hình ảnh mới
        }

        // Cập nhật thông tin phòng
        $room->update([
            'name' => $request->name,
            'category_id' => $categoryId,
            'service_id' => $request->service_id,
            'description' => $request->description,
            'address' => $request->address, // Cập nhật địa chỉ
            'price' => $request->price,
            'status' => $request->status ?? true, // Cập nhật trạng thái
        ]);

        return redirect()->route('admin.room.list')->with('success', 'Cập nhật phòng thành công!');
    }

    public function destroy($id)
    {
        try {
            $room = Room::findOrFail($id); // Tìm phòng theo ID

            // Xóa phòng
            $room->delete();

            // Chuyển hướng với thông báo thành công
            return redirect()->route('admin.room.list')->with('success', 'Xóa phòng thành công!');
        } catch (\Exception $e) {
            // Chuyển hướng với thông báo lỗi
            return redirect()->route('admin.room.list')->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
}
