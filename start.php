
<!DOCTYPE html>
<html>
<head>
	<title>Start Facturelo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<!-- 	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script src="js/script.js"></script>
</head>
<body >
	<div id="app" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="#">Facturelo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="#">Generar Token</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Menú
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Generar Token</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
	<div class="container">
		<div class="row">
			<div class="col-12 mt-4  d-flex flex-wrap  justify-content-center">
				<div class="col-3 menuOption mr-3"><a data-toggle="modal" data-target="#exampleModalLong">
					<h1 class="text-center"><i class="fas fa-user-plus"></i></h1>
					<h2 class="text-center">Crear Usuario</h2></a>
				</div>
				<div class="col-3 menuOption mr-3"><a href="">
					<h1 class="text-center"><i class="fas fa-sign-in-alt"></i></h1>
					<h2 class="text-center">Iniciar Sesion</h2>
				 </a></div>
				 <div class="col-3 menuOption mr-3"><a href="">
					<h1 class="text-center"><i class="fas fa-certificate"></i></h1>
					<h2 class="text-center">Certificado UP</h2>
				 </a></div>
				 <div class="col-3 menuOption mr-3 mt-4"><a href="">
					<h1 class="text-center"><i class="fas fa-certificate"></i></h1>
					<h2 class="text-center">Token Stag</h2>
				 </a></div>
				 <div class="col-3 menuOption mr-3 mt-4"><a href="">
					<h1 class="text-center"><i class="fas fa-user-cog"></i></h1>
					<h2 class="text-center">Actualizar Usuario</h2>
				 </a></div>
				 <div class="col-3 menuOption mr-3 mt-4"><a href="">
					<h1 class="text-center"><i class="fas fa-user-times"></i></h1>
					<h2 class="text-center">Elimninar Usuario</h2>
				 </a></div>
				 <div class="col-3 menuOption mr-3 mt-4"><a href="">
					<h1 class="text-center"><i class="fas fa-key"></i></h1>
					<h2 class="text-center">Olvido su Contraseña</h2>
				 </a></div>
			</div>
			
	</div>
  </div>

  <?php 
  	include 'views/modales/createUser.php';
   ?>
</body>
</html>
