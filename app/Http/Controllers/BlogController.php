<?php

namespace App\Http\Controllers;

use App\Models\BlogPosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function index()
    {
        //Cache database entries
        $blogposts = cache()->remember('blog-index', 60 * 60 * 4, function () {
            return BlogPosts::all();
        });
        // BlogPosts::all();
        return view('blog/index', ['blogposts' => $blogposts]);
    }

    public function create(BlogPosts $blogpost)
    {
        $rules = array(
            'title',
            'url'
        );

        request()->validate($rules);
        $blogpost = new BlogPosts;

        $blogpost->title = request()->title;
        $blogpost->url = request()->url;
        $blogpost->body = request()->body;

        $blogpost->save();

        return Redirect::to('blog');
    }

    public function edit(BlogPosts $blogpost)
    {
        return view('blog/edit', ['blogpost' => $blogpost]);
    }

    public function update(BlogPosts $blogpost)
    {
        $rules = array(
            'title',
            'url'
        );

        request()->validate($rules);
        if ($blogpost->title != request()->title) {
            $blogpost->title = request()->title;
        }

        if ($blogpost->url != request()->url) {
            $blogpost->url = request()->url;
        }

        if ($blogpost->body != request()->body) {
            $blogpost->body = request()->body;
        }
    }

    public function destroy(BlogPosts $blogpost)
    {
        $blogpost->delete();

        Session::flash('message', 'Post deleted successfully');
        return Redirect::to('blog');
    }
}
