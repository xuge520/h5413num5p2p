<?php
    //打开session
    session_start();
   //接受数据
   $username=$_SESSION["username"];
   $data=["username"=>$username];
   echo json_encode($data);
?>