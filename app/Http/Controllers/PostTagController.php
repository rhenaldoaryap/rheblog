<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    public function index($slug)
    {
        $tag = Tag::where('slug', $slug)->first();

        if($tag){
            $posts = $tag->posts()->orderBy('created_at', 'DESC')->get();

            return view('pages.articles', compact('tag', 'posts'));
        } else {
            return redirect('/');
        }
    }
}
