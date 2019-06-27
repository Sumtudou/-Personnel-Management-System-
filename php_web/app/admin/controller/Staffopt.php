<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Staffopt extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            //  $db = Db::name("pdepart");
            $puser = NULL; //$db->where("depart","=","23")->select();

            return view("index/staff_opt", [
                "puser"  => $puser,
            ]);
        } else  return "<center><h1>403</h1></center>";
    }

    public function queryall()
    {
        if (isAuthority()) {
            $db = Db::name("puser");
            $puser = $db->order('departname asc')->select();

            return view("index/staff_opt", [
                "puser"  => $puser,
            ]);
        } else  return "<center><h1>403</h1></center>";
    }


    public function delete()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';   //pid
        if ($id != NULL) {
            if (isAuthority()) {
                $db = Db::name("puser");
                $res = $db->where("pid", "=", $id)->delete();
                $puser = $db->order('departname asc')->select();
                return view("index/staff_opt", [
                    "puser"  => $puser,
                ]);
            } else  return "<center><h1>403</h1></center>";
        }
    }
    public function query()
    {
        if (isAuthority()) {
            $id = isset($_POST["id"]) ? $_POST["id"] : '';
            $name = isset($_POST["name"]) ? $_POST["name"] : '';

            // echo "id=".$id." +name".$name;
            if ($name == NULL && $id == NULL) {
                echo '<script>alert("逗我玩呢？？？")</script>';
                return view("index/staff_opt", [
                    "puser"  => NULL,
                ]);
            } else  if ($name == NULL && $id != NULL)    //id
            {
                $db = Db::name("puser");
                $res = $db->where("pid", "=", $id)->select();
                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/staff_opt", [
                    "puser"  => $res,
                ]);
            } else if ($name != NULL && $id == NULL)    //name
            {
                $db = Db::name("puser");
                $res = $db->where("pname", "=", $name)->select();

                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/staff_opt", [
                    "puser"  => $res,
                ]);
            } else if ($name != NULL && $id != NULL) {
                $db = Db::name("puser");
                $res = $db->where("pname", "=", $name)->where("pid", "=", $id)->select();
                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/staff_opt", [
                    "puser"  => $res,
                ]);
            }
        } else  return "<center><h1>403</h1></center>";
    }

 /*   public function modify($id = "")
    {
        if (isAuthority()) {
            $id = isset($_GET["id"]) ? $_GET["id"] : '';
          //  echo "id=".$id;
            if ($id) {
                $db = Db::name("pdepart");
             //   $res = $db->where('departid', '=', $id)->select();  //返回值带类型
                $res = $db->where('departid', '=', $id)->find();   //返回值为纯string
              //  dump($res);
              //  dump($res);
                return view("index/depart_modify", $res);
            }
        } else {
            return "<center><h1>403</h1></center>";
        }
    }*/
    



   /* public function save()
    {
        if (isAuthority()) {

            if (!isset($_POST["type"])) {
                return view("index/depart_modify");
            } else {
                $departid = $_POST["departid"];
                $departname = $_POST["departname"];
                $departsum = $_POST["departsum"];
                $manager = $_POST["manager"];
                $pid = $_POST["pid"];

                //连数据库
                try {
                    $db = Db::name("pdepart");
                    //插入
                    $res = $db->where('departid', "=", $departid)->select();

                    if ($res != NULL)   //可以修改
                    {
                        $res = $db->where('departid', "=", $departid)->update([
                         
                            'dname' => $departname,
                            'departsum' =>  $departsum,
                            'manager' => $manager,
                            'pid' => $pid,
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
        } else {
            return "<center><h1>403</h1></center>";
        }
    }*/
}
