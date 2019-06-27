<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Departadd extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            if (!isset($_POST["type"])) {
                return view("index/depart_add");
            } else {
                $departid = $_POST["departid"];
                $departname = $_POST["departname"];
                $departsum = $_POST["departsum"];
                $manager = $_POST["manager"];
                $pid = $_POST["pid"];

                //连数据库
                try {
                    $db = Db::name("pdepart");
                    $dbp = Db::name("puser");
                    //插入
                    $res = $db->where('departid', "=", $departid)->select();
                    $people = $dbp->where('pid', "=", $pid)->where('pname', "=", $manager)->select();//人存在

                    if ($res == NULL && $people!=NULL)   //可以插入
                    {
                        $res = $db->insert([
                            'departid' => $departid,
                            'dname' => $departname,
                            'departsum' =>  $departsum,
                            'manager' => $manager,
                            'pid' => $pid,
                        ]);

                        $dbp->where('pid', "=", $pid)->update([
                            'departname'=>$departname,
                            'job'       =>"部门经理",
                            'departid'=>$departid,


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
    }
}
