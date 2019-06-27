<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\phpstudy\WWW\php_web\public/../app/index\view\index\editchange.html";i:1559548004;s:61:"D:\phpstudy\WWW\php_web\app\index\view\common\mainchange.html";i:1561030623;}*/ ?>
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
        </ul>
      </div>
    </div>

    <div class="layui-body">
      <!-- 内容主体区域 -->
      <div style="padding: 15px;">
<p style="color: red">&nbsp&nbsp&nbsp&nbsp分类里面:0代表一般文章，1代表大标题，2代表小标题，你问我为啥写这个，有bug改不出了啊啊啊</p>
<div id="main" style="margin-left:10%">
        <form class="layui-form" action="" method="post" onsubmit="return saveReport();">
            <div class="layui-form-item" style="width:40%">
                <label class="layui-form-label">标题:</label>
                <div class="layui-input-block">
                    <input type="text" id="tittle" required lay-verify="required" placeholder="请输入标题" autocomplete="off"
                      value="<?php echo $tittle; ?>"  class="layui-input">
                </div>
            </div>
    
            <div class="layui-form-item" style="width:40%">
                <label class="layui-form-label">简介:</label>
                <div class="layui-input-block">
                    <input type="text" id="summary" required lay-verify="required" placeholder="请输入简介" autocomplete="off"
                    value="<?php echo $summary; ?>"    class="layui-input">
                </div>
            </div>

            <div class="layui-form-item" style="width:40%">
                    <label class="layui-form-label">分类:</label>
                    <div class="layui-input-block">
                        <input type="text" id="isfirst" required lay-verify="required" placeholder="请输入简介" autocomplete="off"
                        value="<?php echo $isfirst; ?>"    class="layui-input">
                    </div>
            </div>

                <div class="layui-form-item" style="width:40%">
                        <label class="layui-form-label">状态:</label>
                        <div class="layui-input-block">
                            <input type="text" id="status" required lay-verify="required" placeholder="请输入简介" autocomplete="off"
                            value="<?php echo $status; ?>"    class="layui-input">
                        </div>
                </div>
               
           
            <!-- <button class="layui-btn" style="width:30%; margin-left: 8%;margin-bottom: 3%">点击选择封面</button> -->
            <div class="layui-form-item" style="width:40%">
                <label class="layui-form-label">封面图片:</label>
                <div class="layui-input-block">
                    <input type="text" id="img"  placeholder="请输入地址" autocomplete="off"
                      value="<?php echo $img; ?>"  class="layui-input">
                </div>
            </div>
    
    
            <div id="uedit" >
                    <textarea id="editor" style="width:95%;height:500px;"><?php echo $content; ?></textarea>
            </div>
    
            <div class="layui-form-item" style="margin-left: 25%;margin-top:10px">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="formDemo" onclick="submit_()">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>
    
    
    <script>
    
      var ue = UE.getEditor('editor');
        function getContent() {
            var arr = [];
          console.log(UE.getEditor('editor').getContent());
        // document.write(UE.getEditor('editor').getContent());
         return UE.getEditor('editor').getContent();
        }
    
        function submit_()
        {
                var formData = new FormData();
                formData.append("type",11);
                formData.append("id",<?php echo $id; ?>);
                formData.append("tittle",$("#tittle").val());
                formData.append("summary",$("#summary").val());
                formData.append("status",$("#status").val());
                formData.append("isfirst",$("#isfirst").val());
                formData.append("img",$("#img").val());
                
                formData.append("content",UE.getEditor('editor').getContent());
    
                $.ajax({
                        url: '/Operate/save',
                        type: 'POST',
                        data: formData,
                        //这两个设置项必填
                        contentType: false,
                        processData: false,
                        dataType: 'jsonp',
                        calback: "callback",
                        cache: false,
                        success: function (data) {
                            
                    　　　　if(data['status']=='200'){
                                //在原有窗口打开
                                if(data['msg']=='add_ok'){
                                   alert("成功！")
                                    setTimeout(function(){
                                    },1000);
                                }
                                else if(data['msg']=='registe_sucss'){
                                   // layer.msg('注册成功!',{icon:1,time:1000});
                                    setTimeout(function(){
                                    },1000);
                                    
                                }
                            }else{
                                layer.msg('文章提交失败!',{icon:2,time:1000});
                                //console.log(data);
                            }
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            alert(XMLHttpRequest.status);
                            alert(XMLHttpRequest.readyState);
                            alert(textStatus);
                        }
                });
    
        }
        
    </script>
    
    </div>
    </div>

    <div class="layui-footer">
      <p style="margin-left: 35%">Design by Sumtudou&nbsp&nbsp&nbsp湘ICP备19007414号</p>

    </div>
  </div>

  <script>
    //JavaScript代码区域
    layui.use('element', function () {
      var element = layui.element;

    });
  </script>
  <script type="text/javascript">
    var ue = UE.getEditor('editor', {
      autoFloatEnabled: false
    });

    function getContent() {
      var arr = [];
      console.log(UE.getEditor('editor').getContent());
      alert(UE.getEditor('editor').getContent());
    }
  </script>
</body>

</html>