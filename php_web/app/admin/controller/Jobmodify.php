<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Jobmodify extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            //  $db = Db::name("pdepart");
            $puser = NULL; //$db->where("depart","=","23")->select();

            return view("index/job_modify", [
                "puser"  => $puser,
            ]);
        } else  return "<center><h1>403</h1></center>";
    }

    public function queryall()
    {
        if (isAuthority()) {
            $db = Db::name("puser");
            $puser = $db->order('departname asc')->select();

            return view("index/job_modify", [
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
                return view("index/job_modify", [
                    "puser"  => NULL,
                ]);
            } else  if ($name == NULL && $id != NULL)    //id
            {
                $db = Db::name("puser");
                $res = $db->where("pid", "=", $id)->select();
                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/job_modify", [
                    "puser"  => $res,
                ]);
            } else if ($name != NULL && $id == NULL)    //name
            {
                $db = Db::name("puser");
                $res = $db->where("pname", "=", $name)->select();

                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/job_modify", [
                    "puser"  => $res,
                ]);
            } else if ($name != NULL && $id != NULL) {
                $db = Db::name("puser");
                $res = $db->where("pname", "=", $name)->where("pid", "=", $id)->select();
                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/job_modify", [
                    "puser"  => $res,
                ]);
            }
        } else  return "<center><h1>403</h1></center>";
    }

    public function display_()    // 显示加载的部分数据。
    {
        if (isAuthority()) {
            $id = isset($_GET["id"]) ? $_GET["id"] : '';
            //  echo "id=".$id;
            if ($id) {
                $db = Db::name("puser");
                //    $res1 = $db->where('no', '=', $id)->select();  //返回值带类型
                $res = $db->where('pid', '=', $id)->find();   //返回值为纯string
                // dump($res);
                // dump($res1);
                $db = Db::name("pdepart");
                $res1 = $db->column('dname');
                $res["departnames"] = $res1;
                //  dump($res);
                return view("index/job_modify_display", $res);
            }
        } else {
            return "<center><h1>403</h1></center>";
        }
    }

    public function save()
    {
        if (isAuthority()) {

            if (!isset($_POST["type"])) {
                return view("index/job_modify_display");
            } else {

                $pid = $_POST["pid"];
                $newmoney = $_POST["newmoney"];
                $newdepart = $_POST["newdepart"];
                $newjob = $_POST["newjob"];
                $pname = $_POST["pname"];
 
                $dbb = Db::name("puser");
                $old = $dbb->where("pid","=",$pid)->find();

              //  echo $old["pname"].$old["pid"].$old["job"].$old["departname"].$old["money"]."<br/>";
             //   echo $pname.$pid. $newjob. $newdepart. $newmoney."<br/>";
 
                $dbchange = Db::name("jobchange");
                $dbchange->insert([
                    "name"  =>$old["pname"],
                    "pid"  =>$old["pid"],
                    "job"  =>$old["job"],
                    "depart"  =>$old["departname"],
                    "money"  =>$old["money"],

                    "newname"  => $pname,
                    "newjob"  =>$newjob,
                    "newdepart"  =>$newdepart,
                    "newmoney"  =>$newmoney ,
                ]);

                //连数据库1
                try {
                    $db = Db::name("puser");
                    //插入
                    $flag = 0;
                    if ($newjob == "部门经理") {
                        $res = $db->where('job', "=", "部门经理")->where("departname", "=", $newdepart)->select();
                        // dump($res);
                        if ($res != NULL && $res[0]["pid"] != $pid)   //有经理了。
                        {
                            resultBackJson(201, "add_ok", "");
                            $flag = 1;
                        }
                    }
                    if ($flag == 0) {
                        $dbp = Db::name("pdepart");
                        $resp = $dbp->where("dname", "=", $newdepart)->find();

                        $res = $db->where('pid', "=", $pid)->update([

                            'pname' => $pname,
                            'money' => $newmoney,
                            'departname' =>  $newdepart,
                            'job' => $newjob,
                            'departid' => $resp["departid"],
                        ]);
                        resultBackJson(200, "add_ok", "");
                    }
                } catch (Exception $e) { }
                //resultBackJson(200, "add_ok", "");
            }
        } else {
            return "<center><h1>403</h1></center>";
        }
    }
}
