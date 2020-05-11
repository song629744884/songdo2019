<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>songdo商城后台 V1.0</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('weAdmin/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('weAdmin/static/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('weAdmin/static/css/weadmin.css') }}">
    <script type="text/javascript" src="{{ asset('weAdmin/lib/layui/layui.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('weAdmin/static/js/jquery-3.4.1.min.js') }}" charset="utf-8"></script>

</head>
<style>
    .left-nav {
        background-color: #393D49;
    }
    .layui-nav .layui-nav-child a {
        color: #c3c1c1;
    }
    .layui-nav-tree {
        width: 220px;
    }
    .container{
        background-color: #999;
    }
    .footer{
        background-color: #999;
    }
</style>
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo">
        <a href="{{ url('/index') }}">SongDo2020 v1.0</a>
    </div>
    <div class="left_open">
        <!-- <i title="展开左侧栏" class="iconfont">&#xe699;</i> -->
        <i title="展开左侧栏" class="layui-icon layui-icon-shrink-right"></i>

    </div>
    <ul class="layui-nav left fast-add" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">+新增</a>
            <dl class="layui-nav-child">
                <!-- 二级菜单 -->
                <dd>
                    <a onclick="WeAdminShow('资讯','https://www.baidu.com/')"><i class="layui-icon layui-icon-list"></i>资讯</a>
                </dd>
                <dd>
                    <a onclick="WeAdminShow('图片','http://www.baidu.com')"><i class="layui-icon layui-icon-picture-fine"></i>图片</a>
                </dd>
                <dd>
                    <a onclick="WeAdminShow('用户','https://www.jiuwei.com/')"><i class="layui-icon layui-icon-user"></i>用户</a>
                </dd>
            </dl>
        </li>
    </ul>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">Admin</a>
            <dl class="layui-nav-child">
                <!-- 二级菜单 -->
                <dd>
                    <a onclick="WeAdminShow('个人信息','http://www.baidu.com')">个人信息</a>
                </dd>
                <dd>
                    <a href="{{route('login')}}">切换帐号</a>
                </dd>
                <dd>
                    <a class="loginout" onclick="loginout()">退出</a>
                </dd>
            </dl>
        </li>
        <li class="layui-nav-item to-index">
            <a href="{{url('index')}}">前台首页</a>
        </li>
    </ul>

</div>
<!-- 顶部结束 -->