<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="css/Log_Reg.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="registrate.php" method="POST" >
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="usuario" placeholder="Nombre de Usuario">
					<input type="email" name="correo" placeholder="Correo electronico">
					<input type="password" name="password" placeholder="Contraseña">
                    <input type="password" name="password2" placeholder="Repita su contraseña">
					<input type="submit" placeholder="Registrarse">

                  
				</form>
			</div>

			<div class="login">
				<form action="login.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="CorUs" placeholder="Nombre de usuario o Correo">
					<input type="password" name="password" placeholder="contraseña">
					<input type="submit" placeholder="Iniciar Sesion">
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
