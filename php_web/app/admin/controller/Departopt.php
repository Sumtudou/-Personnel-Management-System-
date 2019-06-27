<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Departopt extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            //  $db = Db::name("pdepart");
            $depart = NULL; //$db->where("depart","=","23")->select();

            return view("index/depart_opt", [
                "depart"  => $depart,
            ]);
        } else  return "<center><h1>403</h1></center>";
    }

    public function queryall()
    {
        if (isAuthority()) {
            $db = Db::name("pdepart");
            $depart = $db->order('departid asc')->select();
            /*********修改数据************************ */
            $len = count($depart);
            $dbp = Db::name("puser");
            for ($i = 0; $i < $len; $i++) {
                $resn = $dbp->where("departid", "=", $depart[$i]["departid"])->count();
                $depart[$i]["departsum"] = $resn;
                $resn1 = $dbp->where("job", "=", "部门经理")->order("departid asc")->select();
                $depart[$i]["dname"] = $resn1[$i]["departname"];
                $depart[$i]["manager"] = $resn1[$i]["pname"];
                $depart[$i]["pid"] = $resn1[$i]["pid"];
            }
            //   dump($depart);
            //  dump($resn1);
            /********************************* */

            return view("index/depart_opt", [
                "depart"  => $depart,
            ]);
        } else  return "<center><h1>403</h1></center>";
    }


    public function delete()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';
        if ($id != NULL) {
            if (isAuthority()) {
                $db = Db::name("pdepart");
                $res = $db->where("departid", "=", $id)->delete();
               
                $dbp = Db::name("puser");
                $resp = $dbp->where("departid", "=", $id)->delete();


                $depart = $db->order('departid asc')->select();

                return view("index/depart_opt", [
                    "depart"  => $depart,
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
                return view("index/depart_opt", [
                    "depart"  => NULL,
                ]);
            } else  if ($name == NULL && $id != NULL)    //id
            {
                $db = Db::name("pdepart");
                $res = $db->where("departid", "=", $id)->select();
                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/depart_opt", [
                    "depart"  => $res,
                ]);
            } else if ($name != NULL && $id == NULL)    //name
            {
                $db = Db::name("pdepart");
                $res = $db->where("dname", "=", $name)->select();

                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/depart_opt", [
                    "depart"  => $res,
                ]);
            } else if ($name != NULL && $id != NULL) {
                $db = Db::name("pdepart");
                $res = $db->where("dname", "=", $name)->where("pdepart", "=", $id)->select();
                if ($res == NULL) {
                    echo '<script>alert("没有鸭！！")</script>';
                }
                return view("index/depart_opt", [
                    "depart"  => $res,
                ]);
            }
        } else  return "<center><h1>403</h1></center>";
    }

    public function modify($id = "")
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
    }




    public function save()
    {
        if (isAuthority()) {

            if (!isset($_POST["type"])) {
                return view("index/depart_modify");
            } else {
                $departid = $_POST["departid"];      //部门id。不变
                $departname = $_POST["departname"];  //部门新名字
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

                        $dbp = Db::name("puser");
                        $resp = $dbp->where('departid', "=", $departid)->update([
                            'departname'=>$departname

                        ]);
                      //  $len = count($resp);
                     //   dump($resp);
                      /*  dump($len);
                        dump($departname);
                        for ($i = 0; $i < $len; $i++) {
                            dump( $resp[$i]['departname']);
                            $resp[$i]['departname'] = $departname;
                        }*/
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
// $db->where([
//     'id' => $id
// ])->update([
//     'tittle'    => $tittle,
//     'summary'  => $summary,
//     'img'      => $img,
//     'author'  => $author,
//     'content' => $content,
//     'time'    => $date,
//     'imgsum'  => $imgsum,
//     'status'  => $status,
//     'love'    => 0,
//     'isfirst' => $isfirst,
//     'viewtime' => 0
// ]);
