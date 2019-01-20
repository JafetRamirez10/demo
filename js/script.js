
$(document).ready(function(){
	//INGRESAR NUEVO USUARIO
	$('#SubmitCreateUser').click(function(){
		newUserComplete = $("#newUserComplete").val();
		newUser=$("#newUser").val();
		InfoExtra=$("#InfoExtra").val();
		newPassword=$("#newPassword").val();
		newEmail=$("#newEmail").val();
		 var dat={
		 	'userComplete':newUserComplete,
		 	'NewUser':newUser,
		 	'InfoExtra':InfoExtra,
		 	'newPassword':newPassword,
		 	'newEmail':newEmail
		 }
		  $.ajax({
    url:"ajax/newUser.ajax.php",
    type:"post",
    data:dat,
    dataType: "json",
    success:function(respuesta){
    	console.log(respuesta);
    }
		 
	// 	 $.ajax({
	// 	 	url:'ajax/newUser.ajax.php',
	// 	 	 type:"post",
 //   			 data:data,
 //   		 success:function(response){
 //   		 		console.log(response);
	// 		 }

	// });
});
});
});