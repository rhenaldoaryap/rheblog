<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $search = request()->query('search');
        if($search) {
            $posts = Post::where('title', 'LIKE', "%{$search}%")->paginate(5);
        } else {
            $posts = Post::latest()->orderbyUniqueViews()->paginate(5);
        }
        $postCount = Post::all()->count();
        $categoryCount = Category::all()->count();
        $tagCount = Tag::all()->count();
        return view('admin.dashboard.index', compact(['posts', 'postCount', 'categoryCount', 'tagCount']));
    }
}
