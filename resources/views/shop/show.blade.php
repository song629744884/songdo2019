@extends('layouts.app2')
@section('content')
    <!-- 右 -->

    <div class="content">
        <div class="header">
            <h1 class="page-title">店铺编辑</h1>
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
            <form class="layui-form" action="{{ route('shop.update',[$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label>名称：</label>
                    <input type="text"  name="name" value="{{ $data->name }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <input type="text"  name="theme" value="{{ $data->theme }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>分类：</label>
                    <select name="shop_category_id"  class="input-xlarge">
                        @foreach($categorys as $category)
                            <option value="{{ $category->id }}" @if($category->id == $data->shop_category_id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>店主：</label>
                    <select name="userId"  class="input-xlarge">
                        @foreach($userArr as $user)
                            <option value="{{ $user->id }}" @if($user->id == $data->userId) selected @endif>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>封面：</label>
                    <input type="file"  name="file"  class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>介绍：</label>
                    <textarea   name="intro" class="input-xlarge">{{ $data->intro }}</textarea>
                </div>
                <button class="btn btn-primary" type="submit">提交</button>
                <a class="btn btn-default" href="{{ route('shop.index') }}">返回</a>
            </form>

        </div>

    </div>

@endsection

