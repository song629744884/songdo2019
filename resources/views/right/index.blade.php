@extends('layouts.app2')

@section('content')
<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">菜单管理</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form class="form-search" action="{{ route('right.index') }}">
            <div class="row-fluid" style="text-align: left;">
                <div class="pull-left span4 unstyled">
                    <p> 名称：<input class="input-medium" type="text" name="name"></p>
                </div>
            </div>
            <button type="submit" class="btn">查找</button>
            <a class="btn btn-primary" href="{{ url('right/create') }}">新增</a>
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
                <th>权限资源</th>
                <th>父节点</th>
                <th>名称</th>
                <th>菜单地址</th>
                <th>状态</th>
                <th>排序</th>
                <th colspan = 2>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $items)
            <tr>
                <td>{{ $items['type_str'] }}</td>
                <td>{{ $items['parent_name'] }}</td>
                <td>{{ $items['name'] }}</td>
                <td>{{ $items['url'] }}</td>
                <td>{{ $items['state_str'] }}</td>
                <td>{{ $items['idx'] }}</td>
                {{--<td>
                    <a href="{{ route('right.show',[$items['id']]) }}"><i class="icon-pencil"></i></a>
                    <a onclick="handleDelete('{{ $items["id"] }}')" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>--}}
                <td>
                    <a href="{{ route('right.show',[$items['id']]) }}" class="btn btn-primary">编辑</a>
                </td>
                <td>
                    <form action="{{ route('right.destroy', $items->id)}}" method="post" onsubmit="return check();">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" >删除</button>
                    </form>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>

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