<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\phpstudy\WWW\php_web\public/../app/admin\view\index\job_opt.html";i:1561448156;s:60:"D:\phpstudy\WWW\php_web\app\admin\view\common\headerbar.html";i:1561083731;s:58:"D:\phpstudy\WWW\php_web\app\admin\view\common\sidebar.html";i:1561453611;}*/ ?>
<!doctype html>
<html lang="cn">

<head>
    <meta charset="utf-8" />
    <title>变动查询_Sumtudou</title>
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
                    <h3>变动信息查询</h3>
                    <a href="javascript:void(0)" class="headerCloseButton"><span
                            class="ui-icon ui-icon-circle-triangle-n"></span></a>
                </header>
            </article>
            <article class="module width_full" style="border:0;">

                <table class="layui-table" lay-size="sm" style="text-align:center;">
                    <colgroup>
                        <col width="150">
                        <col width="200">
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th width="10%" style="text-align:center;">序号</th>
                            <th width="10%" style="text-align:center;">员工号</th>
                            <th width="10%" style="text-align:center;">姓名</th>
                            <th width="10%" style="text-align:center;">职位</th>
                            <th width="10%" style="text-align:center;">部门</th>
                            <th width="10%" style="text-align:center;">工资</th>
                            <th width="10%" style="text-align:center;">新姓名</th>
                            <th width="10%" style="text-align:center;">新职位</th>
                            <th width="10%" style="text-align:center;">新部门</th>
                            <th width="10%" style="text-align:center;">新工资</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php if(is_array($jobchange) || $jobchange instanceof \think\Collection || $jobchange instanceof \think\Paginator): $i = 0; $__LIST__ = $jobchange;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $item['no']; ?></td>
                            <td><?php echo $item['pid']; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['job']; ?></td>
                            <td><?php echo $item['depart']; ?></td>
                            <td><?php echo $item['money']; ?></td>

                            <td><font color="#FF0000"><?php echo $item['newname']; ?></font></td>
                            <td><font color="#FF0000"><?php echo $item['newjob']; ?></font></td>
                            <td><font color="#FF0000"><?php echo $item['newdepart']; ?></font></td>
                            <td><font color="#FF0000"><?php echo $item['newmoney']; ?></font></td>
                          
                        </tr>

                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>

            </article>
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


</body>

</html>