<?php
   //打开session
   session_start();
    //判断登录的用户名是否存在session中
   if(isset($_SESSION["username"])){
   	  $result=["isSuccess"=>true,"userId"=>$_SESSION["userId"],"username"=>$_SESSION["username"]];	
   	  echo json_encode($result);
   }
   else{
   	  $result=["isSuccess"=>false,"msg"=>"验证登录失败!"];	
   	  echo json_encode($result);
   }
?>