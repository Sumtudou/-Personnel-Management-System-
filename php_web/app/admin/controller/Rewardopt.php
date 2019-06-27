<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Rewardopt extends Controller
{
   
    public function index()
    {
        if (isAuthority()) {
          $reward = $this->operate_display();
           return view("index/reward_opt", [
            "reward"  => $reward,
        ]);
        } else  return "<center><h1>403</h1></center>";
    }


    public function delete()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';   //pid
        if ($id != NULL) {
            if (isAuthority()) {
                $db = Db::name("reward");
                $res = $db->where("no", "=", $id)->delete();

                $reward = $this->operate_display();
                return view("index/reward_opt", [
                 "reward"  => $reward,
             ]);
            } else  return "<center><h1>403</h1></center>";
        }
    }

    /*******************方法函数 */
    function operate_display()
    {
        $db = Db::name("reward");
        $reward = $db->order('no asc')->select();   //返回二维数组
        //  dump($reward);
        $len = count($reward);
        $dbp = Db::name("puser");
        for ($i = 0; $i < $len; $i++) {
            $resn = $dbp->where("pid", "=", $reward[$i]["pid"])->find();   //找到姓名赋值
            $reward[$i]["name"] = $resn["pname"];
        }
        return $reward;
    }
}
