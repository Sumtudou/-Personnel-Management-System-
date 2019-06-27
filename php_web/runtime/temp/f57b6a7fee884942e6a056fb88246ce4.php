<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\phpstudy\WWW\php_web\public/../app/index\view\index\gbook.html";i:1559728797;s:57:"D:\phpstudy\WWW\php_web\app\index\view\common\header.html";i:1556957911;s:56:"D:\phpstudy\WWW\php_web\app\index\view\common\leave.html";i:1560182527;}*/ ?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>留言_Sum_tudou个人博客</title>
  <meta name="keywords" content="Sum_tudou,lijie,李杰" />
  <meta name="description" content="Sum_tudou,lijie,李杰，个人博客" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/static/css/base.css" rel="stylesheet">
  <link href="/static/css/index.css" rel="stylesheet">
  <link href="/static/css/m.css" rel="stylesheet">
  <link rel="shortcut icon" href="/static/images/icon.jpg">

  <script src="/static/js/jquery.min.js" type="text/javascript"></script>
  <script src="/static/js/jquery.easyfader.min.js"></script>
  <script src="/static/js/scrollReveal.js"></script>
  <script src="/static/js/common.js"></script>

  <link href="/static/layui/layui/css/layui.css" rel="stylesheet" media="all">
  <script src="/static/layui/layui/layui.js" type="text/javascript"></script>

  <!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>

<body>
  <header> 
        <!--menu begin-->
        <div class="menu">
          <nav class="nav" id="topnav">
            <h1 class="logo"><a href="http://www.sumtudou.cn">Sum_tudou's  blog</a></h1>
                  <li><a href="/Index">网站首页</a></li>
                  <li><a href="/About">关于我</a></li>
                  <li><a href="/Gbook">留言</a></li>
                  <li><a href="/Download">附件下载</a></li>
      
            <!--search begin-->
            <div id="search_bar" class="search_bar">
              <ul  id="searchform" >
                <input class="input" placeholder="想搜点什么呢..." type="text" name="keyboard" id="keyboard">
                <input type="hidden" name="show" value="title" />
                <input type="hidden" name="tempid" value="1" />
                <input type="hidden" name="tbname" value="news">
                <input type="hidden" name="Submit" value="搜索" />
                <span class="search_ico"></span>
              </ul>
            </div>
            <!--search end--> 
          </nav>
        </div>
        <!--menu end--> 
        <!--mnav begin-->
        <div id="mnav">
          <h2><a href="http://www.sumtudou.cn" class="mlogo">Sum_tudou's  blog</a><span class="navicon"></span></h2>
          <dl class="list_dl">
                  <dt class="list_dt"><a href="/Index">网站首页</a></dt>
                  <dt class="list_dt"><a href="/About">关于我</a></dt>
                  <dt class="list_dt"><a href="/Gbook">留言</a></dt>
                  <dt class="list_dt"><a href="/Download">附件下载</a></dt>
          </dl>
        </div>
        <!--mnav end--> 
      </header>
  <div class="pagebg ab"> </div>
  <div class="container">
    <h1 class="t_nav"><span>留下你想说的吧，即使博主一定不会回复。手动滑稽</span><a href="index.html" class="n1">网站首页</a>
      <p class="n2">留言</p>
    </h1>

    <div class="blogsbox" id="message">

      <div class="leave_msg" id="edit">

    <form class="layui-form" action="">

        <div class="layui-form-item" style="width:85%">
            <div class="layui-input-block">
                <input type="text" id="name" required lay-verify="required" placeholder="请输入您的昵称" autocomplete="off"
                    class="layui-input">
            </div>
        </div>

        <div class="layui-form-item layui-form-text">
            <div>
                    <textarea id="content" style="display: none;" ></textarea>
            </div>

        </div>


        <div class="layui-form-item">
            <div style="margin-left: 33%">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

</div>

<script>

    layui.use(['form','layedit'], function () {

        var form1 = layui.form;
        var layedit = layui.layedit;
        var back_layedit=layedit.build('content',{
            height: 100,
            tool: [ 'face']
        }); //建立编辑器
        //监听提交
        form1.on('submit(formDemo)', function () {


            var content_str = layedit.getContent(back_layedit);
            var formData = new FormData();


            if(content_str == "")
            {
                layer.msg('留言不能为空', {
                                icon: 2,
                                time: 1000
                            });
                 return false;
            }

            formData.append("type", 11);
            formData.append("name", $("#name").val());
            formData.append("content",content_str);

            $.ajax({
                url: '/Gbook',
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
                        //在原有窗口打开
                        if (data['msg'] == 'add_ok') {
                            layer.msg('留言已提交', {
                                icon: 1,
                                time: 1000
                            });

                            var myDate = new Date();

                            var odiv = "<div class='blogs'>" +
                                "<p style='padding-left: 30px'>" + content_str +
                                "</p>" +
                                '<div class="bloginfo" style="padding-left: 30px">' +
                                '<ul>' +
                                '<li class="timer">' + getNowFormatDate() + '</li>' +
                                '<li class="author">' + $("#name").val() + '</li>' +
                                '</ul>' +
                                "</div>" +
                                '</div>';
                            $(odiv).insertAfter($("#edit"));
                        }
                    } else {
                        layer.msg('文章提交失败!', {
                            icon: 2,
                            time: 1000
                        });
                        //console.log(data);
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


    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        var hour = date.getHours();
        var minute = date.getMinutes();
        // var second = date.getSeconds();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        if (hour >= 0 && hour <= 9) {
            hour = "0" + hour;
        }
        if (minute >= 0 && minute <= 9) {
            minute = "0" + minute;
        }
        var currentdate = year + seperator1 + month + seperator1 + strDate + " " + hour + ":" + minute;
        return currentdate;
    }
</script>

      <?php if(is_array($leavemsg) || $leavemsg instanceof \think\Collection || $leavemsg instanceof \think\Paginator): $i = 0; $__LIST__ = $leavemsg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
      <div class="blogs">
        <p style="padding-left: 30px"><?php echo $item['content']; ?></p>
        <div class="bloginfo" style="padding-left: 30px">
          <ul>
            <li class="timer"><?php echo backDate($item['time']); ?></li>
            <li class="author"><?php echo $item['author']; ?></li>
          </ul>
        </div>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>

    </div>

    <div class="sidebar">
      <div class="about">
        <p class="avatar"> <img src="/static/images/tou.jpg" alt=""> </p>
        <p class="abname">Sum_tudou | 吃土豆土豆</p>
        <p class="abposition">日常划水，懂点小算法</p>
        <p class="abtext"> 95后佛系奔三大叔，自信且不油腻。 </p>
      </div>
    </div>

  </div>
  <footer>
    <p>Design by Sumtudou&nbsp&nbsp&nbsp湘ICP备19007414号</p>
  </footer>
  <a href="#" class="cd-top">Top</a>
</body>

</html>