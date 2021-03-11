$(document).ready(function()
{
	$("#register").click(function(){
		$.ajax({
			url:"registerdb.php",
			type:"post",
			data:$("#reg").serialize(),
			success:function(d)
			{
				alert(d);
				$("#reg")[0].reset();
			}
		});
	});
});
$("#login").click(function(){

	$.ajax({
		url:"logdb.php",
		type:"post",
		data:$("#form").serialize(),
		success:function(d)
		{
			alert(d);
			$("#form")[0].reset();
			//window.location.href="view.php";
			//$("#view1").show();
		}
	});

	$.ajax({
		url:"view1.php",
		type:"post",
		data:$("#form").serialize(),
		success:function(d)
		{
			alert(d);
			//$("#output").load("view.php");
			$("#form")[0].reset();
			//window.location.href="view.php";
		}
	});

});

