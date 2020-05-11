@extends('layouts.app2')
@section('content')
    <!-- 右 -->

    <div class="content">
        <div class="header">
            <h1 class="page-title">个人资料</h1>
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
            <form id="tab" role="form" action="{{ url('user/personSave') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}"/>
                <div class="form-group">
                    <label>登录名：</label>
                    <input type="text" name="name" value="{{ $data->name }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>手机：</label>
                    <input type="text" name="phone" value="{{ $data->phone }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>邮箱：</label>
                    <input type="text" name="email" value="{{ $data->email }}" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>地址：</label>
                    <input type="text" name="address" value="{{ $data->address }}" class="input-xlarge">
                </div>
                <button class="btn btn-primary" type="submit">确定</button>
                <button class="btn btn-default" onclick="history.go(-1);">返回</button>
            </form>

        </div>

    </div>

@endsection
{{--
@section('content')
    <div class="weadmin-body">
        <form class="layui-form" action="{{ url('user/personSave') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}"/>
            <div class="layui-form-item">
                <label for="L_username" class="layui-form-label">
                    <span class="we-red">*</span>登录名
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" name="name" value="{{ $data->name }}" lay-verify="required|name" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    请设置至少5个字符，将会成为您唯一的登录名
                </div>
            </div>


            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    <span class="we-red">*</span>手机
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_phone" name="phone" value="{{ $data->phone }}"  lay-verify="required|phone" autocomplete="" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    <span class="we-red">*</span>邮箱
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_email" name="email" value="{{ $data->email }}" lay-verify="email" autocomplete="off" class="layui-input">
                </div>

            </div>
            <div class="layui-form-item">
                <label for="L_address" class="layui-form-label">
                    <span class="we-red"></span>地址
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_address" name="address" value="{{ $data->address }}" autocomplete="off" class="layui-input">
                </div>

            </div>

            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label">
                </label>
                <button class="layui-btn" lay-filter="add" lay-submit="" type="submit">确定</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
//        layui.extend({
//            admin: '../../../weAdmin/static/js/'
//        });
        layui.use(['form', 'jquery', 'admin','layer'], function() {
            var form = layui.form,
                $ = layui.jquery,
                admin = layui.admin,
                layer = layui.layer;

            //自定义验证规则
            form.verify({
                phone: function(value) {
                    if(value.length != 11) {
                        return '手机格式不对';
                    }
                }
            });



        });
    </script>

@endsection --}}