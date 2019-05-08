@extends('layouts.master')

@section('title','白传镇的个人博客')

@section('content')
    <div class="row">
        <!-- 左侧列表 -->
        <div class="col-xs-12 col-md-12 col-lg-8">
            <!-- 详情 -->


        </div>

        <div class="col-lg-4 hidden-xs hidden-sm hidden-md" style="background: white;">
            <div class="" style="text-align: center;margin-top: 5px;margin-bottom: 5px;">
                <form class="form-inline" role="form" action="" method="post">
                    <input type="hidden" name="_token" value="wzF2ExXLmot8PA7uPaQFajONnsPh2KLdnwXU8ov6">
                    <input class="form-control" type="text" name="" placeholder="搜索" style="width: 250px;">
                    <input class="btn btn-primary" type="submit" value="全站搜索">
                </form>
            </div>
        </div>
    </div>


@endsection

@section('my-js')
@endsection