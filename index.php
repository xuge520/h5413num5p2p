<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
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
    <link href="dist/css/index.css" rel="stylesheet">
</head>
<body>
<?php
	include_once("header.php");
?>
<!--轮播图-->
<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/banner01.jpg">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="images/banner02.jpg">
            <div class="carousel-caption">
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
<div class="container" id="feature">
<!--网站特色-->
    <div class="featureone col-lg-4 col-md-4 col-xs-12">
         <p>投资理财</p>
         <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益</p>
    </div>
    <div class="featureone col-lg-4 col-md-4 col-xs-12">
         <p>投资理财</p>
         <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益</p>
    </div>
    <div class="featureone col-lg-4 col-md-4 col-xs-12">
         <p>投资理财</p>
         <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益</p>
    </div>
</div>
<!--投资信息列表-->
<div class="container">
	<div class="panel panel-default">
  <div class="panel-heading" id="infoTitle">
  	<h3>进行中借款</h3>
  	<p><a href="#">进入投资列表</a></p>
  </div>
 <table class="table table-hover">
      <thead>
        <tr>
          <th>借款人</th>
          <th class="hideen">借款标题</th>
          <th>年利率</th>
          <th>金额</th>
          <th class="hideen">还款方式</th>
          <th>进度</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">张三</th>
          <td class="hideen">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2,000.00</td>
          <td class="hideen">按月分期还款</td>
          <td>78.00%</td>
          <td><button type="button" class="btn btn-danger">查看</button></td>
        </tr>
        <tr>
          <th scope="row">李四</th>
          <td class="hideen">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2,000.00</td>
          <td class="hideen">按月分期还款</td>
          <td>78.00%</td>
          <td><button type="button" class="btn btn-danger">查看</button></td>
        </tr>
        <tr>
          <th scope="row">王五</th>
           <td class="hideen">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2,000.00</td>
          <td class="hideen">按月分期还款</td>
          <td>78.00%</td>
          <td><button type="button" class="btn btn-danger">查看</button></td>
        </tr>
      </tbody>
    </table>
</div>
</div>
<!--资讯-->
<div class="container">
	<div class="panel infobox panel-default col-lg-6 col-md-6 col-xs-12">
		  <div class="panel-heading newsTitle">
		  	<h3>企业最新资讯</h3>
		  	<p><a href="#">更多资讯</a></p>
		  </div>
           <ul>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  </ul>
    </div>
    <div class="panel infobox panel-default col-lg-6 col-md-6 col-xs-12">
		  <div class="panel-heading newsTitle">
		  	<h3>用户反馈</h3>
		  	<p><a href="#">更多资讯</a></p>
		  </div>
           <ul>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  </ul>
    </div>
    <div class="panel infobox panel-default col-lg-6 col-md-6 col-xs-12">
		  <div class="panel-heading newsTitle">
		  	<h3>理财经验</h3>
		  	<p><a href="#">更多资讯</a></p>
		  </div>
           <ul>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  </ul>
    </div>
    <div class="panel infobox panel-default col-lg-6 col-md-6 col-xs-12">
		  <div class="panel-heading newsTitle">
		  	<h3>活动分享</h3>
		  	<p><a href="#">更多资讯</a></p>
		  </div>
           <ul>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  	<li>
		  		<p>央视力挺互联网金融<span>发表日期:2018-08-02</span></p>
		  	</li>
		  </ul>
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