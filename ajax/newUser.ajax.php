<?php 
	require_once "../models/users.models.php";
	require_once "../controllers/users.controller.php";
	Class AjaxUser{
		public $UserComplete;
		public $User;
		public $InfoExtra;
		public $newPassword;
		public $Email;
		public function AjaxNewUser(){
			$data=array("UserComplete"=>$this->UserComplete,
						"User"=>$this->User,
						"InfoExtra"=>$this->InfoExtra,
						"newPassword"=>$this->newPassword,
						"newEmail"=>$this->Email);
			$response=usersController::NewUserAjax($data);
			return $response;
		

		}

	}
	if (isset($_POST["userComplete"])) {
			$newUser= new AjaxUser();
			$newUser->UserComplete=$_POST["userComplete"];
			$newUser->User=$_POST["NewUser"];
			$newUser->InfoExtra=$_POST["InfoExtra"];
			$newUser->newPassword=$_POST["newPassword"];
			$newUser->Email=$_POST["newEmail"];
			$newUser->AjaxNewUser();
	}

 ?>