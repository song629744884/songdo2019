@extends('layouts.app2')
@section('content')
    <!-- 右 -->

    <div class="content">
        <div class="header">
            <h1 class="page-title">角色新增</h1>
        </div>

        <div class="well">
            <div class="alert alert-danger">
                <ul>
                    @if (is_object($errors))
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @else
                        <li>{{ $errors }}</li>
                    @endif
                </ul>
            </div>
            <!-- edit form -->
            <form class="layui-form" action="{{ route('role.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>名称：</label>
                    <input type="text"  name="name" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>说明：</label>
                    <input type="text"  name="memo" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="state"  value="1" checked> 正常
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="state"  value="2">禁用
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>排序：</label>
                    <input type="number"  name="idx" class="input-xlarge">
                </div>
                <button class="btn btn-primary" type="submit">提交</button>
                <a class="btn btn-default" href="{{ route('role.index') }}">返回</a>
            </form>

        </div>

    </div>

@endsection
