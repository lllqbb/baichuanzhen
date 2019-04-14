<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * index 首页
     * @param rticle $articleModel
     */
    public function index()
    {
        return view('home.index.index');
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
