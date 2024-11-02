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
        return view('admin.pages.article.index',compact('articles'));
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
            'category_id' => 'nullable|exists:categories,id', // Cho phép null và kiểm tra tồn tại
            'room_id' => 'required|exists:rooms,id',
            'description' => 'required|string',
        ]);

        // Kiểm tra category_id, nếu không có giá trị thì gán 0
        $category_id = $request->category_id ?? 0;

        // Tạo mới bài viết
        Article::create([
            'title' => $request->title,
            'category_id' => $category_id,
            'room_id' => $request->room_id,
            'description' => $request->description,
        ]);

        // Chuyển hướng với thông báo thành công
        return redirect()->route('article.list')->with('success', 'Thêm bài viết thành công!');
    } catch (\Exception $e) {
        // Xử lý lỗi và chuyển hướng với thông báo lỗi
        return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()])->withInput();
    }
    
}
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all(); // Lấy danh sách danh mục
        $rooms = Room::all(); // Lấy danh sách dịch vụ
        return view('admin.pages.article.edit', compact('article', 'categories', 'rooms'));
    }
    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id', // Cho phép null và kiểm tra tồn tại
            'room_id' => 'required|exists:rooms,id',
            'description' => 'required|string',
        ]);

  

        // Tìm phòng
        $article = Article::findOrFail($id);

        $category_id = $request->category_id ?? 0;

        // Tạo mới bài viết
        $article->update([
            'title' => $request->title,
            'category_id' => $category_id,
            'room_id' => $request->room_id,
            'description' => $request->description,
        ]);

        return redirect()->route('article.list')->with('success', 'Cập nhật viết thành công!');
    }

    public function destroy($id)
    {
        try {
            $article = Article::findOrFail($id); // Tìm phòng theo ID

            // Xóa phòng
            $article->delete();

            // Chuyển hướng với thông báo thành công
            return redirect()->route('article.list')->with('success', 'Xóa phòng thành công!');
        } catch (\Exception $e) {
            // Chuyển hướng với thông báo lỗi
            return redirect()->route('article.list')->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
}