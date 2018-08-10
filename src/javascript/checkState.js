$(function(){
	//发起请求
	$.get("api/checkState.php",function(resultData){
		if(resultData.isSuccess){
			$("#username").text(resultData.username);
		}else{
			$('#myModal').modal("show");
			var num=$("#num").text();
			var timeID=setInterval(function(){
				num--;
				$("#num").text(num);
				if(num==0){
					clearInterval(timeID);
					location.href="login.php";
				}
			},1000)
		}           
	},"json")
})
