<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category', 'user')->inRandomOrder()->limit(3)->get();
        $featuredPost = Post::with('category')->inRandomOrder()->limit(1)->get();
        $lastestPost = Post::with('category')->orderBy('created_at', 'DESC')->paginate(6);
        $popularPost = Post::orderByViews()->take(3)->get();

        if($posts) {
            return view('pages.home', compact(['posts', 'featuredPost', 'lastestPost', 'popularPost']));
        } else {
            return redirect('/');
        }
    }
}
