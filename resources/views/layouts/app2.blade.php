<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <!-- jimmy -->
    <link rel="stylesheet" type="text/css" href="{{ asset('jimmy/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('jimmy/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('jimmy/css/bootstrap-responsive.min.css') }}">
    <script src="{{ asset('jimmy/js/jquery-1.8.1.min.js') }}"></script>
    <script src="{{ asset('jimmy/js/bootstrap.min.js') }}"></script>
    <!-- 日期控件 -->
    <script src="{{ asset('jimmy/js/calendar/WdatePicker.js') }}"></script>
</head>
<style>
    .content{
        min-height: 100%;
    }
</style>
<body>
    <div id="app">
        <!-- 上 -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <ul class="nav pull-right">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <li id="fat-menu" class="dropdown">
                            <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-user icon-white"></i> Song YT
                                <i class="icon-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                {{--<li><a tabindex="-1" href="{{route('login')}}">切换帐号</a></li>--}}
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="brand" href="index.html"><span class="first">向着未来的猫</span></a>
                    <ul class="nav">
                        <li class="active"><a href="{{ url('admin/index') }}">首页</a></li>
                        <li><a href="{{ url('admin/index') }}">个人中心</a></li>
                        <li><a href="{{ url('admin/index') }}">数据分析</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- 左 -->
        <div class="sidebar-nav">
            @foreach($menus as $menu)
            <a href="#{{ $menu->url }}" class="nav-header" data-toggle="collapse"><i class="icon-exclamation-sign"></i>{{ $menu->name }}</a>
            <ul id="{{ $menu->url }}" class="nav nav-list collapse in">
                @foreach($menu->items as $item)
                <li><a href="{{ url($item->url) }}">{{ $item->name }}</a></li>
                @endforeach
            </ul>
            @endforeach

        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
