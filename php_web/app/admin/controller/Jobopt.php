<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;
use think\Db;

class Jobopt extends Controller
{
    public function index()
    {
        if (isAuthority()) {
            $db = Db::name("jobchange");
            $jobchange = $db->order('no asc')->select();

            return view("index/job_opt", [
                "jobchange"  => $jobchange,
            ]);
        } else  return "<center><h1>403</h1></center>";
    }

   
}
