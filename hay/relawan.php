<?php include('confiq.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/script.js"></script>
    <title>Kita bersatu</title>
</head>

<style>
    #atas button:hover{
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
    }

    #atas button{
        background-color: black;
        color: rgb(255, 254, 254);
    }
</style>

<body>

<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-xl">
        <a class="navbar-brand" href="index.php">Kita bersatu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donasi.php">Donasi</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="relawan.php">Relawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="berita.php">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang.php">Tentang Kami</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<!-- Navbar -->

<!-- Relawan -->
    <div id="isi1">
        <div class="container">
            <img src="assets/gambar/gambar1.png" width="700px" height="380px">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="pill" href="#detail"><b>Detail</b></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#donatur"><b>Daftar Relawan</b></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"  data-toggle="modal" href="#exampleModal1"><b>Registrasi Relawan</b></a>
                    </li>
                </ul>

            <div class="tab-content">
                <div id="detail" class="container tab-pane active"><br>
                    <p><b>Yuk bergabung dengan program relawan Kampanye Sosial Melawan COVID19 #DirumahAja #BarengSocialConnect!</b></p>
                    <h5>Detail Aktivitas</h5>
                    <p>tugas para Relawan :</p>
                    <ol>
                        <li>Menyebarkan informasi tentang kampanye #DirumahAja #BarengSocialConnect di Instagram pribadi selama 4 hari dengan materi dari Social Connect.</li>
                        <li>Menyebarkan informasi tentangbahaya penyebaran Virus Corona yang masif</li>
                        <li>Memberikan laporan setelah masa kampanye selesai untuk mendaptakn sertifikat partisipasi</li>
                        <li>Memiliki waktu luang sebanyak 1-2 jam setiap hari</li>
                        <li>Bersedia mengikuti peraturan dan ketentuan dari Social Connect, jika ditemukan melanggar maka akan dikeluarkan dari grup dan tidak dihitung sebagai campaigner</li>
                        <li>Bersikap sopan, mau belajar, dan tidak kasar selama berinteraksi secara online di grup whatsapp</li>
                        <li>Bersedia untuk langsung terjun ke lapangan untuk membagi-bagikan bantuan ke petugas medis ataupun ke masyarakat umum</li>
                    </ol>
                    <h4><b>Kami butuh bantuan tenaga Saudara-Saudara untuk mencegah penyebaran Virus Corona, Mari jadikan diri kita bermanfaat untuk orang lain. Ayok jadi Relawan dengan cara klik <u><a data-toggle="modal" href="#exampleModal1">Registrasi Relawan</a></u></b></h4>
                </div>
                <div id="donatur" class="container tab-pane fade">
                    <p><b>Daftar Donatur</b></p>
                    <br>
                    <table class="table table-responsive">
                        <thead>
                          <tr>
                            <th style="width:50px;">No</th>
                            <th style="width:150px;">Nama</th>
                            <th style="width:150px;">Email</th>
                            <th style="width:180px;">No.Telp</th>
                            <th style="width:300px;">Alamat</th>
                            <th style="width:150px;">Jenis Kelamin</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php

                            $id=1;
                            $query = mysqli_query($db, "SELECT * FROM relawan");

                            while($relawan = mysqli_fetch_array($query)){
                                echo "<tr>";

                                echo "<td>".$id++."</td>";
                                echo "<td>".$relawan['nama']."</td>";
                                echo "<td>".$relawan['email']."</td>";
                                echo "<td>".$relawan['telp']."</td>";
                                echo "<td>".$relawan['alamat']."</td>";
                                echo "<td>".$relawan['jenis_kelamin']."</td>";
                            }
                          ?>
                        </tbody>
                    </table>
                    <p><b>Total Relawan : <?php echo mysqli_num_rows($query) ?></b></p>
                </div>
            </div>
        </div>
    </div>
<!-- Relawan -->

<!-- Modal Relawan -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><img src="assets/gambar/icon/icon kunci.png" width="30px">Mendaftar Relawan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" action="aksi_relawan.php">
                    <div class="form-group">
                      <label for="nama"><img src="assets/gambar/icon/icon login.png" width="20px"> Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="email"><img src="assets/gambar/icon/email.png" width="20px"> Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="nomer"><img src="assets/gambar/icon/telp.png" width="20px"> Nomer Hp</label>
                      <input type="text" class="form-control" id="nomer" placeholder="Masukan Nomer HP" name="nomer">
                    </div>
                    <div class="form-group">
                      <label for="umur"><img src="assets/gambar/icon/umur.png" width="20px"> Umur Sekarang</label>
                      <input type="number" class="form-control" id="umur" placeholder="Masukan Umur" name="umur">
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin"><img src="assets/gambar/icon/jenis_kel.png" width="20px"> Jenis kelamin</label>
                      <input type="text" class="form-control" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin" name="jenis_kelamin">
                    </div>
                    <div class="form-group">
                      <label for="alamat"><img src="assets/gambar/icon/icon login.png" width="20px"> Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
                    </div>
                      <button type="submit" name="register" class="btn btn-success btn-block"><img src="assets/gambar/icon/icon masuk.png" width="20px">Mendaftar</button>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<!-- Modal Relawan -->

<!-- about -->
  <div id="about">
    <div class="container footer">
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1>Kita bersatu</h1>
        <h2>About Us</h2>
        <p><img src="assets/gambar/icon/telp.png" width="20px"> Telp : 081225083950</p>
        <p><img src="assets/gambar/icon/email.png" width="20px"> Email : Kitabersatu@gmail.com</p>
        <p><img src="assets/gambar/icon/fb.png" width="20px"> Faceboook : Kita bersatu</p>
        <p><img  src="assets/gambar/icon/ig.jpg" width="20px"> Instagram : Kita bersatu</p> 
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h4>LOKASI KAMI</h4> 
		    <p>Jalan Kaligawe Raya, Semarang, Jawa Tengah, Indonesia.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3944161964123!2d110.44571621402092!3d-6.962712794969786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f347b8408e6f%3A0xcd909b3458fce524!2sJl.%20Sawah%20Besar%20VIII%20No.57%2C%20Kaligawe%2C%20Kec.%20Gayamsari%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050164!5e0!3m2!1sid!2sid!4v1586672588577!5m2!1sid!2sid" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
        </div>
      </div>
    </div>
  </div>
<!-- about -->

<!-- kaki -->
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">Kita bersatu.COM © 2020</h5>
    </div>
  </div>
<!-- kaki -->
    
</body>
</html>