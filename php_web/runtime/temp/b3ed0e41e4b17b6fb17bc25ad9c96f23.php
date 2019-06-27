<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"D:\phpstudy\WWW\php_web\public/../app/index\view\index\download.html";i:1559653003;s:57:"D:\phpstudy\WWW\php_web\app\index\view\common\header.html";i:1556957911;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>下载_Sum_tudou个人博客</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/static/css/base.css" rel="stylesheet">
    <link href="/static/css/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="/static/images/icon.jpg">

    <!-- <link href="/static/css/mycss.css" rel="stylesheet"> -->

    <link href="/static/layui/layui/css/layui.css"rel="stylesheet" media="all">

    <link href="/static/css/m.css" rel="stylesheet">
    <script src="/static/js/jquery.min.js" type="text/javascript"></script>
    <script src="/static/js/jquery.easyfader.min.js"></script>
    <script src="/static/js/scrollReveal.js"></script>
    <script src="/static/js/common.js"></script>
    <script src="/static/js/modernizr.js"></script>
    <script src="/static/js/download_js.js"></script>
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

    <article>
            <!-- <button class="layui-btn layui-btn-primary">一个标准的按钮</button>
            <a href="http://www.layui.com" class="layui-btn">一个可跳转的按钮</a> -->
            <table class="layui-table" style="text-align:center;">
                    <colgroup>
                      <col width="150">
                      <col width="200">
                      <col>
                    </colgroup>
                    <thead >
                      <tr>
                        <th width="50%"  style="text-align:center;">下载内容</th>
                        <th width="25%"  style="text-align:center;">加入时间</th>
                        <th width="25%"  style="text-align:center;" >点击下载</th>
                      </tr> 
                    </thead>
                    <tbody>
                      <tr>
                        <td>人脸识别APP的完整工程压缩包</td>
                        <td>2019-5-3</td>
                        <td>  <a href="http://212.64.13.246/static/DLFile/face_new.zip" class="layui-btn">点我下载</a></td>
                      </tr>
                      <tr>
                            <td>水量调节大师辅助APP</td>
                            <td>2019-5-3</td>
                            <td>  <a href="http://212.64.13.246/static/DLFile/base.apk" class="layui-btn">点我下载</a></td>
                          </tr>
                          <tr>
                                <td>Navicat Premium 12破解版</td>
                                <td>2019-5-3</td>
                                <td>  <a href="http://212.64.13.246/static/DLFile/Navicat Premium 12.zip" class="layui-btn">点我下载</a></td>
                              </tr>

                              <tr>
                                <td>人脸识别APP.apk(有效期一个月)</td>
                                <td>2019-5-9</td>
                                <td>  <a href="http://212.64.13.246/static/DLFile/face.apk" class="layui-btn">点我下载</a></td>
                              </tr>

                              <tr>
                                <td>答案在此</td>
                                <td>2019-5-10</td>
                                <td>  <a href="http://212.64.13.246/static/DLFile/answer.docx" class="layui-btn">点我下载</a></td>
                              </tr>

                              <tr>
                                <td>操作视频</td>
                                <td>2019-5-20</td>
                                <td>  <a href="http://212.64.13.246/static/DLFile/operate.mp4" class="layui-btn">点我下载</a></td>
                              </tr>

                              <tr>
                                <td>操作文档（用于复制的，别修改乱码）</td>
                                <td>2019-5-20</td>
                                <td>  <a href="http://212.64.13.246/static/DLFile/operate.docx" class="layui-btn">点我下载</a></td>
                              </tr>

                    </tbody>
            </table>    
            
            
        <p style="text-align:center;"><b> 温馨提示：本服务器带宽有点低，最高也就256KB/S，请耐心等待。谢谢</b></p>

        <div id="blank_download"></div>

        <div>
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
        </div>
    </article>

    <footer>
        <p>Design by Sumtudou&nbsp&nbsp&nbsp湘ICP备19007414号</p>
    </footer>
    <a href="#" class="cd-top">Top</a>
</body>

</html>