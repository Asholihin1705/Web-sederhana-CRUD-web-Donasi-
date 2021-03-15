<?php
   include('confiq.php');
   $username = $_POST['username'];
   $password = $_POST['password'];

 
     if(!$username || !$password ) {
       echo "<div align='center'> Masih ada data yang kosong! <a href='admin.php'>Back</a>";
     } 
     else {
       $data = "INSERT INTO admin (username, password) VALUES('$username','$password')";
       $simpan = mysqli_query($db, $data);
       if($simpan) {
         echo "<div align='center'>Terima Kasih Telah Menjadi Admin Sistem ini<a href='admin.php'>Kembali</a></div>";
       } 
       else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
?>