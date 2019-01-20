<?php 
require_once "connection.php";
Class usersModels{
	public function ValidationUser($data,$table){
		$stmt = Connection::ConectDB()->prepare("SELECT * FROM $table WHERE users =:users AND password=:password");	
		$stmt->bindParam(":users", $data["user"]);
		$stmt->bindParam(":password", $data["password"]);
		$stmt->execute();
		if($stmt->rowCount()==0){
			return 0;
		}else{
			#fetch(): Obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetch();
		$stmt->close();
		}
		
	}
	public function NewUserAjax($data){
		$url="http://ea3dcr.com/api.php";
		$cul=curl_init($url);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
		$dat=array(
			"w"=>"users",
			"r"=>"users_register",
			"fullName"=>$data["UserComplete"],
			"userName"=>$data["User"],
			"InfoExtra"=>$data["InfoExtra"],
			"pwd"=>$data["newPassword"],
			"email"=>$data["newEmail"]	
			);
		//$data = http_build_query($data);
      curl_setopt($curl, CURLOPT_POST, true);

      curl_setopt($curl, CURLOPT_POSTFIELDS, $dat);

      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
      
      curl_setopt($curl, CURLOPT_USERAGENT,  "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36");
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);


       $response = curl_exec($curl);
   
       $err = curl_error($curl);



        $response = json_decode($response);
     	//echo $response->sessionkey;
       $err;
       curl_close($curl);
      if ($err) {
          return false;
        } else {

     return $response;
	}
	}
}


 
