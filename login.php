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
  $email_or_username = $_POST['CorUs'];
  $password = $_POST['password'];
  $hashpass = hash('sha512', $password);

  // Check if the email/username exists in the database
  $query = "SELECT * FROM usuarios WHERE correo = $1 OR user = $1";
  $result = pg_query_params($conn, $query, array($email_or_username));

  if (!$result) {
    echo "Login failed";
  } else {
    $row = pg_fetch_assoc($result);

    // Verify the password
    if (password_verify($hashpass, $row['password'])) {
      echo "Login successful";
    } else {
      echo "Login failed";
    }
  }
}

// Close the database connection
pg_close($conn);
?>