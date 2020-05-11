@extends('layouts.app2')
@section('content')
    <!-- 右 -->

    <div class="content">
        <div class="header">
            <h1 class="page-title">商品编辑</h1>
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
            <form class="layui-form" action="{{ route('goods.update',[$data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label>名称：</label>
                    <input type="text"  name="name" value="{{ $data->name }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <input type="number"  name="price" value="{{ $data->price }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>原价：</label>
                    <input type="number"  name="cost_price" value="{{ $data->cost_price }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>库存：</label>
                    <input type="number"  name="number" value="{{ $data->number }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>分类：</label>
                    <select name="goods_category_id"  class="input-xlarge">
                        @foreach($goodsCategoryArr as $category)
                            <option value="{{ $category->id }}" @if($category->id == $data->goods_category_id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>商铺：</label>
                    <select name="shop_id"  class="input-xlarge">
                        @foreach($shopArr as $shop)
                            <option value="{{ $shop->id }}" @if($shop->id == $data->shop_id) selected @endif>{{ $shop->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>图片：</label>
                    <input type="file"  name="file"  class="input-xlarge">
                </div>

                <div class="form-group">
                    <label>介绍：</label>
                    <textarea   name="intro" class="input-xlarge">{{ $data->intro }}</textarea>
                </div>
                <button class="btn btn-primary" type="submit">提交</button>
                <a class="btn btn-default" href="{{ route('goods.index') }}">返回</a>
            </form>

        </div>

    </div>

@endsection

