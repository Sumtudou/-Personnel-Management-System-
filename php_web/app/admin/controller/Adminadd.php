<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Adminadd extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            if (!isset($_POST["type"])) {
                return view("index/admin_add");
            } else {
                $id = $_POST["id"];
                $password = $_POST["password"];
       

                //连数据库
                try {
                    $db = Db::name("padmin");
                    
                    $res= $db->where("id","=",$id)->select();
                    if($res==NULL)
                    {
                        $db->insert([
                            "id" => $id,
                            "password" => md5($password),
                        ]);
                        resultBackJson(200, "add_ok", "");
                    }
                    else 
                    {
                        resultBackJson(201, "add_ok", "");
                    }


             

                    //创建文件
                } catch (Exception $e) { }

                //resultBackJson(200, "add_ok", "");
            }
        } else {
            return "<center><h1>403</h1></center>";
        }
    }
}
