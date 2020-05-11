@extends('layouts.app2')

@section('content')
<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">店铺</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form class="form-search" action="{{ route('shop.index') }}">
            <div class="row-fluid" style="text-align: left;">
                <div class="pull-left span4 unstyled">
                    <p> 名称：<input class="input-medium" type="text" name="name"></p>
                </div>
            </div>
            <button type="submit" class="btn">查找</button>
            <a class="btn btn-primary" href="{{ url('shop/create') }}">新增</a>
        </form>
    </div>
    <div class="well">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <!-- table -->
        <table class="table table-bordered table-hover table-condensed">
            <thead>
            <tr>
                <th>封面</th>
                <th>名称</th>
                <th>店主</th>
                <th>主题</th>
                <th>店铺分类</th>
                <th>店铺介绍</th>
                <th>创建时间</th>
                <th colspan = 2>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lists as $items)
            <tr>
                <td><img src="{{ asset($items->photo) }}" width="80" height="30"></td>
                <td>{{ $items->name }}</td>
                <td>{{ isset($items->user->name)?$items->user->name:'' }}</td>
                <td>{{ $items->theme }}</td>
                <td>{{ $items->shopCategory->name }}</td>
                <td>{{ $items->intro }}</td>
                <td>{{ $items->createTime }}</td>
                <td>
                    <a href="{{ route('shop.show',[$items->id]) }}" class="btn btn-primary">编辑</a>
                </td>
                <td>
                    <form action="{{ route('shop.destroy', $items->id)}}" method="post" onsubmit="return check();">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" >删除</button>
                    </form>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
        {{ $lists->links() }}
    </div>
</div>
    <script type="javascript">
        function check(){
            var cf = confirm('确定删除？');
            console.log(123);
            if(cf){
                return true;
            }else{
                return false;
            }
        }
    </script>
@endsection