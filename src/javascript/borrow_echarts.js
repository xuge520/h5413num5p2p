
var myChart = echarts.init(document.getElementById('main'));
option = {
    title: {
        text: '用户学历分布',
        subtext: '',
        x: 'center'
    },
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data: ['专科', '博士', '硕士', '本科', '高中及以下']
    },
    toolbox: {
        show: true,
        feature: {
            mark: { show: false },
            dataView: { show: false, readOnly: false },
            magicType: {
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
            restore: { show: true },
            saveAsImage: { show: true }
        }
    },
    calculable: true,
    series: [
        {
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%', '60%'],
            data: [
            ]
        }
    ]
};
$.get("api/getUserEdu.php", function (eduData) {
    console.log("后台获取的学历数据", eduData);

    //把后端提供的数据动态设置到配置对象中
    option.series[0].data = eduData;

    //使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

    //隐藏默认的loading动画
    myChart.hideLoading();
}, "json");