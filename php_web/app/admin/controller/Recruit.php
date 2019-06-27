<?php
namespace app\admin\controller;

use think\Db;
use think\Controller;
use think\Session;
use think\Cookie;

class Recruit extends Controller
{
    public function index()
    {
        if (!isset($_POST["type"])) {

            $db = Db::name("pdepart");
            $res = $db->column('dname');
            //   $len = $db->count();
            // $res = $db->order('departid asc')->select();
            // dump($res);
            //   dump($len);
            return view("index/recruit", [
                "res"  => $res,
            ]);
        } else {
            $name = $_POST["name"];
            $sex = $_POST["sex"];
            $birthday = $_POST["birthday"];
            $hopemoney = $_POST["hopemoney"];
            $hopedepart = $_POST["hopedepart"];
            $phone = $_POST["phone"];
            $content = $_POST["content"];
            //    echo $name."  ". $sex."  ". $birthday."  ". $hopemoney."  ". $hopedepart."  " . $phone."  ". $content;
            //      formData.append("type", 11);
            //连数据库
            try {
                $db = Db::name("recruit");
                //插入
                $res = $db->where('phone', "=", $phone)->select();
                if ($res == NULL)   //可以插入
                {
                    $res = $db->insert([
                        'name' => $name,
                        'sex' => $sex,
                        'birthday' =>  $birthday,
                        'hopemoney' => $hopemoney,
                        'hopedepart' => $hopedepart,
                        'phone' => $phone,
                        'content' => $content,
                    ]);
                    resultBackJson(200, "add_ok", "");
                } else   //重复
                {
                    resultBackJson(201, "error", "");
                }

                //创建文件
            } catch (Exception $e) { }
            //resultBackJson(200, "add_ok", "");
        }
    }
}
