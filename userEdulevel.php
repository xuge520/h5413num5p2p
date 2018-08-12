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
                        <a href="#" class="mainclass">个人资料</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9 right-contain col-xs-6">
                <div id="main" style="height:400px;">

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
<script src="./lib/echarts/echarts-all.js"></script>
<script src="./src/javascript/borrow_apply.js"></script>
<script>
    var myChart = echarts.init(document.getElementById('main'));
    option = {
        title : {
            text: '用户学历分布',
            subtext: '',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient : 'vertical',
            x : 'left',
            data:['专科','博士','硕士','本科','高中及以下']
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: false},
                dataView : {show: false, readOnly: false},
                magicType : {
                    show: true, 
                    type: ['pie', 'funnel'],
                    option: {
                        funnel: {
                            x: '25%',
                            width: '50%',
                            funnelAlign: 'left',
                            max: 1548
                        }
                    }
                },
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'访问来源',
                type:'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                ]
            }
        ]
    };
    $.get("api/getUserEdu.php",function (eduData) {
			console.log("后台获取的学历数据",eduData);
			
			//把后端提供的数据动态设置到配置对象中
			option.series[0].data=eduData;
			
			//使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
            
            //隐藏默认的loading动画
            myChart.hideLoading();
		},"json");
</script>
</html>

</html>