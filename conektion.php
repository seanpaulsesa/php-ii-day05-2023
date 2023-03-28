<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "hingland_roastery";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password);
 
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully";

 // buat database baru
 $sql = "creat database nokensoft";
 if ($conn->query($sql) === true) {
    echom "Database berhasil dubuatkan";

 } else {
    echo "Database tidak berhasil dibuatkan"
 }


 ?>
