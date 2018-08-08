$(document).ready(function() {
	//验证的表单  （就是表单名字）
    $('#loginReg')
    //调用bootstrapValidator（）这个方法  里面是个对象
        .bootstrapValidator({
            message: 'This value is not valid',//表单出错的全局提示
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',//验证通过
                invalid: 'glyphicon glyphicon-remove',//验证失败
                validating: 'glyphicon glyphicon-refresh'//正在验证
            },
            //对应的表单元素验证
            fields: {
            	//用户名验证
                username: {
                    message: '用户名验证失败',//验证失败的提示信息
                    validators: {
                        notEmpty: {//非空验证
                            message: '用户名不能为空'//错误的局部提示
                        },
                        //长度验证
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '请输入6到18位字符'
                        },                              
                    }
                },
                //密码验证
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '请输入6到18位字符'
                        }, 
                    }
                },
                //确认密码的验证
                password2: {
                    validators: {
                        notEmpty: {
                            message: '请确认密码'
                        },
                        identical: {
	                        field: 'password1',
	                        message: '两次密码输入不一致'
	                    },
                    }
                },
            //姓名验证   
            	realname: {
                    validators: {
                        notEmpty: {
                            message: '姓名不能为空'
                        },                     
                    }
                },
            //手机号码验证	
            	mobile: {
                    validators: {
                        notEmpty: {
                            message: '号码不能为空'
                        },
                        regexp: {
				          regexp: /^[1][3,4,5,6,7,8,9][0-9]{9}$/,
				          message: '请输入正确的手机格式'
	                    }
                    }
               },
            //协议验证
            isAgree: {
                    validators: {
                        notEmpty: {
                            message: '请同意协议'
                        },                     
                    }
                },
            }
        })
        //验证成功的处理函数   error错误的函数
        .on('success.form.bv', function(e) {
            // ajax   阻止他的默认行为
            e.preventDefault();
            // 获取表单验证的实例
            var $form = $(e.target);
            // 获取表单验证的实例
            var bv = $form.data('bootstrapValidator');
            
            //1. ajax  数据提交到后台的位置
            var postUrl='api/userAdd.php';
            
            //2. 提交到后台的数据     使用了serialize方法 一次性获取了表单的数据
            var postData=$form.serialize();
            console.log(postData);
            
            
            $.post(postUrl, postData, function(result) {
//              console.log(result);
				//根据后台返回的数据处理前端逻辑
				if(result.isSuccess){//如果成功就弹出蒙层
					$('#regLoginModal').modal('show');//modal  一个显示蒙层的方法
					$('.modal-title').text('注册提示');
					$('#regLoginModal .modal-body').html("<span class='glyphicon glyphicon-ok'></span>"+result.msg+"&emsp;&emsp;&emsp;&emsp;等待 <span id='count'>5</span> 秒后自动跳转");
					$('#btnskip').click(function(){
						location.href="login.php";
					})
					//定义计时器
					var num=5;
					var timeid=setInterval(function(){
						num--;
						$("#count").text(num);//把倒数的值赋值到html中
						if(num==0){
							//当值等于0时     停止解释   并跳转到登陆页面
							clearInterval(timeid);
	            			location.href="login.php";
						}
					},1000);	
				}else{
					$('#regLoginModal').modal('show');
					$('.modal-title').text('注册提示');
					$('#regLoginModal .modal-body').html('注册失败');
				}
            }, 'json');
        });
        
        
        
        //验证的表单  （就是表单名字）
        //登陆页面的验证
    $('#checkLogin')
    //调用bootstrapValidator（）这个方法  里面是个对象
        .bootstrapValidator({
            message: 'This value is not valid',//表单出错的全局提示
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',//验证通过
                invalid: 'glyphicon glyphicon-remove',//验证失败
                validating: 'glyphicon glyphicon-refresh'//正在验证
            },
            //对应的表单元素验证
            fields: {
            	//用户名验证
                username: {
                    message: '用户名验证失败',//验证失败的提示信息
                    validators: {
                        notEmpty: {//非空验证
                            message: '用户名不能为空'//错误的局部提示
                        },
                        //长度验证
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '请输入6到18位字符'
                        },                              
                    }
                },
                //密码验证
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '请输入6到18位字符'
                        }, 
                    }
                },
            }
        })
        //验证成功的处理函数   error错误的函数
        .on('success.form.bv', function(e) {
            // ajax   阻止他的默认行为
            e.preventDefault();
            // 获取表单验证的实例
            var $form = $(e.target);
            // 获取表单验证的实例
            var bv = $form.data('bootstrapValidator');
            
            //1. ajax  数据提交到后台的位置
            var postUrl='api/checkLogin.php';
            
            //2. 提交到后台的数据     使用了serialize方法 一次性获取了表单的数据
            var postData=$form.serialize();
            console.log('发送到后台的数据',postData);
            
            
            $.post(postUrl, postData, function(result) {
            	
            	console.log('后台返回',result);
            	//设置模态框上面的文字
            	 $("#regLoginModal .modal-title").text("用户登录提示");
                if(result.isSuccess){
                	//登录成功设置模态框的内容
                	$("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>"+result.msg+"等待 <span id='count'>5</span> 秒后自动跳转");
                	//显示模态框
                	$("#regLoginModal").modal("show");
                	//倒计时效果的实现
                	var num=5;
                	var timeid=setInterval(function () {
                		num--;
                		$("#count").text(num);
                		if(num==0){
                			clearInterval(timeid);
                			location.href="invest.php";
                		}
                	},1000);
                }
                else{
                	//登录失败
                	$("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>"+result.msg);
                	$("#regLoginModal").modal("show");
                	console.log(result.msg); //前端人员解决问题查看原因               	
                }
          	
          	
            }, 'json');
        });
});