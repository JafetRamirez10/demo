<?php 
	session_start();
	require_once 'models/users.models.php';
	require_once 'controllers/users.controller.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin - Facturelo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</head>
<body id="LoginForm">
	<div class="container">
<h1 class="form-heading">Admin Facturelo</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Ingrese el Usuario y Contraseña</p>
   </div>
    <form id="Login" method="post">

        <div class="form-group">


            <input type="text" class="form-control" id="inputUser" name="User" placeholder="Usuario" required>

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contraseña" required>
            <?php 
            	if(isset($_GET['error'])){
    				echo "<div class='alert alert-danger' role='alert'>
  							El usuario o contraseña es incorrecto
							</div>";
    			}
             ?>
        </div>
        <div class="forgot">
        <!--<a href="reset.html">Forgot password?</a>-->
</div>
        <button type="submit" name="enterUser" class="btn btn-primary">Ingresar</button>

    </form>

    <?php
    	$signIn= new usersController();
    	$signIn->ValidationUser();


    ?>
    </div>
<p class="botto-text"> Diseño Facturelo</p>
</div></div></div>
</body>
</html>