<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\phpstudy\WWW\php_web\public/../app/admin\view\index\reward_add.html";i:1561361009;s:60:"D:\phpstudy\WWW\php_web\app\admin\view\common\headerbar.html";i:1561083731;s:58:"D:\phpstudy\WWW\php_web\app\admin\view\common\sidebar.html";i:1561453611;}*/ ?>
<!doctype html>
<html lang="cn">

<head>
    <meta charset="utf-8" />
    <title>添加部门_Sumtudou</title>
    <link rel="stylesheet" href="/static/admin_style/css/layout.css" type="text/css" />
    <link rel="stylesheet" href="/static/admin_style/js/bootstrap/bootstrap.css" type="text/css" />
    <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
    <script src="/static/admin_style/js/jquery-1.7.2.min.js"></script>
    <!-- bootstrap -->
    <script type="text/javascript" src="/static/admin_style/js/bootstrap/bootstrap.min.js"></script>

    <script src="/static/admin_style/js/wisdom/wisdom.plug-in.js"></script>
    <script src="/static/admin_style/js/wisdom/system.js"></script>

    <!-- 表单验证，表单扩展 -->
    <script type="text/javascript" src="/static/admin_style/js/validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/static/admin_style/js/wisdom/wisdom.form.js"></script>

    <link href="/static/layui/layui/css/layui.css" rel="stylesheet" media="all">
    <script src="/static/layui/layui/layui.js" type="text/javascript"></script>

    <script src="/static/js/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="http://hnust.hunbys.com/plugins/layer/layer.js"></script>

</head>

<body>
    <header id="header">
    <hgroup>
        <h1 class="site_title"><img alt="logo" src="/static/admin_style/images/logo.png" class="logo" /></h1>
        <h2 class="section_title">人事管理系统</h2>
    </hgroup>
</header> <!-- end of header bar -->

<section id="secondary_bar">
    <div class="user">
        
        <a class="logout_user" href="#modelLogoutDialog" data-toggle="modal"  title="Logout">Logout</a>
    </div>
    <div class="breadcrumbs_container">
        <i class="icon-chevron-left" id="toggleMenu"></i>
        <article class="breadcrumbs"><a href="index.html">WebAdmin</a></article>
    </div>
</section><!-- end of secondary bar -->

    <div id="container" class="clearfix">

        <section id="main" class="column">
            <article class="module width_full">
                <header>
                    <h3>奖惩添加</h3>
                </header>
                <div id="main" style="margin-left:10%; margin-top:30px;">
                    <form class="layui-form" action="">
                        <div class="layui-form-item" style="width:40%">
                            <label class="layui-form-label">员工号：</label>
                            <div class="layui-input-block">
                                <input " class=" input-xlarge" type="text" id="pid" required lay-verify="required"
                                    autocomplete="off" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">缘由：</label>
                            <div class="layui-input-block">

                                <input type="text" class=" input-xlarge" id="reason">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">时间：</label>
                            <div class="layui-input-block">

                                <input type="text" class=" input-xlarge" id="time">
                            </div>
                        </div>



                        <div class="layui-form-item layui-form-text" style="width:60%">
                            <label class="layui-form-label">内容：</label>
                            <div class="layui-input-block">
                                <textarea name="desc" placeholder="请输入内容" class="layui-textarea" id="content" required
                                    lay-verify="required"></textarea>
                            </div>
                        </div>


                        <div class="layui-form-item" style="margin-left: 15%;margin-top:10px">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </article>
        </section>

    </div>

    <aside id="sidebar" class="column">
    <h3>部门管理</h3>
    <ul class="toggle">
        <li class="icn_new_article"><a href="/admin.php/Departadd">增加部门</a></li>
        <li class="icn_view_users"><a href= "/admin.php/Departopt">查询修改删除部门</a></li>
    </ul>
    <h3>员工管理</h3>
    <ul class="toggle">
        <li class="icn_view_users"><a href="/admin.php/Staffopt">查询修改开除员工</a></li>
    </ul>
    <h3>招聘管理</h3>
    <ul class="toggle">
        <li class="icn_new_article"><a href="/admin.php/Employ">录用管理</a></li>
    </ul>
    <h3>培训管理</h3>
    <ul class="toggle">
        <li class="icn_new_article"><a href="/admin.php/Trainadd">增加培训信息</a></li>
        <li class="icn_view_users"><a href="/admin.php/Trainopt">查询删除培训信息</a></li>
    </ul>
    <h3>奖惩管理</h3>
    <ul class="toggle">
        <li class="icn_new_article"><a href="/admin.php/Rewardadd">奖惩信息添加</a></li>
        <li class="icn_view_users"><a href="/admin.php/Rewardopt">查询删除信息</a></li>
    </ul>
    <h3>职位及薪资管理</h3>
    <ul class="toggle">
        <li class="icn_new_article"><a href="/admin.php/Jobmodify">职位及薪资变动</a></li>
        <li class="icn_view_users"><a href="/admin.php/Jobopt">查询变动历史</a></li>
    </ul>
    <h3>系统管理</h3>
    <ul class="toggle">
        <li class="icn_new_article"><a href="/admin.php/Adminadd">增加管理员</a></li>
        <li class="icn_view_users"><a href="/admin.php/Adminopt">查询修改删除管理员</a></li>
    </ul>
    
    <footer>
        <hr />
       <a href="https://sumtudou.cn" target="_blank"><p><strong>Design by Sumtudou&nbsp&nbsp&nbsp湘ICP备19007414号</strong></p></a> 
    </footer>
</aside><!-- end of sidebar -->


    <!-- 退出按钮被点击时。 -->
    <div id="modelLogoutDialog" class="modal hide fade" style="display: none; ">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>请确认</h3>
        </div>
        <div class="modal-body">
          <h4>确认退出</h4>
          <p>
                您确认要退出登录吗？
      </p>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-primary">确认退出</a>
          <a href="#" class="btn" data-dismiss="modal">不退出</a>
        </div>
      </div>


    <script>
        layui.use('form', function () {

            var form1 = layui.form;
            //监听提交
            form1.on('submit(formDemo)', function () {

                var formData = new FormData();
                formData.append("type", 11);
                formData.append("pid", $("#pid").val());
                formData.append("reason", $("#reason").val());
                formData.append("content", $("#content").val());
                formData.append("time", $("#time").val());

                $.ajax({
                    url: '/admin.php/Rewardadd',
                    type: 'POST',
                    data: formData,
                    //这两个设置项必填
                    contentType: false,
                    processData: false,
                    dataType: 'jsonp',
                    calback: "callback",
                    cache: false,
                    success: function (data) {

                        if (data['status'] == '200') {
                            layer.msg('添加成功!', {
                                    icon: 1,
                                    time: 1000
                                });
                                setTimeout(function () {}, 1000);
                        } else if(data['status'] == '201'){
                            layer.msg('时间有错误！', {
                                icon: 2,
                                time: 1000
                            });
                        }else{
                            layer.msg('员工号不存在！', {
                                icon: 2,
                                time: 1000
                            });
                        }
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert(XMLHttpRequest.status);
                        alert(XMLHttpRequest.readyState);
                        alert(textStatus);
                    }
                });

                return false;
            });
        });


        layui.use('laydate', function () {
            var laydate = layui.laydate;
            var laydate1 = layui.laydate;

            //执行一个laydate实例
            laydate.render({
                elem: '#time', //指定元素
                value: '2019-01-01'
            });
        });

    </script>
</body>

</html>