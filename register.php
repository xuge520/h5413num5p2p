<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--兼容低版本浏览器-->
		<!--[if lt IE 9]>
		<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--引入bootstrap样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/dist/css/bootstrap.css"/>
		<!--引入bootstrapvalidator核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css"/>
		<!--引入自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/userRegLogin.min.css"/>
	</head>
	<body>
		<?php
		include_once ("header.php");
		?>

		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					用户注册
				</div>
				<div class="panel-body">
					<form id="loginReg" method="post">
						<div class="form-group">
							<label for="username">账号</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="请输入账号">
						</div>
						<div class="form-group">
							<label for="password1">密码</label>
							<input type="password" class="form-control" name="password1" id="password1" placeholder="请输密码">
						</div>
						<div class="form-group">
							<label for="password2">确认密码</label>
							<input type="password" class="form-control" name="password2" id="password2" placeholder="请确认密码">
						</div>
						<div class="form-group">
							<label for="realname">姓名</label>
							<input type="text" class="form-control" name="realname" id="realname" placeholder="请输入您的姓名">
						</div>
						<div class="form-group">
							<label for="mobile">手机号码</label>
							<input type="text" class="form-control" name="mobile" id="mobile" placeholder="手机号码">
						</div>
						 <div class="form-group">
					    <label>性别</label>
					    <label class="radio-inline">
						  <input type="radio" name="sex" value="男" checked="checked">男
						</label>
						<label class="radio-inline">
						  <input type="radio" name="sex" value="女">女
						</label>
					  </div>
						<div class="form-group">
							<label>
							<input name="isAgree" type="checkbox">
							我同意用户注册协议 </label>
						</div>
						<button type="submit" class="btn btn-danger">
						确认注册
						</button>
						<span>
							<a href="login.php">已有账号,立即登陆</a>
						</span>
					</form>
				</div>
			</div>
		</div>

		<?php
		include_once ("footer.php");
		?>
		<!--注册成功或者失败的模态框-->
		<div class="modal fade" id="regLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">标题</h4>
		      </div>
		      <div class="modal-body">
		                          内容
		      </div>
		      <div class="modal-footer">
		        <button id="btnskip" type="button" class="btn btn-default" data-dismiss="modal">立即跳转</button>
		        <!--<button id="btnskip" type="button" class="btn btn-primary">立即跳转</button>-->
		      </div>
		    </div>
		  </div>
		</div>
		<!--引入jquery-->
		<script src="lib/jQuery/jquery-1.11.0.js"></script>
		<!--引入bootstrapjs-->
		<script src="lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<!--引入bootstrapvalidator核心js-->
    	<script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js" type="text/javascript"></script>
		  <!--自定义特效-->
    	<script src="src/javascript/index.js" type="text/javascript" charset="utf-8"></script>
    	<script src="dist/js/formValidator.min.js" type="text/javascript"></script>
		
	</body>
</html>
