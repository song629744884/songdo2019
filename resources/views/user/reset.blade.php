@extends('layouts.app2')
@section('content')
    <!-- 右 -->

    <div class="content">
        <div class="header">
            <h1 class="page-title">重置密码</h1>
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
            <form class="layui-form" action="{{ url('user/resetPassword') }}" method="POST">
                @csrf
               <div class="form-group">
                    <label>原始密码：</label>
                    <input type="password"  name="oldPassword"  class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>新密码：</label>
                    <input type="password"  name="password" class="input-xlarge">
                </div>
                <div class="form-group">
                    <label>确认密码：</label>
                    <input type="password"  name="rePassword" class="input-xlarge">
                </div>
                <button class="btn btn-primary" type="submit">确定更改</button>
                <a class="btn btn-default" onclick="location.href= '{{ url("admin/index") }}';">返回</a>
            </form>

        </div>

    </div>

@endsection
{{--@extends('layouts.admin')--}}
{{--@section('title', '重置密码')--}}

{{--
@section('content')
    <div class="weadmin-body">
        <form class="layui-form" action="{{ url('user/resetPassword') }}" method="POST">
            @csrf
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


            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    <span class="we-red">*</span>原始密码
                </label>
                <div class="layui-input-inline">
                    <input type="password"  name="oldPassword"  lay-verify="required|oldPassword"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    <span class="we-red">*</span>新密码
                </label>
                <div class="layui-input-inline">
                    <input type="password"  name="password"  lay-verify="required|password"  class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    <span class="we-red">*</span>确认密码
                </label>
                <div class="layui-input-inline">
                    <input type="password"  name="rePassword"  lay-verify="required|rePassword"  class="layui-input">
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
                password: function(value) {
                    if(value.length < 6) {
                        return '密码长度必须大于等于6';
                    }
                }
            });



        });
    </script>
@endsection--}}
