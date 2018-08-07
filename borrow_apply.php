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
    <div class="container">
        <div class="col-sm-3">
            <ul class="list-group left-sidebar">
                <li class="list-group-item">
                    <a href="#">投资项目</a>
                </li>
                <li class="list-group-item">
                    <a href="#">借款项目</a>
                    <ul class="list-group-sub">
                        <li>
                            <a href="#">借款项目</a>
                        </li>
                        <li>
                            <a href="#">还款明细</a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <a href="#">我的账户</a>
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
                    <a href="#">资产详情</a>
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
                    <a href="#">个人资料</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9">
            <div class="rightside-tips">
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
                    <form class="form-horizontal">
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
                            <label class="col-sm-3 col-xs-12 control-label">借款金额</label>
                            <div class="col-sm-3 col-xs-7 input-box">
                                <input type="text" name="amount" class="form-control">
                                <span class="unit">元</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-12 control-label">借款利息</label>
                            <div class="col-sm-3 col-xs-7 input-box">
                                <input type="text" name="interest" class="form-control">
                                <span class="unit">%</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-12 control-label">借款期限</label>
                            <div class="col-sm-3 col-xs-7 input-box">
                                <select class="form-control" name="deadline">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <span class="unit">月</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">还款方式</label>
                            <div class="col-sm-5 paystyle">
                                <input type="radio" name="repayment" value="option1"> 按月分期
                                <input type="radio" name="repayment" value="option1"> 按月到期
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-12 control-label">最小投标</label>
                            <div class="col-sm-3 col-xs-7 input-box">
                                <input type="text" name="minbid" class="form-control">
                                <span class="unit">元</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-12 control-label">投标奖金</label>
                            <div class="col-sm-3 col-xs-7 input-box">
                                <input type="text" name="bidbonus" class="form-control">
                                <span class="unit">元</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-12 control-label">招标天数</label>
                            <div class="col-sm-3 col-xs-7 input-box">
                                <select class="form-control" name="invitedays">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <span class="unit">天</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">借款标题</label>
                            <div class="col-sm-6">
                                <input type="text" name="title" class="form-control">
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