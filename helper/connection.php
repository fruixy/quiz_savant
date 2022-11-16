<?php $pdo = new PDO('mysql:host=127.0.0.1;dbname=Savant', 'savant', 'gtrnet'); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
?>
