<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\phpstudy\WWW\php_web\public/../app/index\view\index\info.html";i:1557057919;s:57:"D:\phpstudy\WWW\php_web\app\index\view\common\header.html";i:1556957911;s:56:"D:\phpstudy\WWW\php_web\app\index\view\common\money.html";i:1556954513;}*/ ?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Something_Sum_tudou个人博客</title>
  <meta name="keywords" content="Sum_tudou,lijie,李杰" />
  <meta name="description" content="Sum_tudou,lijie,李杰，个人博客" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/static/css/base.css" rel="stylesheet">
  <link rel="shortcut icon" href="/static/images/icon.jpg">
  <link href="/static/css/index.css" rel="stylesheet">
  <link href="/static/css/mycss.css" rel="stylesheet">
  <link href="/static/css/m.css" rel="stylesheet">
  <script src="/static/js/jquery.min.js" type="text/javascript"></script>
  <script src="/static/js/jquery.easyfader.min.js"></script>
  <script src="/static/js/scrollReveal.js"></script>
  <script src="/static/js/common.js"></script>

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
  <div id="mywidth">
  <!-- <article> -->
    <h1 class="t_nav">  <a href="/Index" class="n1">网站首页</a>  <a href="/About" class="n2">关于作者</a>   </h1>

    <div class="infosbox">
      <div class="newsview">
        <h3 class="news_title"><?php echo $article['tittle']; ?></h3>
        <div class="bloginfo">
          <ul>
            <!-- |backDate -->
            <li class="timer"><?php echo $article['time']; ?></li>
            <li class="view"><span><?php echo $article['viewtime']; ?></span>已阅读</li>
            <li class="like"><?php echo $article['love']; ?></li>
          </ul>
        </div>
        <div class="news_about"><strong>简介</strong><?php echo $article['summary']; ?></div>
        <div class="news_con">
          <?php echo $article['content']; ?>
        </div>
      </div>

      <div class="share">

  <p class="diggit"><a href="javascript:void(0)" onClick="clickup()"> 很赞哦！ </a>
    (<b id="number"><?php echo $article['love']; ?></b>)</p>
  <!-- <p class="diggit">
    <a href="JavaScript:makeRequest('/e/public/digg/?classid=3&amp;id=19&amp;dotop=1&amp;
            doajax=1&amp;ajaxarea=diggnum','EchoReturnedText','GET','');"> 很赞哦！ </a>
    (<b id="diggnum">
      <script type="text/javascript">
        
        
        </script><?php echo $article['love']; ?>
    </b>)</p> -->
  <p class="dasbox"><a href="javascript:void(0)" onClick="dashangToggle()" class="dashang" title="打赏，支持一下">打赏本站</a></p>
  <div class="hide_box"></div>
  <div class="shang_box"> <a class="shang_close" href="javascript:void(0)" onclick="dashangToggle()" title="关闭">关闭</a>
    <div class="shang_tit">
      <p>感谢您的支持，我会继续努力的!</p>
    </div>
    <div class="shang_payimg"> <img src="/static/images/alipayimg.jpg" alt="扫码支持" title="扫一扫"> </div>
    <div class="pay_explain">扫码打赏，你说多少就多少</div>
    <div class="shang_payselect">

      <div class="pay_item checked" data-id="alipay">
        <span class="radiobox"></span> <span class="pay_logo">
          <img src="/static/images/alipay.jpg" alt="支付宝"></span> </div>

      <div class="pay_item" data-id="weipay">
        <span class="radiobox"></span> <span class="pay_logo">
          <img src="/static/images/wechat.jpg" alt="微信"></span> </div>
    </div>
    <script type="text/javascript">
      $(function () {
        $(".pay_item").click(function () {
          $(this).addClass('checked').siblings('.pay_item').removeClass('checked');
          var dataid = $(this).attr('data-id');
          $(".shang_payimg img").attr("src", "/static/images/" + dataid + "img.jpg");
          $("#shang_pay_txt").text(dataid == "alipay" ? "支付宝" : "微信");
        });
      });

      function dashangToggle() {
        $(".hide_box").fadeToggle();
        $(".shang_box").fadeToggle();
      }
      var isClick = 0;
      function clickup() {
                if (isClick>=10) {
                    alert("一次最多赞十下呢，感谢支持︿(￣︶￣)︿");
                } else {
                    isClick++;
                    $("#number").text(parseInt($("#number").text()) + 1);
                    //连接服务器
                    $.ajax({
                        url: '/Click',
                        type: 'get',
                        data: { "articleId": '<?php echo $article['id']; ?>',"articleTable": '1'},
                        dataType: 'jsonp',
                        calback: "calback",
                        cache: false,
                        jsonp: 'callbak',
                        success: function (dat) {
                                isSubmit = true;
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            //alert(XMLHttpRequest.status);
                            //alert(XMLHttpRequest.readyState);
                            //alert(textStatus);
                        }
                    });
                }

            }
    </script>
  </div>
</div>
    </div>
    </div>

  <!-- </article> -->
  <footer >
    <p>Design by Sumtudou&nbsp&nbsp&nbsp湘ICP备19007414号</p>
  </footer>
  <a href="#" class="cd-top">Top</a>
</body>

</html>