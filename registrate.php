<?php
$host = "localhost";
$dbname = "mves";
$user = "postgres";
$password = "info2023";

// Connect to the database
$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");
if (!$conn) {
  echo "Error de conexion";
  exit;
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['usuario'];
  $email = $_POST['correo'];
  $password = $_POST['password'];
  $confirm_password = $_POST['password2'];

  // Validate input data
  if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "Please fill in all fields";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
  } elseif (strlen($password) < 6) {
    echo "Password must be at least 6 characters long";
  } elseif ($password != $confirm_password) {
    echo "Password and confirmation password do not match";
  } else {
    // Hash the password for security
    $hashed_password = hash($password, 'sha512');

    // Insert user data into the database
    $query = "INSERT INTO usuarios(user, correo, pass) VALUES ($1, $2, $3)";
    $result = pg_query_params($conn, $query, array($username, $email, $hashed_password));

    if (!$result) {
      echo "Registration failed";
    } else {
      echo "User registered successfully";
    }
  }
}

// Close the database connection
pg_close($conn);
?>