<?php include('confiq.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
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
                <li><a href="home.php"><b>Home</a></li>
                <li><a href="list_donasi.php"><b>Daftar Donasi</a></li>
                <li><a href="list_relawan.php">Daftar Relawan</a></li>
                <li><a href="update.php">Update Jumlah Pasien</a></li>
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
        <h2><img src="img/home.png" width="40px">Homepage Daftar Relawan</h2>
        <div class="isi">
    <br>

    <table class="table table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php

                $no=1;
                $query = mysqli_query($db, "SELECT * FROM relawan");

                while($relawan = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$no++."</td>";
                    echo "<td>".$relawan['nama']."</td>";
                    echo "<td>".$relawan['email']."</td>";
                    echo "<td>".$relawan['telp']."</td>";
                    echo "<td>".$relawan['jenis_kelamin']."</td>";
                    echo "<td>".$relawan['alamat']."</td>";

                    echo "<td>";
                    echo "<a href='hapus.php?no=".$relawan['id']."' data-toggle='tooltip' title='Hapus!'><img src='img/icon hapus.png' width='25px'></a>";
                    echo " | ";
                    echo "<a href='form_edit.php?id=".$relawan['id']."' data-toggle='tooltip' title='Edit!'><img src='img/icon edit.png' width='25px'></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <h5><b>Total Relawan : <?php echo mysqli_num_rows($query) ?></b></h5>

        </div>
    </div>
    

</body>
</html>