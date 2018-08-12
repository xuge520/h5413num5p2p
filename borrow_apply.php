<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>借款信息</title>
    <!--视口-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--兼容低版本浏览器-->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- 引入bootstrapvalidator -->
    <link rel="stylesheet" href="./lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css">
    <!--引入bootstrap样式-->
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--引入自定义样式-->
    <link href="dist/css/min/borrow_apply.min.css" rel="stylesheet">
   
</head>

<body>
    <!-- 头部 -->
    <?php
	include_once("header.php");
?>
    <!-- 内容区域 -->
    <div class="container main-container">
        <div class="main-subContainer">
            <div class="col-sm-3 left-nav col-xs-3">
                <ul class="list-group left-sidebar">
                    <li class="list-group-item">
                        <a href="#" class="mainclass">投资项目</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="mainclass">借款项目</a>
                        <ul class="list-group-sub" style="display:block">
                            <li>
                                <a href="#">申请借款</a>
                            </li>
                            <li>
                                <a href="#">借款项目</a>
                            </li>
                            <li>
                                <a href="#">已还项目</a>
                            </li>
                            <li>
                                <a href="#">进行中的项目</a>
                            </li>
                            <li>
                                <a href="#">逾期项目</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="mainclass">我的账户</a>
                        <ul class="list-group-sub">
                            <li>
                                <a href="#">账户姓名</a>
                            </li>
                            <li>
                                <a href="#">实名认证</a>
                            </li>
                            <li>
                                <a href="#">银行卡管理</a>
                            </li>
                            <li>
                                <a href="#">登录记录</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="mainclass">资产详情</a>
                        <ul class="list-group-sub">
                            <li>
                                <a href="#">账户流水</a>
                            </li>
                            <li>
                                <a href="#">充值记录</a>
                            </li>
                            <li>
                                <a href="#">提现记录</a>
                            </li>
                            <li>
                                <a href="#">收款明细</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="./userEdulevel.php" class="mainclass">个人资料</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9 right-contain col-xs-6">
                <div class="rightside-tips">
                    <button class="btn btn-primary btn-xs btn-switch">菜单切换</button>
                    <h3>信用借款</h3>
                    <p>
                        <span class="text-info">授信额度：</span>
                        <span class="text-danger">2000 </span>
                        <span class="text-info">可借金额：</span>
                        <span class="text-danger">2000</span>
                    </p>
                </div>
                <div class="panel rightside-panel">
                    <div class="panel-heading">
                        <h3>借款信息
                            <label class="label label-primary">信用标</label>
                        </h3>
                    </div>
                    <div class="panel-body rightside-panel-body">
                        <form id="borrowForm" method="post" class="form-horizontal" >
                            <div class="borrow-form-tips col-sm-offset-7 col-sm-4 col-xs-offset-1 col-xs-10">
                                    <h4>相关费用</h4>
                                    <p>
                                        <span class="text-info">利息</span>
                                        <span>--</span>
                                    </p>
                                    <p>
                                        <span class="text-info">奖金</span>
                                        <span>--</span>
                                    </p>
                                    <p>
                                        <span class="text-info">管理费</span>
                                        <span>--</span>
                                    </p>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-12 control-label">借款项目</label>
                                <div class="col-sm-3 col-xs-7 input-box">
                                    <select class="form-control" name="borrowType">
                                        <option value="1">信用贷</option>
                                        <option value="2">房易贷</option>
                                        <option value="3">车易贷</option>
                                    </select>
                                    <span class="unit"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-12 control-label">借款金额</label>
                                <div class="col-sm-3 col-xs-7 input-box">
                                    <input type="text" name="borrowAmount" class="form-control">
                                    <span class="unit">元</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-12 control-label">借款利息</label>
                                <div class="col-sm-3 col-xs-7 input-box">
                                    <input type="text" name="currentRate" class="form-control">
                                    <span class="unit">%</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-12 control-label">借款期限</label>
                                <div class="col-sm-3 col-xs-7 input-box">
                                    <select class="form-control" name="monthes2Return">
                                        <option value="1">1</option>
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                    </select>
                                    <span class="unit">月</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">还款方式</label>
                                <div class="col-sm-5 paystyle">
                                    <input type="radio" name="repayment" value="按月分期"> 按月分期
                                    <input type="radio" name="repayment" value="按月到期"> 按月到期
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-12 control-label">最小投标</label>
                                <div class="col-sm-3 col-xs-7 input-box">
                                    <input type="text" name="minAmount" class="form-control">
                                    <span class="unit">元</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-12 control-label">投标奖金</label>
                                <div class="col-sm-3 col-xs-7 input-box">
                                    <input type="text" name="rewardAmount" class="form-control">
                                    <span class="unit">元</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-xs-12 control-label">招标天数</label>
                                <div class="col-sm-3 col-xs-7 input-box">
                                    <select class="form-control" name="disableDays">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <span class="unit">天</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">借款标题</label>
                                <div class="col-sm-6">
                                    <input type="text" name="borrowTitle" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    借款描述
                                </label>
                                <div class="col-sm-6">
                                    <textarea name="description" rows="4" class="form-control" style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">提交申请</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
 <!-- 引入登录状态验证的js -->
 <script src="./src/javascript/checkState.js"></script>
<!--引入js-->
<script src="dist/js/index.min.js" type="text/javascript"></script>
<script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
<script src="./src/javascript/borrow_apply.js"></script>
</html>

</html>