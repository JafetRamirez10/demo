<?php 

Class usersController{
	public function ValidationUser(){
		if(isset($_POST["enterUser"])){
			$data= array("user"=>$_POST['User'],
						  "password"=>$_POST['password']);
			$response=usersModels::ValidationUser($data,'users');
			
			if($response!=0){
				$_SESSION['userName']='';
				echo '<script>
						location.href="start.php";
				</script>';
			}else{
				echo '<script>
						location.href="index.php?error";
					</script>';
			}
		}
	}
	public static function NewUserAjax($data){
		$response=usersController::NewUserAjax($data);
		return $response;
}
}

 
