<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Adminopt extends Controller
{
    public function index()
    {
        if (isAuthority()) {
           $db= Db::name("padmin");
            $res=$db->select();
          //  dump($res);
           return view("index/admin_opt", [
            "res"  => $res,
        ]);
        } else  return "<center><h1>403</h1></center>";
    }


    public function delete()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : '';   //pid
        if ($id != NULL) {
            if (isAuthority()) {

                $idd =explode('.',$id); 

                $db = Db::name("padmin");
                $res = $db->where("id", "=", $idd[0])->delete();
                $resn=$db->select();
               // dump($res);
              //  dump($idd[0]);


                return view("index/admin_opt", [
                    "res"  => $resn,
                ]);
            } else  return "<center><h1>403</h1></center>";
        }
    }

}
