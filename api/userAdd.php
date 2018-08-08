<?php
	//引入数据库连接
   include_once("./conn.php");
   
   //接收表单变量的值
   $username=$_POST["username"];
   $password=$_POST["password1"];
   $realname=$_POST["realname"];
   $mobile=$_POST["mobile"];
   $sex=$_POST["sex"];
   
   // 构造sql语句     将前台的数据写入到后台数据库
   $sqlStr="insert into userinfo(username,password,realname,mobile,sex) values('$username','$password','$realname','$mobile','$sex')";
	//执行sql语句
	$result=mysqli_query($conn, $sqlStr);

	//根据结果返回数据给前端
	 if($result){
   	  //如果想直接返回json到前端，必须先定义关联数组，然后再使用json_encode(关联数组)
   	  $jsonArray=["isSuccess"=>true,"msg"=>"恭喜您注册成功!"];
	  echo json_encode($jsonArray);
   }
   else{
   	  //echo "{'isSuccess': false,'msg': '用户注册失败!'}";
   	  $jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败! 原因:".mysqli_error($conn)];
	  echo json_encode($jsonArray);
   }
?>