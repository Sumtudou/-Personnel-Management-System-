<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Trainopt extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            $db = Db::name("train");
            $train = $db->order('no asc')->select();

            return view("index/train_opt", [
                "train"  => $train,
            ]);
        } else  return "<center><h1>403</h1></center>";
    }


    public function delete()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';   //pid
        if ($id != NULL) {
            if (isAuthority()) {
                $db = Db::name("train");
                $res = $db->where("no", "=", $id)->delete();
                $train = $db->order('no asc')->select();
                return view("index/train_opt", [
                    "train"  => $train,
                ]);
            } else  return "<center><h1>403</h1></center>";
        }
    }
   
}
