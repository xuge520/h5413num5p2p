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
					用户登录
				</div>
				<div class="panel-body">
					<form>
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
						  <input type="radio" name="sex" value="男">男
						</label>
						<label class="radio-inline">
						  <input type="radio" name="sex" value="女">女
						</label>
					  </div>
						<div class="checkbox">
							<label>
							<input type="checkbox">
							我同意用户注册协议 </label>
						</div>
						<button type="submit" class="btn btn-danger">
						确认注册
						</button>
					</form>
				</div>
			</div>
		</div>

		<?php
		include_once ("footer.php");
		?>
		<!--引入jquery-->
		<script src="lib/jQuery/jquery-1.11.0.js"></script>
		<!--引入bootstrapjs-->
		<script src="lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		  <!--自定义特效-->
    <script src="src/javascript/index.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
