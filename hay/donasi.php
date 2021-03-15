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
          <li class="nav-item active">
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

<!-- Donasi -->
    <div id="isi1">
        <div class="container">
            <img src="assets/gambar/gambar1.png" width="700px" height="380px">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="pill" href="#detail"><b>Detail</b></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="pill" href="#donatur"><b>Donatur</b></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"  data-toggle="modal" href="#exampleModal"><b>Donasi Sekarang</b></a>
                    </li>
                </ul>

            <div class="tab-content">
                <div id="detail" class="container tab-pane active"><br>
                    <p>Awal Maret 2020, negeri ini digemparkan dengan pengumuman Presiden bersama Menteri Kesehatan yang menyatakan bahwa virus corona atau COVID-19 positif ada di Indonesia dan telah menjangkiti warga di sekitaran Ibukota. </p>
                    <p>Sontak saja, negeri ini pun geger dan kewaspadaan mencuat dimana-mana. Bagaimana tidak? Virus Corona ini telah menjangkiti ratusan ribu manusia dan ribuan korban jiwa meninggal dunia. Kewaspadaan pun berubah menjadi kepanikan.</p>
                    <p>Saat sejumlah sekolah dan tempat kerja diliburkan, banyak dari kita di rumah melihat perkembangan Corona dari TV, berita online atau media sosial.</p>
                    <p>Di luar sana, banyak dokter, perawat, petugas rumah sakit, driver ambulance dan tenaga medis lainnya yang tengah berjuang merawat pasien terkena dan sedang dalam pengawasan Corona. Mereka adalah barisan terdepan bangsa ini melawan virus Corona.</p>
                    <p><b>Perlindungan terhadap tenaga medis yang menangani pasien terjangkit Virus Corona atau COVID-19 harus menjadi perhatian bagi kita semua.</b></p>
                    <p>Sayangnya, stok masker, hand sanitizer, sarung tangan, alkohol, dan alat perlindungan diri lainnya bagi tenaga medis sangat terbatas.</p>
                    <p>Tiba-tiba, alat kesehatan seperti masker, hand sanitizer, dan alat kesehatan lainnya menjadi langka karena diborong atau bahkan ditimbun orang tak bertanggung jawab agar dapat dijual dengan harga yang tinggi. Sedihnya, sebagian petugas medis pun harus kekurangan Alat Proteksi Diri (APD) dikala harus bertugas menangani pasien corona.</p>
                    <p>Saatnya kita gerak, lawan Virus Corona bersama! Dari rumah, kita bisa bantu para tenaga medis mendapatkan alat perlindungan diri yang cukup agar terhindar dari penyebaran Virus Corona yang semakin massif.</p>
                    <p><b>Donasimu, menyelamatkan nyawa banyak orang! Klik <u><a data-toggle="modal" href="#exampleModal">DONASI SEKARANG</a></u></b></p>
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
                            <th style="width:300px;">Doa</th>
                            <th style="width:150px;">Donasi</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php

                            $id=1;
                            $donasi = mysqli_query($db, "SELECT * FROM donasi");
                            $query = mysqli_query($db,"SELECT SUM(donasi) as jumlah FROM donasi");

                            $data = mysqli_fetch_array($query);

                            while($donatur = mysqli_fetch_array($donasi)){
                                echo "<tr>";

                                echo "<td>".$id++."</td>";
                                echo "<td>".$donatur['nama']."</td>";
                                echo "<td>".$donatur['email']."</td>";
                                echo "<td>".$donatur['telp']."</td>";
                                echo "<td>".$donatur['doa']."</td>";
                                echo "<td>"."Rp. ".number_format($donatur['donasi'])."</td>";
                            }
                          ?>
                        </tbody>
                    </table>
                    <p><b>Total Donatur : <?php echo mysqli_num_rows($donasi) ?></b></p>
                    <p><b>Total Donasi  : Rp <?php echo number_format($data['jumlah']);?></b></p>
                </div>
            </div>
        </div>
    </div>
<!-- Donasi -->

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