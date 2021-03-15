<?php
   include('confiq.php');
   $nama = $_POST['nama'];
   $nomer = $_POST['nomer'];
   $email = $_POST['email'];
   $doa = $_POST['doa'];
   $donasi = $_POST['donasi'];

 
     if(!$nama || !$nomer || !$donasi || !$email || !$doa ) {
       echo "<div align='center'> Masih ada data yang kosong! <a href='index.php'>Back</a>";
     } 
     else {
       $data = "INSERT INTO donasi (nama, telp, email, doa, donasi) VALUES('$nama','$nomer','$email','$doa','$donasi')";
       $simpan = mysqli_query($db, $data);
       if($simpan) {
         echo "<div align='center'>Terima Kasih Telah Berdonasi, donasi anda sangat bermanfaat untuk para tenaga medis <a href='index.php'>Kembali</a></div>";
       } 
       else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
?>