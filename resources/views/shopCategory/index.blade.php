@extends('layouts.app2')

@section('content')
<!-- 右 -->
<div class="content">
    <div class="header">
        <h1 class="page-title">店铺分类</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form class="form-search" action="{{ route('shopCategory.index') }}">

            <button type="submit" class="btn">刷新</button>
            <a class="btn btn-primary" href="{{ url('shopCategory/create') }}">新增</a>
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
                <th>名称</th>
                <th>创建时间</th>
                <th colspan = 2>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lists as $items)
            <tr>
                <td>{{ $items->name }}</td>
                <td>{{ $items->createTime }}</td>
                <td>
                    <a href="{{ route('shopCategory.show',[$items->id]) }}" class="btn btn-primary">编辑</a>
                </td>
                <td>
                    <form action="{{ route('shopCategory.destroy', $items->id)}}" method="post" onsubmit="return check();">
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