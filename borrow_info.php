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
    <link href="dist/css/min/borrow_info.min.css" rel="stylesheet">
</head>

<body>
    <!-- 头部 -->
    <?php
	include_once("header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        借款人
                    </div>
                    <div class="panel-body">
                        <img class="userheadpic" src="images/head_icon.jpg">
                        <p class="text-center username">
                            zs
                        </p>
                        <br>
                        <div>
                            籍贯： 四川 - 成都
                        </div>
                        <div>
                            专职客服：
                            <a href="#">码妹妹</a>
                        </div>
                        <div>
                            认证信息：

                            <label class="label label-success">
                                <span class="glyphicon glyphicon-user"></span>
                            </label>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">

                <ul class="borrow_info_mid">
                    <li>
                        <h3 class="text-blue"><i class="username">zs</i>借款
                            <small>
                                <label class="label label-primary">信</label>
                            </small>
                        </h3>
                    </li>
                    <li>借款金额
                        <span>2,000.00</span>
                    </li>
                    <li>年化利率
                        <span>10.00%</span>
                    </li>
                    <li>借款期限
                        <span>3月</span>
                    </li>
                    <li>投标奖励
                        <span>0.00</span>
                    </li>
                    <li>还款方式
                        <span>按月分期还款</span>
                    </li>
                    <li>最小投标
                        <span>20.00</span>
                    </li>
                    <li>剩余时间
                        <span></span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <ul class="borrow_info_right">
                    <li>投标总数<span>2</span></li>
                    <li>还需金额<span>0.00</span></li>
                    <li>投标进度</li>
                    <li>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h3>还款中</h3>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 借款人信息 -->
        <div class="panel panel-default borrower-info">
            <div class="panel-heading">
                <h3 class="panel-title">借款人信息</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>注册时间<span>2015-03-30</span></li>
                    <li>借款额度<span>2000</span></li>
                    <li>性别<span>男</span></li>
                    <li>年龄<span>25</span></li>
                    <li>文化层度<span>硕士研究生</span></li>
                    <li>每月收入<span>3000-4999</span></li>
                </ul>
            </div>
        </div>
        <!-- 审核人信息 -->
        <div class="panel panel-default prove-info">
            <div class="panel-heading">
                <h3 class="panel-title">审核认证信息</h3>
            </div>
            <div class="panel-body">
            <ul>
                    <li>认证时态度<span>优</span></li>
                    <li>信贷知识掌握情况<span>优</span></li>
                    <li>信贷感言<span>给我100让我度过难关</span></li>
                    <li>审核员意见<span>啊啊啊啊嗄</span></li>
                </ul>
            </div>
        </div>
        <!-- 材料信息 -->
        <div class="panel panel-default material-info">
            <div class="panel-heading">
                <h3 class="panel-title">材料信息</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>材料类型</th>
                            <th>材料数量</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">本人身份证</th>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 还款情况 -->
        <div class="panel panel-default repay-record">
            <div class="panel-heading">
                <h3 class="panel-title">还款情况</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>还款状态</th>
                            <th>最近一周</th>
                            <th>最近1月</th>
                            <th class="smallhide">最近6月</th>
                            <th class="smallhide">6个月前</th>
                            <th>总计</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">提前还款</td>
                            <td>0</td>
                            <td>0</td>
                            <td class="smallhide">0</td>
                            <td class="smallhide">0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td scope="row">准时还款</td>
                            <td>0</td>
                            <td>0</td>
                            <td class="smallhide">0</td>
                            <td class="smallhide">0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td scope="row">逾期已还</td>
                            <td>0</td>
                            <td>0</td>
                            <td class="smallhide">0</td>
                            <td class="smallhide">0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td scope="row">逾期未还</td>
                            <td>0</td>
                            <td>0</td>
                            <td class="smallhide">0</td>
                            <td class="smallhide">0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- 投标记录 -->
        <div class="panel panel-default invest-record">
            <div class="panel-heading">
                <h3 class="panel-title">投标记录</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>投标人</th>
                            <th>年利率</th>
                            <th>有效金额(￥)</th>
                            <th class="smallhide">投标时间</th>
                            <th class="smallhide">类型</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">212</td>
                            <td>10%</td>
                            <td class="quota">1,000.00</td>
                            <td class="smallhide">2016-05-11 06:42:11</td>
                            <td class="smallhide">手动投标</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>10%</td>
                            <td class="quota">1,000.00</td>
                            <td class="smallhide">2016-05-11 06:42:11</td>
                            <td class="smallhide">手动投标</td>
                        </tr>
                    </tbody>
                </table>
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
<script src="./dist/js/borrow_info.min.js"></script>

</html>

</html>