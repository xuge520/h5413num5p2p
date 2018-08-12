$.get('./api/checkState.php',function(result){
    //头部导航，登录后显示
    console.log(result);
    var htmlStr = ''
    if(result.isSuccess){
        console.log(1);
        htmlStr = ` 
            <li><a href="#"><span class="fa fa-sign-in"></span>${result.username}</a></li>
            <li><a href="#"><span class="fa fa-credit-card"></span>赶快充值</a></li>
            <li><a href="#"><span class="fa fa-sign-out"></span>注销</a></li>
        `
    }else{
        htmlStr = `   
            <li><a href="./login.php"><span class="fa fa-user-circle"></span>立即登录</a></li>
            <li><a href="./register.php"><span class="fa fa-sign-in"></span>立即注册</a></li>
        `
    }
    $('#homePage').after(htmlStr);
},'json');
//改样式
var reqPath = location.href;
var mid = reqPath.split('=')[1];
$('#nav_menu ul li').eq(mid).addClass('active').siblings('li').removeClass('active');