$("#msg").click(function () {
	$.ajax({
		url:"https://api.sendgrid.com/api/mail.send.json",
		type:"POST",
		dataType:"json",
		data:{
			
		},
		success:function (data) {
			console.log(data);
		}
		
		
	})
});