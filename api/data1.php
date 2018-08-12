<?php
   include_once('./conn.php');
    // 构造sql语句
    $sqlStr="select * from userinfo";
    // 执行sql语句
     $rs=mysqli_query($conn, $sqlStr);

    // 定义二维数组对象         本质就是一个对象数组      里面是对象    对象
    $userdata=[
        ['name'=>"博士",'value'=>0],
        ['name'=>"硕士",'value'=>0],
        ['name'=>"本科",'value'=>0],
        ['name'=>"专科",'value'=>0],
        ['name'=>"高中",'value'=>0]
    ];

    // $row   --php中   表示表格的行         循环 查询表中行中列名字为usergroup的   有一个 就加1
    while ($row=mysqli_fetch_assoc($rs)) {
        if($row["education"]=="博士"){
            $userdata[0]["value"]+=1;
        }else if($row["education"]=="硕士"){
            $userdata[1]["value"]+=1;
        }else if($row["education"]=="本科"){
            $userdata[2]["value"]+=1;
        }else if($row["education"]=="专科"){
            $userdata[3]["value"]+=1;
        }else if($row["education"]=="高中"){
            $userdata[4]["value"]+=1;
        }
    }

     //把二维数组转换为一个对象数组返回给前端
   echo json_encode($userdata);
?>