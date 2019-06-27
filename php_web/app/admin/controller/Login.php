<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Login extends Controller
{

    public function index()
    {
        if (isAuthority() == 1) {
            $this->redirect(config("localhost") . '/admin.php/Index');   //tiaozhuan
        } else {
            Session::set('Sautor', "");
            Cookie::set('Cauthor', "", "30");
        }

        //没有授权  开启验证
        $name = "";
        $pwd = "";
        if (isset($_POST["username"]) && isset($_POST["pwd"])) {
            $name = $_POST["username"];
            $pwd = $_POST["pwd"];
        } else {
            return view("index/login");
            exit;
        }
        if ($name != "" && $pwd != "") {
            //匹配密码
         //   $user = config("user");
         //   $pass = config("pass");
            //echo  $name."||".$pwd;
            //随机秘钥
            $flag = 0;
            $db = Db::name("padmin");
            $res = $db->select();
            $len = count($res);
          //  dump($res);
            for ($i = 0; $i < $len; $i++) {
                //   echo  $res[$i]["id"]."   ". $res[$i]["password"]."<br/>";
                if ($name ==$res[$i]["id"] && md5($pwd) == $res[$i]["password"]) {

                    $randomAutor = md5(rand(0, 9999) . "geticsen");
                    Session::set('Sauthor', $randomAutor);
                    //密匙有效期30分钟
                    Cookie::set('Cauthor', $randomAutor, "3600");
                    $randomAutor = md5(rand(0, 9999) . "geticsen");
                    //二次验证
                    Session::set('Skey', $randomAutor);
                    $flag = 1;
                    $this->redirect(config("localhost") . '/admin.php/Index');
                    break;
                }
            }
            // echo md5("lijie");

            if ($flag == 0) {
                echo '<script>alert("账号或密码错误")</script>';
                return view("index/login");
            }
        } else {
            return view("index/login");
        }
        return view("index/login");
    }
}
