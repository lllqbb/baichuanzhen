<?php

namespace App\Http\Controllers\Home;

use App\Models\Tag;
use App\Services\PostService;
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
    public function index(Request $request)
    {
        $tag = $request->get('tag');
//        dd($tag);
        $postService = new PostService($tag);

        $data = $postService->lists();
//        dd($data);
        $layout = $tag ? Tag::layout($tag) : 'home.layouts.index';
//        dd($layout);
        return view($layout, $data);
    }


    public function showPost($slug, Request $request)
    {
        $post = Post::with('tags')->where('slug', $slug)->firstOrFail();
        $tag = $request->get('tag');
        if ($tag) {
            $tag = Tag::where('tag', $tag)->firstOrFail();
        }
        return view($post->layout, compact('post', 'tag'));
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
