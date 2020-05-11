@include('base.head')

<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
@include('base.menu')
<!-- <div class="x-slide_left"></div> -->
<!-- 左侧菜单结束 -->
<!-- 右侧主体开始 -->
<div class="page-content">
    <div class="layui-tab tab" lay-filter="wenav_tab" id="WeTabTip" lay-allowclose="true">
        <ul class="layui-tab-title" id="tabName">
            <li>@yield('title')</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                @yield('content')
                {{--<iframe src='./pages/welcome.html' frameborder="0" scrolling="yes" class="weIframe"></iframe>--}}
            </div>
        </div>

    </div>
</div>


<div class="page-content-bg"></div>
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">Copyright ©2018 WeAdmin v1.0 All Rights Reserved</div>
</div>
@yield('script')
<!-- 底部结束 -->
<script type="text/javascript">
    layui.config({
        base: '../../../weAdmin/static/js/'
        ,version: '101100'
    }).extend({ //设定模块别名
        admin: 'admin'
        ,menu: 'menu'
    });
    layui.use(['jquery', 'admin', 'menu'], function(){
        var $ = layui.jquery,
            admin = layui.admin,
            menu = layui.menu;

    });

</script>
@include('base.foot')
