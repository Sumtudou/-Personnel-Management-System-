<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;
use app\admin\model\Puser;
class Employ extends Controller
{

    public function index()
    {
        if (isAuthority()) 
        {
            $db = Db::name("recruit");
            $recruit = $db->order('no asc')->select();

            return view("index/employ", [
                "recruit"  => $recruit,
            ]);
        } else  return "<center><h1>403</h1></center>";
    }


    public function delete()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';
        if ($id != NULL) {
            if (isAuthority()) {
                $db = Db::name("recruit");
                $res = $db->where("no", "=", $id)->delete();

                $recruit = $db->order('no asc')->select();
                return view("index/employ", [
                    "recruit"  => $recruit,
                ]);
            } else  return "<center><h1>403</h1></center>";
        }
    }

    public function display_()    // 显示加载的部分数据。
    {
        if (isAuthority()) {
            $id = isset($_GET["id"]) ? $_GET["id"] : '';
          //  echo "id=".$id;
            if ($id) {
                $db = Db::name("recruit");
            //    $res1 = $db->where('no', '=', $id)->select();  //返回值带类型
                $res = $db->where('no', '=', $id)->find();   //返回值为纯string

                $db = Db::name("pdepart");
                $res1 = $db->column('dname');
                $res["departnames"]=$res1;

              //  dump($res);
             // dump($res1);
                return view("index/employ_add", $res);
            }
        } else {
            return "<center><h1>403</h1></center>";
        }
    }
    public function save()
    {
        if (!isset($_POST["type"])) {
            return view("index/recruit");
        } else {
            $name = $_POST["name"];
            $sex = $_POST["sex"];
            $birthday = $_POST["birthday"];
            $money = $_POST["money"];
            $depart = $_POST["depart"];
            $phone= $_POST["phone"];
            $job = $_POST["job"];
            $deleteid = $_POST["deleteid"];
        //    echo $name."  ". $sex."  ". $birthday."  ". $money."  ". $depart."  " . $phone."  ". $job."   ".$deleteid;
            //连数据库
         try {
                $db = Db::name("puser");
                //插入
                $res = $db->where('pname', "=", $name)->where('pbirthday', "=", $birthday)->select();//名字生日均相同
                $Model = new Puser();
                $sql = "select departid from pdepart where dname='".$depart."'";
           //    echo $sql;
               $departid = $Model->query($sql);
               
               $idd= $departid[0]['departid'];   //departid
                //echo $idd;
                if ($res == NULL)   //可以插入
                {
                    $res = $db->insert([
                        'pname' => $name,
                        'psex' => $sex,
                        'pbirthday' =>  $birthday,
                        'money' => $money,
                        'departid' =>  $idd,
                        'phone' => $phone,
                        'job' => $job,
                        'departname' => $depart
                    ]);
                    $db = Db::name("recruit");
                    $db->where("no", "=", $deleteid)->delete();   //插入成功，就删除之前求职表的人

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
