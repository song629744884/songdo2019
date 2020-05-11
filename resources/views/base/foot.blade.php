<script type="text/javascript">
    $(function(){
        $(".layui-nav-tree li dl dd a").on("click",function(){
            var address =$(this).attr("data-url");
            console.log(address);
            $("iframe").attr("src",address);
        });
    });

    function loginout() {
        $.ajax({
            url:"{{ route('logout') }}",
            data: {'_token':'{{csrf_token()}}'},
            type : "POST",
            success : function(result) {
                window.location.href = "{{ route('login') }}";
            },
            error : function(e){

            }
        });
    }

</script>
</body>
<!--Tab菜单右键弹出菜单-->
<ul class="rightMenu" id="rightMenu">
    <li data-type="fresh">刷新</li>
    <li data-type="current">关闭当前</li>
    <li data-type="other">关闭其它</li>
    <li data-type="all">关闭所有</li>
</ul>

</html>