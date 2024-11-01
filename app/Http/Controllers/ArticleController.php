<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Room;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('rooms'));
    }
    public function create()
    {
        $rooms = Room::all();
        $categories = Category::all();
        return view('admin.pages.article.add', compact('rooms','categories'));
    }
    public function store(Request $request)
    {
        try {
            // Xác thực dữ liệu đầu vào
            $request->validate([
                'title' => 'required|string|max:255',
                'category_id' => 'required', // Cho phép null
                'room_id' => 'required|exists:room,id',
                'description' => 'required|string',
                
            ]);

            // Kiểm tra category_id, nếu không có giá trị thì gán 0
            
            // Tạo mới phòng
            Article::create([
                'title' => $request->title,
                'category_id' => $request->category_id, // Sử dụng giá trị categoryId
                'room_id' => $request->room_id,
                'description' => $request->description,
            
            ]);
            // Chuyển hướng với thông báo thành công
            return redirect()->route('article.list')->with('success', 'Thêm phòng thành công!');
        } catch (\Exception $e) {
            // Xử lý lỗi và chuyển hướng với thông báo lỗi
            return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()])->withInput();
        }
    }
   
}