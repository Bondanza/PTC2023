<?php session_start();

$host = 'localhost';
$dbname = 'mves';
$user = 'postgres';
$password = 'info2023';



$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	try {
		$dbh = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}

	$statement = $conexion->prepare('
		SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
	);
	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

require 'views/login.view.php';

?>