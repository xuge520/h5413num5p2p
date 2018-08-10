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
<!--模态框-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title">温馨提示</h4>
      </div>
      <div class="modal-body">
        <p><img src="images/danger.jpg" class="modelImg"/></p>
        <div class="modalText">
        	<P>Sorry,您没有权限访问！</P>
        	<p><span id="num">5</span>秒后将自动跳转到登录页面</p>
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">关闭</button>
        <button type="button" class="btn btn-danger" id="open">立即登录</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--模态框结束-->
<!--个人中心-->
<div class="container" id="personalBox">
	<?php
		include_once("personalTmp.php")
	?>
	<!--右侧内容-->
	<div class="panel panel-default col-lg-9 col-md-9 col-sm-9 col-xs-12" id="rightBox">
		  <div class="panel-body">
		  	<!--头部个人信息-->
		    <div class="page-header clearfix">
			  <div class="headerleft"><img src="images/head_icon.jpg"/></div>
			  <div class="headerright">
			  	<p><span>昵&nbsp; &nbsp;称：</span>源码时代教育</p>
			  	<p>用户名：<span id="username">小强</span></p>
			  	<p>最后登录时间：<span id="oldTime">2018-08-06 09:45</span></p>
			  </div>
			</div>
			<div class="money row">
				<p class="col-lg-4 col-md-6 col-xs-12">总&nbsp; 金 &nbsp;额：<span>10000</span><span>元</span></p>
				<p class="col-lg-4 col-md-6 col-xs-12">可用金额：<span>10000</span><span>元</span></p>
				<p class="col-lg-4 col-md-6 col-xs-12">冻结金额：<span>10000</span><span>元</span></p>
			</div>
			<div class="btnGroup text-center">
                <a href="#" class="btn btn-primary btn-lg" role="button">账户充值</a>
                <a href="#" class="btn btn-danger btn-lg" role="button">账户提现</a>
			</div>
			<div class="iconGroup clearfix">
				<div class="iconone col-lg-4 col-md-6 col-xs-12">
					<img src="images/shiming.png"/>
					<div class="centertext">
						<h4>实名认证</h4>
					    <p>未认证 <a href="personal_attestation.php">马上认证</a></p>
					</div>
					<p class="hiddenText">实名认证之后才能在平台投资</p>
				</div>
				<div class="iconone col-lg-4 col-md-6 col-xs-12">
					<img src="images/shouji.jpg"/>
					<div class="centertext">
						<h4>手机认证</h4>
					    <p>已认证 <a href="#">查看</a></p>
					</div>
					<p class="hiddenText">可以收到系统操作信息,并增加使用安全性</p>
				</div>
				<div class="iconone col-lg-4 col-md-6 col-xs-12">
					<img src="images/youxiang.jpg"/>
					<div class="centertext">
						<h4>邮箱认证</h4>
					    <p>已认证 <a href="#">查看</a></p>
					</div>
					<p class="hiddenText">您可以设置邮箱来接收重要信息</p>
				</div>
				<div class="iconone col-lg-4 col-md-6 col-xs-12">
					<img src="images/baozhan.jpg"/>
					<div class="centertext">
						<h4>vip会员</h4>
					    <p>普通用户 <a href="#">查看</a></p>
					</div>
					<p class="hiddenText">VIP会员，让你更快捷的投资</p>
				</div>
			</div>
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
<!--引入公共js-->
<script src="dist/js/index.min.js" type="text/javascript"></script>
<!--引入用户验证-->
<script src="src/javascript/checkState.js" type="text/javascript"></script>
<!--引入该页面js-->
<script src="src/javascript/personal.js" type="text/javascript"></script>
</html>