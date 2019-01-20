<?php 
Class Connection{

	public static function ConectDB(){
		$db="localhost";
		$dbname="admin_facturelo";
		$user="root";
		$pwd="";

		$link = new PDO("mysql:host=localhost;dbname=admin_facturelo","root","");
		// $link->exec("set names utf8");
		return $link;
	}
}



 