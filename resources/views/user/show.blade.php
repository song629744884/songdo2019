@extends('layouts.app2')
@section('content')
    <!-- 右 -->

    <div class="content">
        <div class="header">
            <h1 class="page-title">人员编辑</h1>
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
            <form class="layui-form" action="{{ route('user.update',[$data->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label>姓名：</label>
                    <input type="text"  name="name" value="{{ $data->name }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>邮箱：</label>
                    <input type="text"  name="email" value="{{ $data->email }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>手机号码：</label>
                    <input type="text"  name="phone" value="{{ $data->phone }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>地址：</label>
                    <input type="text"  name="address" value="{{ $data->address }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <div class="radio">
                        <label>
                                <input type="radio" name="state"  value="1" @if($data->state==1) checked @endif> 正常
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                                <input type="radio" name="state"  value="2" @if($data->state==2) checked @endif>禁用
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>角色：</label>
                    <select name="role_id"  class="input-xlarge">
                       @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if($role->id==$data->role_id) selected @endif>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">提交</button>
                <a class="btn btn-default" href="{{ route('user.index') }}">返回</a>
            </form>

        </div>

    </div>

@endsection
