<?php   
echo "Salam , test la connection <br/>";
include('conn.php');

// Check connection
if ($conn->connect_error) {
    die("erreur de connection: " . $conn->connect_error);
  }
  echo "connection  succef nadi waldi ";
?>