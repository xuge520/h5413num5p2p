<?php
	//引入公共连接配置
   include_once("conn.php");  
   //接收前台传过来的数据
   $username=$_POST["username"];
   $password=$_POST["password1"];
   //3. 构造sql语句
   $sqlStr="select * from userinfo where username='$username' and password='$password'";
   //执行sql语句  
   $rs=mysqli_query($conn, $sqlStr);
   
   //一个语法    查询表单的行     看是否有跟传回来的值相匹配的
   $row=mysqli_fetch_assoc($rs);
   if($row){
   	  //成功    创建一个关联数组
   	  $jsonArray=["isSuccess"=>true,"msg"=>"登录成功!"];
//	  用json格式返还给前端
	  echo json_encode($jsonArray);
	  
	  //验证用户登录成功就创建session
	  session_start(); //创建session
	  $_SESSION["username"]=$row["username"];//查询
	  $_SESSION["userId"]=$row["userid"];
   }
   else{
   	  //失败
   	  $jsonArray=["isSuccess"=>false,"msg"=>"登录失败!"];
	  echo json_encode($jsonArray);
   }
?>