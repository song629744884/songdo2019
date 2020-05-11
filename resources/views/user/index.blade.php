@extends('layouts.app2')

@section('content')
<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">人员管理</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form class="form-search" action="{{ route('user.index') }}">
            <div class="row-fluid" style="text-align: left;">
                <div class="pull-left span4 unstyled">
                    <p> 名称：<input class="input-medium" type="text" name="name"></p>
                </div>
            </div>
            <button type="submit" class="btn">查找</button>
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
                <th>姓名</th>
                <th>邮箱</th>
                <th>手机号码</th>
                <th>地址</th>
                <th>状态</th>
                <th>角色</th>
                <th colspan = 2>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $items)
            <tr>
                <td>{{ $items->name }}</td>
                <td>{{ $items->email }}</td>
                <td>{{ $items->phone }}</td>
                <td>{{ $items->address }}</td>
                <td>{{ $items->state_str }}</td>
                <td>{{ $items->role->name }}</td>
                {{--<td>
                    <a href="{{ route('right.show',[$items['id']]) }}"><i class="icon-pencil"></i></a>
                    <a onclick="handleDelete('{{ $items["id"] }}')" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                </td>--}}
                <td>
                    <a href="{{ route('user.show',[$items->id]) }}" class="btn btn-primary">编辑</a>
                </td>
                <td>
                    <form action="{{ route('user.delete', $items->id)}}" method="post" onsubmit='onsubmit="return check()'>
                        @csrf
                        <button class="btn btn-danger" >删除</button>
                    </form>
                </td>
            </tr>
            @endforeach
            {{ $users->links() }}
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