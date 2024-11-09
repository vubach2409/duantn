<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $articles = Article::get();
        $categories = Category::get();
        return view('pages.guest.home', compact('articles', 'categories'));
    }

    public function detail($id){
        $article = Article::find($id);
        $idRoom = $article->room->id;
        $room = Room::find($idRoom);
        return view('pages.guest.detail', compact('article', 'room'));
    }

    

    
}
