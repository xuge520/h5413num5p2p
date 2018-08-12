$.get('./api/checkState.php',function(result){
    console.log(result);

    if(result.isSuccess){
        $('.username').text(result.username);
    }else{
        window.location.href = './login.php';
    }
},'json')