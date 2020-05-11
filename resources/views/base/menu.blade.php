<div class="left-nav">
    <div id="side-nav">
        <ul class="layui-nav layui-nav-tree" id="sideNav" lay-filter="sideNav">
            <li class="layui-nav-item layui-nav-itemed">
                <a>系统设置</a>
                <dl class="layui-nav-child">
                    <dd>
                        <a href="{{ url('user/person') }}" data-url="{{ url('user/person') }}"><label>个人资料</label></a>
                    </dd>
                    <dd>
                        <a href="{{ url('user/resetPassword') }}" data-url="{{ url('user/resetPassword') }}"><label>修改密码</label></a>
                    </dd>
                    <dd>
                        <a href="javascript:;" data-url="{{ url('resetPassword') }}"><label>角色管理</label></a>
                    </dd>
                    <dd>
                        <a href="javascript:;" data-url="{{ url('menuList') }}"><label>菜单管理</label></a>
                    </dd>
                    <dd>
                        <a href="javascript:;" data-url="{{ url('userList') }}"><label>人员信息管理</label></a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a>产品管理</a>
                <dl class="layui-nav-child">
                    <dd>
                        <a href="javascript:;" data-url="./pages/article/category.html"><label>产品列表</label></a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a>订单管理</a>
                <dl class="layui-nav-child">
                    <dd>
                        <a href="javascript:;" data-url="./pages/article/category-add.html"><label>订单列表</label></a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a>文章管理</a>
                <dl class="layui-nav-child">
                    <dd>
                        <a href="javascript:;" data-url="./pages/article/category-edit.html"><label>文章列表</label></a>
                    </dd>
                    <dd>
                        <a href="javascript:;" data-url="article/article-sorts.html"><label>文章栏目</label></a>
                    </dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a>相册管理</a>
                <dl class="layui-nav-child">
                    <dd>
                        <a href="javascript:;" data-url="album/album-manage.html"><label>相册列表</label></a>
                    </dd>
                    <dd>
                        <a href="javascript:;" data-url="album/album-sorts.html"><label>相册栏目</label></a>
                    </dd>
                </dl>
            </li>
        </ul>
    </div>
</div>