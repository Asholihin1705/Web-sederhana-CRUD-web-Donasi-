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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donasi.php">Donasi</a>
          </li>
          <li class="nav-item">
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

<!-- Corousel -->
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/gambar/dokter3.jpeg" width="100%" height="500"> 
      </div>
      <div class="carousel-item">
        <img src="assets/gambar/dokter4.png" width="100%" height="500">   
      </div>
      <div class="carousel-item">
        <img src="assets/gambar/dokter2.jpg" width="100%" height="500">   
      </div>
      <div class="carousel-item">
        <img src="assets/gambar/dokter1.jpeg" width="100%" height="500"> 
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
<!-- Corousel -->

<!-- Atas -->
    <div id="atas">
      <div class="container">
        <div class="row">
          <?php
            $query = mysqli_query($db,"SELECT SUM(donasi) as jumlah FROM donasi");
            $donatur = mysqli_query($db, "SELECT * FROM donasi");
            $relawan = mysqli_query($db, "SELECT * FROM relawan");

            $data = mysqli_fetch_array($query);
          ?>
          <div class="col-md-4">
            <h3>Total Donasi</h3>
            <h4>Rp <?php echo number_format($data['jumlah']);?></h4>
          </div>
          <div class="col-md-4">
            <h3>Total Donatur</h3>
            <h4><?php echo mysqli_num_rows($donatur); ?></h4>
          </div>
          <div class="col-md-4">
            <h3>Total Relawan</h3>
            <h4><?php echo mysqli_num_rows($relawan); ?></h4>
          </div>
        </div>
      </div>
    </div>
<!-- Atas -->

<!-- Berita -->
    <div id="isi">
      <div class="container">
        <h3 class="text-center">Berita Terbaru</h3>
        <hr>
        <div class="grid-container">
                <div class="grid-item">
                  <div class="thumbnail"><img src="assets/gambar/korban.jpg" width="180px">
                  <div class="caption">
                    <h3>Jumlah Korban virus covid 19 secara Global</h3>
                    <p></p>
                    <br><a href="https://www.worldometers.info/coronavirus/" class="btn btn-default" role="button">Lanjut Baca</a>
                  </div>
                  </div>
                </div>
                <div class="grid-item">
                  <div class="thumbnail"><img src="assets/gambar/indonesia.jpg" width="180px">
                  <div class="caption">
                    <h3>Jumlah yang terkena virus corona di Indonesia</h3>
                    <p></p>
                    <a href="https://www.cnnindonesia.com/nasional/20200423115426-20-496461/update-corona-23-april-7775-positif-647-meninggal" class="btn btn-default" role="button">Lanjut Baca</a>
                  </div>
                  </div>
                </div>
                <div class="grid-item">
                  <div class="thumbnail"><img src="assets/gambar/pasien.jpg" width="180px">
                  <div class="caption">
                    <h4>Akibat pasien berbohong, 46 dokter dinyatakan positif virus corona</h4>
                    <br>
                    <a href="https://www.indozone.id/news/PjsJO0/akibat-pasien-berbohong-46-dokter-rs-kariadi-semarang-dinyatakan-positif-covid-19" class="btn btn-default" role="button">Lanjut Baca</a>
                  </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
<!-- Berita -->

<!-- Donasi -->
    <div id="donasi">
      <div class="container">
        <h4>Siap Donasi Hari Ini</h4>
        <p>Mari berbagi dengan membantu penggalangan dana untuk para dokter yang berjuang digaris terdepan menangani Virus Corona, serta berbagi untuk masyarakat yang terdampak saat situasi seperti ini.</p>
        <hr>
        <div class="grid-container">
            <div class="grid-item">
                <div class="thumbnail"><img src="assets/gambar/donasi.jpg" width="450px" height="200px">
                  <div class="caption">
                    <p>Ayo lindungi para Medis saat berjuang merawat para pasien dengan mendonasikan sebagian harta kita untuk membeli APD untuk mereka para Dokter</p>
                    <hr size=10 NOSHADE color="black">
                    <p></p>
                    <div class="row">
                      <div class="col-md-6">
                        <p>Terkumpul</p>
                        <p>Rp <?php echo number_format($data['jumlah']) ?></p>
                      </div>
                      <div class="col-md-6">
                        <p>total donatur</p>
                        <p><?php echo mysqli_num_rows($donatur); ?></p>
                      </div>
                    </div>
                    <br>
                    <button type="button"  data-toggle="modal" data-target="#exampleModal">Siap Donasi</button>
                  </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="thumbnail"><img src="assets/gambar/relawan.jpg" width="450px" height="200px">
                  <div class="caption">
                    <p>Mari kita bersama-sama bersatu melawan virus Corona dengan bersosialisasi ke masyarakat yang belum paham tentang bahayanya Corona</p>
                    <hr size=10 NOSHADE color="black">
                    <p></p>
                    <p>Total Relawan</p>
                    <p><?php echo mysqli_num_rows($relawan); ?></p><br>
                    <button type="button"  data-toggle="modal" data-target="#exampleModal1">Daftar Relawan</button>
                  </div>
                </div>
            </div>
        </div>
          
      </div>
    </div>
<!-- Donasi -->

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

<!-- Modal Donasi -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><img src="assets/gambar/icon/icon donasi.png" width="80px">Ayo Berdonasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" action="aksi_donasi.php">
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
                      <label for="doa"><img src="assets/gambar/icon/doa.jpg" width="20px"> Doa/Dukungan</label>
                      <textarea class="form-control" rows="5" id="doa" name="doa"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="donasi"><img src="assets/gambar/icon/donate.png" width="20px"> Donasi</label>
                      <input type="number" class="form-control" id="donasi" placeholder="Masukan Donasi Anda" name="donasi">
                    </div>
                      <button type="submit" name="register" class="btn btn-success btn-block"><img src="assets/gambar/icon/aksi donasi.png" width="40px">Donasi</button>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<!-- Modal Donasi -->


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