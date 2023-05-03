<?php
include 'db.php';
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
    $hashed_password = hash('sha512', $password);

    // Insert user data into the database
    $query =  pg_send_query($conn, "INSERT INTO usuarios (user, correo, pass) VALUES ('$username', '$email', '$hashed_password')");
    $res1 = pg_get_result($conn);
    echo pg_result_error (pg_get_result($conn));

    if ($query > 0) {
      echo pg_result_error_field($res1, PGSQL_DIAG_SQLSTATE);
      echo $query;
      echo "Registro exitoso";
    } else {
      echo "User registered successfully";
      echo pg_result_error_field($res1, PGSQL_DIAG_SQLSTATE);
    }
  }
}

// Close the database connection
// pg_close($conn);
?>