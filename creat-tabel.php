<?php
// integrasi koneksi
    require_once('connektion.php');

    // membuat tabel baru di database
    // sql to create table
$sql = "CREATE TABLE team (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_depan VARCHAR(30) NOT NULL,
    nama_belakang VARCHAR(30) NOT NULL,
    alamat_email VARCHAR(50),
created_table.php TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
?>