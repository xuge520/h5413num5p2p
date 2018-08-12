<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>报表实例</title>
    <style>
        #main {
            width: 600px;
            height: 600px;
            border: 1px solid red;
            margin: 0 auto;
        }
    </style>
</head>

<body>
	<?php
		include_once("header.php");
	?>

    <div id="main">

    </div>

    
<script src="lib/jQuery/jquery-1.11.0.js"></script>
<script src="lib/echarts/echarts-all.js"></script>
    <script>
        // 基于准备好的dom，初始化echarts图表
        var myChart = echarts.init(document.getElementById('main'));
        option = {
            title: {
                text: '后台真实数据',
                subtext: '测试操作',
                x: 'center'
            },
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                x: 'left',
                data: ['博士', '硕士', '本科', '专科', '高中']
            },
            toolbox: {
                show: true,
                feature: {
                    mark: {
                        show: false
                    },
                    dataView: {
                        show: false,
                        readOnly: false
                    },
                    magicType: {
                        show: false,
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
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            calculable: true,
            series: [{
                name: '访问来源',
                type: 'pie',
                radius: '55%',
                center: ['50%', '60%'],
                data: []
            }]
        };

        $.get("api/data1.php",function(userdata){
            
            console.log('后台的学历数据',userdata);
            //把接受到的值赋给data
            option.series[0].data=userdata;
            // 为echarts对象加载数据 
        	myChart.setOption(option);
        },'json');
        
        
    </script>

</body>

</html>