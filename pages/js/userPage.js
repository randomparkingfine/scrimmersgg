$("#submit").on("click",function () {
	$.ajax({
		url:"/server/user.php",
		type:"POST",
		dataType:"json",
		data:{
			"msg":$("#message").val(),
		},
		success:function (data) {
			console.log(data);
		}
		
		
	})
});