<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class IndexController extends Controller
{
    /**
     * index 首页
     * @param rticle $articleModel
     */
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));
        return view('home.index.index', compact('posts'));
    }


    public function showPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('home.index.article', ['post' => $post]);
    }

    /**
     *
     */
    public function login()
    {
        return view('home.index.login');
    }


    /**
     *处理登录
     */
    public function dologin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
//        dd([$username,$password]);
        echo '1234';
    }
}
