<?php
   include('confiq.php');
   $nama = $_POST['nama'];
   $nomer = $_POST['nomer'];
   $email = $_POST['email'];
   $alamat = $_POST['alamat'];
   $jenis_kelamin = $_POST['jenis_kelamin'];

 
     if(!$nama || !$nomer || !$alamat || !$email ) {
       echo "<div align='center'> Masih ada data yang kosong! <a href='index.php'>Back</a>";
     } 
     else {
       $data = "INSERT INTO relawan (nama, telp, email, alamat, jenis_kelamin) VALUES('$nama','$nomer','$email','$alamat','$jenis_kelamin')";
       $simpan = mysqli_query($db, $data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Relawan Sukses, Terima Kasih <a href='index.php'>Kembali</a></div>";
       } 
       else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
?>