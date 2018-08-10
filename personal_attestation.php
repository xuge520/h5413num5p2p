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
    <link href="dist/css/personal_ attestation.css" rel="stylesheet">
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
		  <div class="panel-heading">实名验证</div>
		   <div class="panel-body">
		   	<p class="tltle">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
	        <form class="form-horizontal">
	        	<div class="form-group">
	        	  <label class="col-sm-3  control-label um">用户名</label><p class="username">小强</p>
	        	  </div>
				  <div class="form-group">
				    <label for="realname" class="col-sm-3 control-label">姓 &nbsp; &nbsp;名</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="realname" placeholder="请输入姓名">
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="sex" class="col-sm-3 control-label">性 &nbsp; &nbsp;别</label>
				    <div class="col-sm-9">
				      <select name="sex" id="sex">
				      	<option value="男">男</option>
				      	<option value="女">女</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="paper" class="col-sm-3 control-label">证件类型</label>
				    <div class="col-sm-9">
				      <select name="paper" id="paper">
				      	<option value="身份证">身份证</option>
				      	<option value="驾驶证">驾驶证</option>
				      	<option value="军官证">军官证</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="paperNum" class="col-sm-3 control-label">证件号码</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="paperNum" placeholder="请输入证件号码">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="birthday" class="col-sm-3 control-label">证件号码</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="birthday" placeholder="请输入出生日期">
				    </div>
				  </div>
				   <div class="form-group">
				    <label for="address" class="col-sm-3 control-label">证件地址</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="address" placeholder="请输入证件地址">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-3 col-sm-10">
				      <button type="submit" class="btn btn-primary">提交验证</button>
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
<!--获取个人信息-->
<script src="src/javascript/attestation.js" type="text/javascript"></script>
</html>