<?php
    
//integrasi koneksi
require_once('connetion.php');

// buat database baru


 // buat database baru
 $sql = "creat database nokensoft";
 if ($conn->query($sql) === true) {
    echom "Database berhasil dubuatkan";

 } else {
    echo "Database tidak berhasil dibuatkan"
 }


?>