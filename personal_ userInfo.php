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
    <link href="dist/css/personal_userInfo.css" rel="stylesheet">
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
		  <div class="panel-heading">个人资料</div>
		   <div class="panel-body">
	        <form class="form-horizontal">
	        	<div class="form-group">
	        	  <label class="col-sm-3  control-label um">用 户 名</label><p class="username">小强</p>
	        	  </div>
				  <div class="form-group">
				    <label class="col-sm-3  control-label um">真实姓名</label><p class="realname">小强</p>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-3  control-label um">证件号码</label><p class="paperNum">5154615651651</p>
				  </div>
				  <div class="form-group">
				    <label for="moblie" class="col-sm-3 control-label">手机号码</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="moblie" placeholder="请输入手机号码">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="ipone" class="col-sm-3 control-label">联系号码</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="ipone" placeholder="请输入联系号码">
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="educational" class="col-sm-3 control-label">证件类型</label>
				    <div class="col-sm-9">
				      <select name="educational" id="educational">
				      	<option value="初中">初中</option>
				      	<option value="中专/高中">中专/高中</option>
				      	<option value="大专">大专</option>
				      	<option value="本科">本科</option>
				      	<option value="硕士研究生">硕士研究生</option>
				      	<option value="博士研究生">博士研究生</option>
				      </select>
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="income" class="col-sm-3 control-label">个人收入</label>
				    <div class="col-sm-9">
				      <select name="income" id="income">
				      	<option value="1000以下">1000以下</option>
				      	<option value="1000元-1999元">1000元-1999元</option>
				      	<option value="2000元-2999元">2000元-2999元</option>
				      	<option value="3000元-3999元">3000元-3999元</option>
				      	<option value="4000元-4999元">4000元-4999元</option>
				      	<option value="5000元-9999元">5000元-9999元</option>
				      	<option value="10000元以上">10000元以上</option>
				      </select>
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="address" class="col-sm-3 control-label">联系地址</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="address" placeholder="请输入联系地址">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-3 col-sm-10">
				      <button type="submit" class="btn btn-primary">保存数据</button>
				    </div>
				  </div>
            </form>
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