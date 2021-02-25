<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if($category){
            $posts = Post::where('category_id', $category->id)->paginate(9);

            return view('pages.articles', compact(['category', 'posts']));
        } else {
            return redirect('/');
        }
    }
}
