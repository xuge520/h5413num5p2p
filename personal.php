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
    <link href="dist/css/personal.css" rel="stylesheet">
</head>
<body>
<?php
	include_once("header.php");
?>
<!--个人中心-->
<div class="container" id="personalBox">
	<div class="leftNav col-lg-3 col-md-3 col-xs-3">
		<div class="list-group">
		  <a href="#" class="list-group-item titleactive disabled">
		    投资项目
		  </a>
         </div>
         <div class="list-group">
		  <a href="#" class="list-group-item titleactive disabled">
		    借款项目
		  </a>
		  <a href="#" class="list-group-item">借款项目</a>
		  <a href="#" class="list-group-item">还款明细</a>
         </div>
        <div class="list-group">
		  <a href="#" class="list-group-item titleactive disabled">
		    我的账户
		  </a>
		  <a href="#" class="list-group-item active">账户信息</a>
		  <a href="#" class="list-group-item">实名认证</a>
		  <a href="#" class="list-group-item">银行卡管理</a>
		  <a href="#" class="list-group-item">管理记录</a>
         </div>

          <div class="list-group">
		  <a href="#" class="list-group-item titleactive disabled">
		    资产详情
		  </a>
		  <a href="#" class="list-group-item">账户流水</a>
		  <a href="#" class="list-group-item">充值明细</a>
		  <a href="#" class="list-group-item">提现记录</a>
		  <a href="#" class="list-group-item">收款明细</a>
         </div>

          <div class="list-group">
		  <a href="#" class="list-group-item titleactive disabled">
		  个人资料
		  </a>
		
         </div>
	</div>
	<div class="panel panel-default col-lg-8 col-md-8 col-xs-12">
		  <div class="panel-body">
		    Basic panel example
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