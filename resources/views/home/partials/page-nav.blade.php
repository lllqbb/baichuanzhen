
{{-- Navigation --}}
{{--<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">--}}
    {{--<div class="container">--}}
        {{-- Brand and toggle get grouped for better mobile display --}}
        {{--<a class="navbar-brand" href="/">{{ config('blog.name') }}</a>--}}
        {{--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--导航菜单--}}
            {{--<i class="fas fa-bars"></i>--}}
        {{--</button>--}}

        {{-- Collect the nav links, forms, and other content for toggling --}}
        {{--<div class="collapse navbar-collapse" id="navbarResponsive">--}}
            {{--<ul class="navbar-nav ml-auto">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="/">首页</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

<div class="container" >


<nav class="navbar navbar-static-top" id="mainNav">
    <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/bai.png') }}" alt="" width="30">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}" id="nav-color">主页</a></li>
                <li><a href="#" id="nav-color">PHP闲谈</a></li>
                <li><a href="#" id="nav-color">Linux</a></li>
                <li><a href="#" id="nav-color">前端</a></li>
                <li><a href="#" id="nav-color">Laravel</a></li>
                <li><a href="#" id="nav-color">ThinkPHP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ asset('home/login') }}" id="nav-color">登录</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
</div>