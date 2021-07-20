<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('addBlogPost');
    }

    public function create(Request $request)
    {
        $request = new Request;

        $request->
    }
}
