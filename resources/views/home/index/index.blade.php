@extends('layouts.master')

@section('title','白传镇的个人博客')

@section('content')
    <div class="row">
        {{--左侧列表--}}
        <div class="col-xs-12 col-md-12 col-lg-8">
            {{--文章列表--}}

            @foreach ($posts as $post)
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="{{ route('blog.detail', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                            <em>({{ $post->published_at }})</em>
                        </h3>
                    </div>
                    <div class="panel-body" style="height: 120px;">
                        <div>
                            <a href="">
                                <img src="" alt="第一篇文章的图片">
                            </a>

                        </div>
                        <div>
                            {{ str_limit($post->content) }}
                            <br>
                            <a href="{{ route('blog.detail', ['slug' => $post->slug]) }}">
                                <span style="float: right;background: #34afd8;color: #fff;border-radius: 10px;width: 80px;text-align: center;">阅读全文</span>
                            </a>

                        </div>

                    </div>
                </div>
            @endforeach
            <div style="text-align: center;">
                {{ $posts->render() }}
            </div>

        </div>

        <div class="col-lg-4 hidden-xs hidden-sm hidden-md" style="background: white;">
            <div class="" style="text-align: center;margin-top: 5px;margin-bottom: 5px;">
                <form class="form-inline" role="form" action="" method="post">
                    <input type="hidden" name="_token" value="wzF2ExXLmot8PA7uPaQFajONnsPh2KLdnwXU8ov6">
                    <input class="form-control" type="text" name="" placeholder="搜索" style="width: 250px;">
                    <input class="btn btn-primary" type="submit" value="全站搜索">
                </form>
            </div>
            {{--<br>--}}
            {{--<div class="" style="text-align: center;">--}}
                {{--<form class="form-inline" role="form" action="" method="post">--}}
                    {{--<input type="hidden" name="_token" value="wzF2ExXLmot8PA7uPaQFajONnsPh2KLdnwXU8ov6">--}}
                    {{--<input class="form-control" type="text" name="" placeholder="搜索" style="width: 250px;">--}}
                    {{--<input class="btn btn-primary" type="submit" value="全站搜索">--}}
                {{--</form>--}}
            {{--</div>--}}

        </div>
    </div>


@endsection

@section('my-js')
@endsection