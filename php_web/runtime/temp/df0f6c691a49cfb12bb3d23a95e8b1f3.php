<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\phpstudy\WWW\php_web\public/../app/index\view\index\msgadmin.html";i:1559732275;s:58:"D:\phpstudy\WWW\php_web\app\index\view\common\mainmsg.html";i:1559890737;}*/ ?>
<html>
<head>
  <meta charset="UTF-8">
  <title>创作咯</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <script type="text/javascript" charset="utf-8" src="/uedit/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/uedit/ueditor.all.js"> </script>
  <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
  <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
  <script type="text/javascript" charset="utf-8" src="/uedit/lang/zh-cn/zh-cn.js"></script>
  <meta name="keywords" content="Sum_tudou,lijie,李杰" />
  <meta name="description" content="Sum_tudou,lijie,李杰，个人博客" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/static/images/icon.jpg">

  <link href="/static/layui/layui/css/layui.css" rel="stylesheet" media="all">
  <script src="/static/layui/layui/layui.js" type="text/javascript"></script>
  
  <script src="/static/js/jquery.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="http://hnust.hunbys.com/plugins/layer/layer.js"></script>


  <link href="/static/css/base.css" rel="stylesheet">
  <link href="/static/css/index.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body class="layui-layout-body">
  <div class="layui-layout layui-layout-admin">
    <div class="layui-header">
      <div class="layui-logo">创作文章</div>
    </div>

    <div class="layui-side layui-bg-black">
      <div class="layui-side-scroll">
        <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
        <ul class="layui-nav layui-nav-tree" lay-filter="test">

            <li class="layui-nav-item"><a href="/Edit">添加文章</a></li>
            <li class="layui-nav-item"><a href="/Operate">文章管理</a></li>
            <li class="layui-nav-item"><a href="/Msgadmin">留言管理</a></li>
        </ul>
      </div>
    </div>

    <div class="layui-body">
      <!-- 内容主体区域 -->
      <div style="padding: 15px;"><div>
    <table class="layui-table" lay-size="sm" style="text-align:center;">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
            <tr>
                <th width="10%" style="text-align:center;">id</th>
                <th width="20%" style="text-align:center;">留言人</th>
                <th width="20%" style="text-align:center;">内容</th>
                <th width="20%" style="text-align:center;">邮箱</th>
                <th width="20%" style="text-align:center;">时间</th>
                <th width="10%" style="text-align:center;">操作</th>
            </tr>
        </thead>
        <tbody>

            <?php if(is_array($leavemsg) || $leavemsg instanceof \think\Collection || $leavemsg instanceof \think\Paginator): $i = 0; $__LIST__ = $leavemsg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['author']; ?></td>
                <td><?php echo $item['content']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['time']; ?></td>
                <td><a href="/Msgadmin/delete/id/<?php echo $item['id']; ?>.html" class="layui-btn layui-btn-sm layui-btn-danger">删
                        除</a></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div></div>
    </div>

    <div class="layui-footer">
      <p style="margin-left: 35%">Design by Sumtudou&nbsp&nbsp&nbsp湘ICP备19007414号</p>

    </div>
  </div>

 
  <script type="text/javascript">
    var ue = UE.getEditor('editor',{autoFloatEnabled:false});

    function getContent() {
      var arr = [];
      console.log(UE.getEditor('editor').getContent());
      alert(UE.getEditor('editor').getContent());
    }
  </script>
</body>

</html>