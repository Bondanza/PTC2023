<?php
include 'db.php';
?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email_or_username = $_POST['CorUs'];
  $password = $_POST['password'];
  $hashpass = hash('sha512', $password);

  // Check if the email/username exists in the database
  $query = "SELECT * FROM usuarios WHERE correo = $email_or_username OR user = $email_or_username";
  $result = pg_query_params($conn, $query);

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