<?php
namespace app\admin\controller;


use think\Controller;
use think\Session;
use think\Cookie;

class Index extends Controller
{

    public function index()
    {
        if (isAuthority() == 1) {
            return view("index/index");
        } 
        else  return "<center><h1>403</h1></center>";
       
    }
}
