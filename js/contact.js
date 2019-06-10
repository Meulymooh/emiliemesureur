$(document).ready(function(){
	$("#submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var subject = $("#subject").val();
		var comment = $("#comment").val();
		var spam = $("#spam").val();
		var dataString = '&name='+ name + '&email='+ email + '&subject='+ subject + '&comment='+ comment;
		if(name == '' || email == '' || subject == '' || comment == '')
		{
			$("#display").html("<div class='alert alert-warning'>Please fill in all fields.</div>");
		}
		else if(spam!='7')
		{
			$("#display").html("<div class='alert alert-danger'>Please answer the spam question.</div>");
		}
		else
		{
			$.ajax({
				type: "POST",
				url: "process.php",
				data: dataString,
				cache: false,
				success: function(result){
					$("#display").html(result);
				},
            	error: function (result) {
                	console.log('An error occurred.');
                	console.log(result);
            	}
			});
		}
		return false;
	});
});