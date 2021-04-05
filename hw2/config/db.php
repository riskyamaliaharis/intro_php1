<?php 
 $server = 'localhost';
 $db_name = 'db_toko';
 $password = '';
 $username = 'root';

 $conn = new mysqli($server, $username, $password, $db_name);

//  if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";
?>