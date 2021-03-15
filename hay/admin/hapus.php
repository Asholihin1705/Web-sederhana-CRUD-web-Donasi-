<?php

include('confiq.php');

if( isset($_GET['id']) || isset($_GET['no']) || isset($_GET['nomer']) ){

    // ambil id dari query string
    $id = $_GET['id'];
    $no = $_GET['no'];
    $nomer = $_GET['nomer'];

    // buat query hapus
    $sql = "DELETE FROM donasi WHERE id=$id";    
    $data = "DELETE FROM relawan WHERE id=$no";
    $data1 = "DELETE FROM admin WHERE id=$nomer";

    $query = mysqli_query($db, $sql);
    $apus = mysqli_query($db, $data);
    $apus1 = mysqli_query($db, $data1);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_donasi.php');
    } 
    elseif($apus){
        header('Location: list_relawan.php');
    }
    elseif($apus1){
        header('Location: admin.php');
    }
    else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>