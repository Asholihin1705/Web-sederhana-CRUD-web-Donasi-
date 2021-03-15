<?php include('confiq.php'); 

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list_produk.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM relawan WHERE id=$id";
$query = mysqli_query($db, $sql);
$relawan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body>
    <div class="pushmenu-push">
        <nav class="pushmenu pushmenu-left">
            <h3><img src="img/home.png" width="30px"> Menu</h3>
                <li><a href="index.php"><b>Home</a></li>
                <li><a href="list_produk.php"><b>Daftar Produk</a></li>
                <li><a href="tambah_produk.php">Tambah Produk</a></li>
                <li><a href="admin_tamu.php">Daftar Pesan</a></li>
                <li><a href="admin.php">Daftar Admin</b></a></li>
        </nav>
    

    <script>
$(document).ready(function () {
    $menuLeft = $('.pushmenu-left');
    $nav_list = $('#nav_list');
    $nav_list.click(function(){
        $(this) .toggleClass('active') ;
        $('.pushmenu-push').toggleClass('pushmenu-push-toright');
        $menuLeft.toggleClass('pushmenu-open');
        });
    });
    </script>

    <?php 
        session_start();
	?>

    <div class="container-fluid">
        <div class="main">
            <section class="buttonset">
                <div id="nav_list">Menu</div>
            </section>
            <div class="row bawah">
                <h2>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h2>
                <a href="logout.php">
                    <button type="submit">Logout</button></a>
            </div>
        </div>
    </div>


    <div class="container">
        <h2><img src="img/home.png" width="40px">Homepage Edit Data Relawan</h2>
        <div class="isi">
            <br>

            <form action="proses_edit.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $relawan['id'] ?>" />
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $relawan['nama'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telp" class="col-sm-2 col-form-label">Nomer Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telp" id="telp" value="<?php echo $relawan['telp'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" id="email" value="<?php echo $relawan['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat"  id="alamat" value="<?php echo $relawan['alamat'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis_kelamin"  id="jenis_kelamin" value="<?php echo $relawan['jenis_kelamin'] ?>">
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="simpan" class="btn btn-danger">Simpan</button>
                        </div>
                    </div>
                </form>

        </div>
    </div>

    
</body>
</html>