<?php 
	if( !($_SESSION['id_usuario']=='182036404') ){
		//header('Location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Tarea3 BD - JIM 2014</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/default.css">
	</head>
	<body>
		<nav>
			<h1>JIM 2014</h1>
			<ul>
				<li><img src="images/logo.jpg" height="80"></li>
				<li><a href="index.php">Mis Datos</a></li>
				<li><a href="index.php">Coordinadores de Area</a></li>
				<li><a href="index.php">Noticias</a></li>
				<li><a href="index.php">Postulantes</a></li>
				<li><a href="index.php">Colaboradores Seleccionados</a></li>
				<li><a href="index.php">Cerrar Sesion</a></li>
			</ul>
			<div id="divider"></div>
		</nav>
		
	</body>
	
</html>