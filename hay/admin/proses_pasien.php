<?php

include('confiq.php');

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $baru = $_POST['baru'];
    $positif = $_POST['positif'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];


    // buat query update
    $sql = "UPDATE korban SET baru='$baru', positif='$positif', sembuh='$sembuh', meninggal='$meninggal' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman admin.php
        header('Location: update.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>