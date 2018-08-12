//左侧导航栏效果
$(document).ready(function () {
    $('.mainclass').click(function () {
        $(this).closest('li').find('ul').slideToggle();
        $(this).closest('li').siblings('li').find('ul').slideUp()
    });

    var key = false;
    $('.btn-switch').on('click', function () {
        if (key) {
            key = false;
            $('.main-subContainer').removeClass('active');
        } else {
            key = true;
            $('.main-subContainer').addClass('active');
        }
    })
    //滑动事件
    var startDisX
    $('.main-container').on('touchstart', function (e) {
        startDisX = e.originalEvent.changedTouches[0].clientX;
    })
    $('.main-container').on('touchend', function (e) {
        var endDisX = e.originalEvent.changedTouches[0].clientX;
        //滑动的最终距离
        var moveLength = endDisX - startDisX;
        if (moveLength >= 50) {
            $('.main-subContainer').addClass('active');
        } else if (moveLength <= -50) {
            $('.main-subContainer').removeClass('active');
        }
    })

    //右侧验证
    $('#borrowForm')
        //调用验证方法，验证方法中是一个配置对象
        .bootstrapValidator({
            message: 'This value is not valid', //表单出错的全局提示信息
            //表单验证的状态提示图标
            /*feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //通过
                invalid: 'glyphicon glyphicon-remove', //失败
                validating: 'glyphicon glyphicon-refresh' //正在验证中
            },*/
            //对那些表单元素做验证
            fields: {
                //借款金额
                borrowAmount: {
                    validators: {
                        //非空
                        notEmpty: {
                            message: '必填'
                        },
                        //数字
                        digits: {
                            message: '只能填写数字'
                        }
                    }
                },
                //借款利息
                currentRate: {
                    validators: {
                        //非空
                        notEmpty: {
                            message: '必填'
                        },
                        regexp: {
                            regexp: /^\d+(\.\d+)?$/i,
                            message: '只能填写数字。'
                        }
                    }
                },
                //最小投标
                minAmount: {
                    validators: {
                        //非空
                        notEmpty: {
                            message: '必填'
                        },
                        //数字
                        digits: {
                            message: '只能填写数字'
                        }
                    }
                },
                // //最大投标
                // maxAmount: {
                //     validators: {
                //         //非空
                //         notEmpty: {
                //             message: '必填'
                //         },
                //         //数字
                //         digits: {
                //             message: '只能填写数字'
                //         }
                //     }
                // },
                //投标奖金
                rewardAmount: {
                    validators: {
                        //非空
                        notEmpty: {
                            message: '必填'
                        },
                        regexp: {
                            regexp: /^\d+(\.\d+)?$/i,
                            message: '只能填写数字。'
                        }
                    }
                },
                //借款标题
                borrowTitle: {
                    validators: {
                        //非空
                        notEmpty: {
                            message: '借款标题必填'
                        }
                    }
                },
                //借款描述
                description: {
                    validators: {
                        //非空
                        notEmpty: {
                            message: '必填'
                        },
                        stringLength: {
                            min: 10,
                            max: 500,
                            message: '长度不能小于10位或超过500位'
                        }
                    }
                }
            }
        })
        //success验证成功后的处理函数，error验证出错的事件
        .on('success.form.bv', function (e) {
            // 由于使用ajax提交表单注册，所有此处阻止表单提交的默认行为
            e.preventDefault();
            // 获取验证的表单实例
            var $form = $(e.target);
            // 获取表单验证实例
            var bv = $form.data('bootstrapValidator');

            // 使用ajax发送提交表单的数据请求
            var postUrl = "api/borrowAdd.php";
            var postData = $form.serialize();
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post(postUrl, postData, function (result) {
                console.log(result);
                //根据ajax返回的结果处理前端的业务逻辑 {isSuccess: true, msg: "用户注册成功!"}
                if (result.isSuccess) {
                    alert(result.msg + "请等待平台审核通过!");
                    location.href = "invest.php?mid=1"; //本来应该跳转到会员中心当前用户申请的项目列表
                }
                else {
                    alert(result.msg);
                    return false;
                }
            }, 'json');
        });
});