<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
// 应用公共文件
use think\Session;
use think\Cookie;
use think\Db;

function backArray($imgs){
	$image = array_values(array_unique (array_diff (explode ("&",$imgs), array (""))));
	return $image;
}
function backImgNum($imgs){
	$image = array_values(array_unique (array_diff (explode ("&",$imgs), array (""))));
	return count($image);
}
function backImg($image,$id){
	if(strpos($image[$id],"uploads")){   //找upload，没找到就返回false
		
		return 
	'https://'.config("oss_config")['bucket'].".oss-cn-shanghai.aliyuncs.com/".substr($image[$id],strpos($image[$id],"uploads"));
	}else{
		return $image[$id];
	}
    
}
function backDate($Date){
	$data =	explode(":",$Date);
return ($data[0].":".$data[1]);
}

function resultBackJson($status,$msg,$data){
    $callback = isset($_GET["callback"])?$_GET["callback"]:"";
	$result = array(
		'status'   => $status,
		'msg'      => $msg,
		'data'     => $data,
	 );
	if($callback==""){
		 echo  json_encode($result);
	}else{
		 echo  $callback . '(' .json_encode($result). ')'; 
	}
}

/**
 * 
 * 授权认证
 */
function isAuthority(){
      
	$is_author=false;
 
	$s=Session::get("Sauthor");
	$c=Cookie::get("Cauthor");
	//$k=Session::get("Skey");
   if($s==$c&&($s!=""&&$c!="")){
	   $is_author=true;
   }
   return  $is_author;
}
/*
function operate_display(){
	$db = Db::name("reward");
	$reward = $db->order('no asc')->select();   //返回二维数组
  //  dump($reward);
	$len = count($reward);
	$dbp = Db::name("puser");
	for ($i = 0; $i < $len; $i++) {
		$resn = $dbp->where("pid", "=", $reward[$i]["pid"])->find();   //找到姓名赋值
		$reward[$i]["name"] = $resn["pname"];
	}
	return view("index/reward_opt", [
		"reward"  => $reward,
	]);
}*/