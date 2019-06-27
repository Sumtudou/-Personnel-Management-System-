<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\phpstudy\WWW\php_web\public/../app/index\view\index\index.html";i:1559653903;s:57:"D:\phpstudy\WWW\php_web\app\index\view\common\header.html";i:1556957911;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sum_tudou个人博客</title>
    <meta name="keywords" content="Sum_tudou,lijie,李杰，李杰的个人博客，Sum_tudou的个人博客" />
    <meta name="description" content="Sum_tudou,lijie,李杰，李杰的个人博客，Sum_tudou的个人博客" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/static/css/base.css" rel="stylesheet">
    <link href="/static/css/index.css" rel="stylesheet">
    <link href="/static/css/m.css" rel="stylesheet">
    <link rel="shortcut icon" href="/static/images/icon.jpg">

    <link href="/static/layui/layui/css/layui.css" rel="stylesheet" media="all">
    <script src="/static/layui/layui/layui.js" type="text/javascript"></script>
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
    <article>
        <!--banner begin-->
        <div class="picsbox">
            <div class="banner">
                <div id="banner" class="fader">

                    <?php if(is_array($article_big) || $article_big instanceof \think\Collection || $article_big instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($article_big) ? array_slice($article_big,0,3, true) : $article_big->slice(0,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                    <li class="slide"><a href="/Info/index/id/<?php echo $item['id']; ?>.html" target="_blank"><img
                                src="<?php echo $item['img']; ?>"><span class="imginfo"><?php echo $item['tittle']; ?></span></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    <div class="fader_controls">
                        <div class="page prev" data-target="prev">&lsaquo;</div>
                        <div class="page next" data-target="next">&rsaquo;</div>
                        <ul class="pager_list">
                        </ul>
                    </div>


                </div>
            </div>
            <!--banner end-->
            <div class="toppic">
                <?php if(is_array($article_big_2) || $article_big_2 instanceof \think\Collection || $article_big_2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($article_big_2) ? array_slice($article_big_2,0,2, true) : $article_big_2->slice(0,2, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>

                <li><a href="/Info/index/id/<?php echo $item['id']; ?>.html" target="_blank"> <i><img src="<?php echo $item['img']; ?>"></i>
                        <h2><?php echo $item['summary']; ?></h2>
                        <span><?php echo $item['tittle']; ?></span>
                    </a></li>

                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="blank"></div>
        <!--blogsbox begin-->

        <div class="blogsbox">
            <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="blogs" data-scroll-reveal="enter bottom over 1s">
                <h3 class="blogtitle"><a href="/Info/index/id/<?php echo $item['id']; ?>.html" target="_blank"><?php echo $item['tittle']; ?></a></h3>
                <?php if($item['imgsum'] == 1): ?>
                <span class="bigpic"><a href="/Info/index/id/<?php echo $item['id']; ?>.html" title=""><img src="<?php echo $item['img']; ?>"
                            alt=""></a></span>
                <?php endif; ?>
                <p class="blogtext"><a href="/Info/index/id/<?php echo $item['id']; ?>.html" target="_blank"><?php echo $item['summary']; ?></a></p>
                <div class="bloginfo">
                    <ul>
                        <li class="timer"><?php echo backDate($item['time']); ?></li>
                        <li class="view"><span><?php echo $item['viewtime']; ?></span>已阅读</li>
                        <li class="like"><?php echo $item['love']; ?></li>
                    </ul>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

            <div id="btn_page" style="text-align:center; margin-bottom: 20px">
                <div class="layui-btn-group">

                    <button class="layui-btn ">
                        <a href="/Index/page/id/<?php echo $page-1; ?>.html"> <i class="layui-icon">&#xe603;</i> </a>
                    </button>

                    <button class="layui-btn ">
                        <?php echo $page; ?>/<?php echo $last; ?>
                    </button>

                    <button class="layui-btn ">
                        <a href="/Index/page/id/<?php echo $page+1; ?>.html"> <i class="layui-icon">&#xe602;</i> </a>
                    </button>

                </div>
            </div>

        </div>




        <!--blogsbox end-->
        <div class="sidebar">
            <div class="guanzhu">

                <h2 class="hometitle">欢迎交流</h2>
                <ul>
                    <li class="sina"><a href="https://blog.csdn.net/qq_36752486"
                            target="_blank"><span>CSDN博客</span>Sum_tudou</a></li>
                    <li class="qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=1163015195&site=qq&menu=yes"
                            target="_blank"><span>QQ号</span>1163015195</a></li>
                    <li class="email"><span>邮箱帐号</span>hehe_0.0@qq.com</li>
                </ul>
            </div>
        </div>
    </article>


    <footer>
        <p>Design by Sumtudou&nbsp&nbsp&nbsp湘ICP备19007414号</p>
    </footer>
    <a href="#" class="cd-top">Top</a>
</body>

</html>