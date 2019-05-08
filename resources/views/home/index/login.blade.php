@extends('layouts.master')

@section('title','登录')

@section('my-css')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
@endsection

@section('content')
    <form class="form-signin" method="post" action="{{ url('home/login') }}">
       {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">请登录</h1>
        <label for="inputEmail" class="sr-only">用户名</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="请输入手机号或邮箱" required="" autofocus="" name="username">
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="请输入密码" required="" name="password">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> 记住我
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>

        <div style="width: 600px;">
            <div style="background: #ddd;
        margin-top: 4px;
        display: inline-block;
        width: 105px;
        height: 1px;
        _overflow: hidden;
        vertical-align: middle;">
            </div>
            <span style="display: inline-block;width: 85px;vertical-align: middle;">更多登录方式</span>
            <div style="background: #ddd;margin-top: 4px;display: inline-block;width: 105px;height: 1px;_overflow: hidden;vertical-align: middle;">
            </div>
        </div>
        <a href="">
            <img src="{{ asset('images/bt_blue_24X24.png') }}" alt="QQ登录">
        </a>

        <p class="mt-5 mb-3 text-muted">© 2018-2019</p>
    </form>
@endsection

@section('my-js')
@endsection