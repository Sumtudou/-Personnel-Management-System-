<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Rewardadd extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            if (!isset($_POST["type"])) {
                return view("index/reward_add");
            } else {
                $pid = $_POST["pid"];
                $reason = $_POST["reason"];
                $content = $_POST["content"];
                $time = $_POST["time"];

                $dbp = Db::name("puser");
                $resn = $dbp->where("pid", "=", $pid)->select();
                // dump($resn);
                if ($resn == NULL)
                    resultBackJson(202, "pusererror", "");
                else {
                    //连数据库
                    try {
                        $db = Db::name("reward");
                        //插入
                        //   $res = $db->where('departid', "=", $departid)->select();
                        $res = $db->insert([
                            'pid' => $pid,
                            'reason' => $reason,
                            'content' => $content,
                            'time' => $time,

                        ]);
                        resultBackJson(200, "add_ok", "");
                        //创建文件
                    } catch (Exception $e) { }
                    //resultBackJson(200, "add_ok", "");
                }
            }
        } else {
            return "<center><h1>403</h1></center>";
        }
    }
}
