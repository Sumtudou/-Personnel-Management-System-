<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Trainadd extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            if (!isset($_POST["type"])) {
                return view("index/train_add");
            } else {
                $pid = $_POST["pid"];
                $begin = $_POST["begin"];
                $end = $_POST["end"];
                $content = $_POST["content"];

                if ($begin > $end) {
                    resultBackJson(201, "error", "");
                } else {
                    $dbp = Db::name("puser");
                    $resn = $dbp->where("pid", "=", $pid)->select();
                  // dump($resn);
                    if ($resn == NULL)
                        resultBackJson(202, "pusererror", "");
                    else {
                        //连数据库
                        try {
                            $db = Db::name("train");
                            //插入
                            //   $res = $db->where('departid', "=", $departid)->select();
                            $res = $db->insert([
                                'pid' => $pid,
                                'begin' => $begin,
                                'end' =>  $end,
                                'content' => $content,
                                'name'   => $resn[0]['pname'],
                            ]);
                            resultBackJson(200, "add_ok", "");
                            //创建文件
                        } catch (Exception $e) { }
                        //resultBackJson(200, "add_ok", "");
                    }
                }
            }
        } else {
            return "<center><h1>403</h1></center>";
        }
    }
}
