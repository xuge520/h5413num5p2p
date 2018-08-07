<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我要借款</title>
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
    <link href="dist/css/borrow.css" rel="stylesheet">
</head>

<body>
    <!-- 头部 -->
    <?php
	include_once("header.php");
?>
    <div class="container borrow">
        <div class="panel col-sm-4  col-xs-12">
            <div class="panel-heading">
                <h3 class="panel-title">信用贷</h3>
            </div>
            <div class="panel-body">
                <p>可借金额<i> ¥ 2,000.00</i></p>
                <p><a href="#">申请条件</a></p>
                <p>仅限成都地区</p>
                <ul>
                    <li>填写基本资料</li>
                    <li>身份认证</li>
                    <li>视频认证</li>
                </ul>
                <p><a href="#">立刻申请</a></p>
            </div>
        </div>
        <div class="panel col-sm-4  col-xs-12">
            <div class="panel-heading">
                <h3 class="panel-title">房易贷</h3>
            </div>
            <div class="panel-body">
                <p>可借金额<i> ¥ 2,000.00</i></p>
                <p><a href="#">申请条件</a></p>
                <p>仅限成都地区</p>
                <ul>
                    <li>填写基本资料</li>
                    <li>身份认证</li>
                    <li>视频认证</li>
                </ul>
                <p><a href="#">立刻申请</a></p>
            </div>
        </div>
        <div class="panel col-sm-4  col-xs-12">
            <div class="panel-heading">
                <h3 class="panel-title">车易贷</h3>
            </div>
            <div class="panel-body">
                <p>可借金额<i> ¥ 2,000.00</i></p>
                <p><a href="#">申请条件</a></p>
                <p>仅限成都地区</p>
                <ul>
                    <li>填写基本资料</li>
                    <li>身份认证</li>
                    <li>视频认证</li>
                </ul>
                <p><a href="#">立刻申请</a></p>
            </div>
        </div>
    </div>
    <!--底部-->
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
</html>