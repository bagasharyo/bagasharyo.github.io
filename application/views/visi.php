<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MAN 7 YOGYAKARTA</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>fontawesome/css/all.min.css">
</head>
<body>

  <section class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <ul class="sosmed">
            <li><a href=""><i class="fab fa-facebook-f text-white"></i></a></li>
            <li><a href=""><i class="fab fa-instagram text-white"></i></a></li>
            <li><a href=""><i class="fab fa-twitter text-white"></i></a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <div class="login">
            <li><a href="<?= base_url('Login'); ?>">Login</i></a></li>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="brand">
            <img src="<?= base_url('assets/');?>img/Logo.png">
            <div class="brand-name">
              <h1>MAN 7 YOGYAKARTA</h1>
              <h3>Jl. KH.Ahmad Dahlan</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="logo1">
            <i class="fa fa-phone-alt"></i>
            <div class="telp">
              <h1>Hubungi Kami</h1>
              <h3>0812345678</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="logo2">
            <i class="fa fa-envelope"></i>
            <div class="mail">
              <h1>Email Kami</h1>
              <h3>man7yogya@gmail.com </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--  -->
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-utama">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('Welcome'); ?>">Home</a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
              Informasi
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= base_url('Welcome/visi'); ?>">Visi dan Misi</a>
              <a class="dropdown-item" href="<?= base_url('Welcome/profil'); ?>">Profil Sekolah</a>
              <a class="dropdown-item" href="<?= base_url('Welcome/fasilitas'); ?>">Fasilitas</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('Welcome/galeri'); ?>">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('Welcome/daftar'); ?>">Pendaftaran</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--  -->
  <!-- slider -->
  <!--  -->
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="utama">
          <h1>Visi dan Misi</h1>
          <div class="pertama">
            <h1><b>visi</b></h1>
            <p>Taqwa, Mandiri, Prestasi, Inovatif,  berwawasan Lingkungan, dan Islami  yang diakronimkan TAMPIL ISLAMI.</p>
            <h1><b>misi</b></h1>
            <ul>
              <li>Mewujudkan Insan Madrasah yang berilmu, beramal, dan berkepribadian mulia (akhlak mahmudah).</li>
              <li>Mewujudkan Insan Madrasah yang menguasai iptek, bahasa, budaya, olahraga dan seni.</li>
              <li>Mewujudkan madrasah yang berdaya saing global.</li>
              <li>Mewujudkan lingkungan madrasah yang kondusif dan islami.</li>
            </ul>
            <h1><b>tujuan</b></h1>
            <ul>
              <li>Terwujudnya Insan Madrasah yang mengamalkan nilai dan ajaran Islam dalam kehidupan sehari-hari.</li>
              <li>Terwujudnya peserta didik yang cerdas, terampil, mandiri untuk melanjutkan pendidikan.</li>
              <li>Terwujudnya budaya kerja tinggi dalam memberikan pelayanan pendidikan yang prima.</li>
              <li>Terwujudnya madrasah yang memberi keluasan akses, akuntabiltas, dan bermartabat.</li>
              <li>Terwujudnya Insan Madrasah yang menguasai teknologi informasi dan bahasa asing.</li>
              <li>Terciptanya lingkungan dan suasana madrasah yang bersih, sehat, tertib, nyaman, aman, dan islami.</li>
              <li>Terintegrasinya wawasan lingkungan dalam proses pembelajaran.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="side">
          <h5>New Post</h5>
          <ul>
            <li><a href="">Paradance Festival Mini Gerak & Tari</a></li>
            <li><a href="">Nonton dan Ngobrol Bareng film "GARUDA</a></li>
            <li><a href="">Gelar Budaya Gendhing Kutub Utara 2016</a></li>
            <li><a href="">Lomba Foto Jogja Air Show 2016</a></li>
            <li><a href="">pentas kolaborasi seniman jawa thailand</a></li>
          </ul>
          <h5>Event</h5>
          <ul>
            <li><a href="">Paradance Festival Mini Gerak & Tari</a></li>
            <li><a href="">Nonton dan Ngobrol Bareng film "GARUDA</a></li>
            <li><a href="">Gelar Budaya Gendhing Kutub Utara 2016</a></li>
            <li><a href="">Lomba Foto Jogja Air Show 2016</a></li>
            <li><a href="">pentas kolaborasi seniman jawa thailand</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <!-- footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="brand">
            <img src="<?= base_url('assets/');?>img/Logo.png">
            <div class="brand-name-bawah">
              <h1>MAN 7 YOGYAKARTA</h1>
              <h3>Jl. KH.Ahmad Dahlan</h3>
            </div>
          </div>
          <div class="tentang">
            <p>MAN 7 Yogyakarta merupakan Madrasah Aliyah Negeri yang berdiri tahun 1978 dan sudah berpengalaman dalam bidang pendidikan.</p>

            <p>Memiliki fasilitas lengkap untuk belajar mengajar dengan berbagai macam kegiatan ektra kurikuler dan kegiatan kesiswaaan yang mendukung pendidikan dan pembentukan karakter siswa yang tagwa, mandiri, berprestasi, inovatif berwawasan lingkungan dan Islami.</p>           
          </div>
        </div>
        <div class="col-md-4">
          <div class="info">
            <h1>Informasi</h1>
            <ul>
              <li><a href="">Visi dan Misi</a></li>
              <li><a href="">Profil Sekolah</a></li>
              <li><a href="">Fasilitas</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="kontak">
            <h1>Kontak Kami</h1>
            <p>Sekolah ini berada di pusat kota Yogyakarta, tepatnya di Jl. K.H Ahmad Dahlan No. 130 Yogyakarta .</p>
            <ul>
              <li><a href=""><i class="fa fa-phone-alt"></i>0812345678</a></li>
              <li><a href=""><i class="fa fa-envelope"></i>man7yogya@gmail.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--  -->

  <script src="<?= base_url('assets/');?>js/jquery-3.3.1.slim.min.js"></script>
  <script src="<?= base_url('assets/');?>js/owl.carousel.min.js"></script>
  <!-- <script src="assets/fontawesome/js/all.min.js"></script> -->
  <script src="<?= base_url('assets/');?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/');?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/');?>js/main.js"></script>
</body>
</html>
