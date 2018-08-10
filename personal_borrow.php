<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心-账户信息</title>
    <!--视口-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--兼容低版本浏览器-->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--引入bootstrap样式-->
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--引入自定义样式-->
    <link href="dist/css/personal_borrow.css" rel="stylesheet">
</head>
<body>
<?php
	include_once("header.php");
?>
<!--个人中心-->
<div class="container" id="personalBox">
	<?php
		include_once("personalTmp.php")
	?>
	<!--右侧内容-->
    <div class="panel panel-default col-lg-9 col-md-9 col-sm-9 col-xs-12" id="rightBox">
		  <div class="panel-heading">借款项目</div>
		   <div class="panel-body">
		    <table class="table table-hover">
      <thead>
        <tr>
          <th>标题</th>
          <th class="hid">时间</th>
          <th>借款金额(元)</th>
          <th class="hid">期限</th>
          <th class="hid">利率</th>
          <th>状态</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">江湖救急</th>
          <td class="hid">2018-08-09</td>
          <td>2000</td>
          <td class="hid">12</td>
          <td class="hid">12%</td>
          <td>招标中</td>
        </tr>
      </tbody>
    </table>
		  </div>
    </div>  
</div>
<?php
	include_once("footer.php");
?>
</body>
<!--引入jquery-->
<script src="lib/jQuery/jquery-1.11.0.js"></script>
<!--引入bootstrapjs-->
<script src="lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<!--引入js-->
<script src="dist/js/index.min.js" type="text/javascript"></script>
</html>