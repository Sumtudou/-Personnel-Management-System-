<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy\WWW\php_web\public/../app/admin\view\index\employ_add.html";i:1561548040;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>欢迎加入</title>

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

</head>

<body>
    <div class="tittle" style="text-align: center; margin-top:30px;margin-bottom:20px">
        <h1>正式录入员工！！！</h1>
    </div>

    <div class="main" style="margin-left: 25%;  width:50%">
        <form class="layui-form" action="" lay-filter="test">
            <div class="layui-form-item">
                <label class="layui-form-label">姓名：</label>
                <div class="layui-input-block">
                    <input type="text" id="name" value="<?php echo $name; ?>" required lay-verify="required" autocomplete="off"
                        class="layui-input">
                </div>
            </div>


            <div class="layui-form-item">
                <label class="layui-form-label">性别：</label>
                <div class="layui-input-block">
                    <input type="radio" name="sex" value="1" title="男">
                    <input type="radio" name="sex" value="0" title="女" checked>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">生日：</label>
                <div class="layui-input-block">
                        <input type="text" id="birth" value="<?php echo $birthday; ?>" required lay-verify="required" autocomplete="off"
                            class="layui-input">
                    </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">月薪：</label>
                <div class="layui-input-block">
                    <input type="text" id="money" required lay-verify="required" autocomplete="off" value=<?php echo $hopemoney; ?>
                        class="layui-input">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">部门：</label>
                <div class="layui-input-block">
                    <select id="depart" lay-verify="required">
                        <option value=""></option>
                        <?php if(is_array($departnames) || $departnames instanceof \think\Collection || $departnames instanceof \think\Paginator): $i = 0; $__LIST__ = $departnames;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">职位：</label>
                <div class="layui-input-block">
                    <select id="job" lay-verify="required">
                        <option value=""></option>
                        <option value="临时员工">临时员工</option>
                        <option value="正式员工">正式员工</option>
                        <option value="部门经理">部门经理</option>
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">电话号码：</label>
                <div class="layui-input-block">
                    <input type="text" id="phone" required lay-verify="required" placeholder="请输入标题" autocomplete="off"
                        value="<?php echo $phone; ?>" class="layui-input">
                </div>
            </div>


            <div class="layui-form-item" style="margin-left:20%">
                <div class="layui-input-block">
                    <button class="layui-btn" type="submit" lay-submit lay-filter="formDemo">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>

        </form>
    </div>

    <input id="ggg" style="display: none;" value="<?php echo $hopedepart; ?>" />
    <input id="ddd" style="display: none;" value="<?php echo $sex; ?>" />
    <input id="deleteid" style="display: none;" value="<?php echo $no; ?>" />

</body>
<script>
    function firstload() {
        var str = "#depart option[value='" + $("#ggg").val() + "']";
        var sex = "input:radio[value='" + $("#ddd").val() + "']";
     //   document.write(sex);
        $("#depart option[value='']").removeAttr("selected"); //2.移除默认选项的选中状态  removeAttr("selected")
        $(str).attr("selected", "selected");
        $(sex).attr('checked', 'true');

       // alert( $("#deleteid").val());
    }
    firstload();



    layui.use('form', function () {

        var form1 = layui.form;
        //监听提交
        form1.on('submit(formDemo)', function () {

            var formData = new FormData();
            formData.append("type", 11);
            formData.append("name", $("#name").val());
            formData.append("sex", $('input:radio:checked').val());
            formData.append("birthday", $("#birth").val());
            formData.append("money", $("#money").val());
            formData.append("depart", $("#depart").val());
            formData.append("phone", $("#phone").val());
            formData.append("job", $("#job").val());
            formData.append("deleteid",$("#deleteid").val());   //当前记录id，要是保存成功就删除它
            $.ajax({
                url: '/admin.php/Employ/save',
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
                            layer.msg('添加成功!', {
                                icon: 1,
                                time: 1000
                            });
                            setTimeout(function () {}, 1000);
                        } else if (data['msg'] == 'registe_sucss') {
                            layer.msg('添加成功!', {
                                icon: 1,
                                time: 1000
                            });
                            setTimeout(function () {}, 1000);

                        }
                    } else {
                        layer.msg('重复', {
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


</script>

</html>