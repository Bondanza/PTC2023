<?php
include 'db.php';
   session_start();
   if (isset($_SESSION['login_user' ])) {
    header('Location: index.php');
  }
   if($_SERVER["REQUEST_METHOD"] == "POST") {
 

      $myusername = pg_escape_string($conn,$_POST['CorUs']);
      $password = pg_escape_string($conn,$_POST['password']); 
      $mypassword = hash('sha512', $password);

      $sql = "SELECT  usuario, correo FROM usuarios WHERE (usuario = '$myusername' OR correo = '$myusername') AND pass = '$mypassword'";
      $result = pg_query($conn,$sql);
      $row = pg_fetch_array($result,PGSQL_ASSOC);
      $count = pg_num_rows($result);

      if($count == 1) {
         $_SESSION['login_user'] = $row['usuario'];
         
         header("location: index.php");
      }else {
         echo  "Your Login Name or Password is invalid";
      }
   }
?>