<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        return view('pages.about');
    }

    public function toc()
    {
        return view('pages.terms');
    }

    public function policy()
    {
        return view('pages.policy');
    }

    public function kontak()
    {
        return view('pages.contact');
    }
}
