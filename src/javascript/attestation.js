$(function(){
	$.get("api/attestation.php",function(result){
		//console.log(result);
	   $(".username").text(result.username);
		
	},"json")
})
