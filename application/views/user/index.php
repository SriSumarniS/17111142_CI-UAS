<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- MY FONT -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cambay|Indie+Flower|Oswald|Viga&display=swap" rel="stylesheet"> 

    <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/'); ?>style.css">

    <title><?= $title; ?></title>
  </head>
  <body>

  <div class="up">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container" id="navbar">
        <a class="navbar-brand" href="#">UAS-WEBPRO2-MAHASISWA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#home">Beranda <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#profil">Profil</a>
            <a class="nav-item nav-link" href="#about">Tentang</a>
            <a class="nav-item btn btn-primary tombol" href="<?= base_url('auth/logout'); ?>">Log Out</a>
            <!-- <div class="modal-body">Pilih "Logout" jika kamu ingin keluar.</div> -->
            <!-- <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <a class="nav-item btn btn-primary tombol" href="<?= base_url('auth/logout'); ?>">Log Out</a>
            </div> -->
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    
    <img src="<?= base_url();?>assets/img/jbt.jpg" class="img-fluid" alt="Responsive image">
    <br>
    <br>
  </div>

    <!-- Bagian Home -->
    <br>
    <div id="home">
      <div class="top">
        <div class="container atas">
          <h3 align="center">If you want to change different, start from your self</h1>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p align="justify"><b>Di Indonesia,</b> mahasiswa dianggap memiliki peran yang cukup sentral. Mereka menjadi tumpuan bagi masyarakat untuk menyuarakan protes atau kritikan terhadap penguasa dan pemerintah yang dianggap tidak berlaku adil kepada masyarakat, terutama kelas bawah. Tidak hanya itu, mahasiswa juga menjadi motor penggerak pergerakan di daerah-daerah. Ketika ada proyek yang bermasalah di beberapa daerah, maka mahasiswa akan hadir dan membantu masyarakat setempat. Protes-protes mereka layangkan dengan keras dan tajam yang tak jarang membuat penguasa melintir juga. Banyak kata kata keren mahasiswa yang muncul untuk menunjukkan eksistensi mereka di tengah masyarakat. Dengan beberapa kumpulan kata-kata di bawah ini, kamu mungkin akan bisa memaknai apa arti seorang mahasiswa sebenarnya. Tentu, kamu bisa juga menggunakannya sebagai pembelajaran sebelum kamu resmi mendapatkan sebutan mahasiswa. So, you will not be able to do anything to other people, if you have not done it to yourself.
              <br><b>JUST DO IT</b></p>
            </div>     
          </div> 
        </div>
      </div>
    </div>
    <!-- Akhir Bagian Home -->

    <!-- Bagian Profil -->
    <div class="container bawah" id="profil">
      <h1>PROFIL</h1>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="200px" style="display: block; margin: auto;">
          <br>
          <h3><?= $user['name']; ?></h3>
          <p class="text-center">NPM <?= $user['npm']; ?>
          <br><?= $user['email']; ?>
          <br>Bergabung sejak <?= date('d F Y', $user['date_created']); ?></p>
        </div>
      </div>
    </div>
    <!-- Akhir Bagian Profil -->

    <!-- Bagian About -->
    <footer class="sticky-footer" id="about">
      <div class="container footer">
        <div class="copyright">
          <h1 class="t1">TENTANG</h1>
          <i class="fab fa-instagram"> sri_sumarni_s</i>
          <br>
          <i class="fab fa-facebook-f"> Sri Sumarni Sukmaningsih</i>
          <br>
          <i class="far fa-envelope"> srisumarnisukmaningsih@gmail.com</i>
          <br>
          <span class="t2">Copyright &copy; UAS Web Programming 2 - Sri Sumarni Sukmaningsih <?= date('Y') ?></span>
        </div>
      </div>
    </footer>
    <!-- <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2>About</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat recusandae rem autem impedit ad odio, enim tempore possimus non minus quod dignissimos ipsum eveniet odit, ratione molestiae, velit a dolorem!</p>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>hjhjdhcjd bchjxbcjb</h2>
        </div>
        <div id="icon"><i class="fa fa-instagram"></i> <i class="fa fa-facebook"></i> <i class="fa fa-twitter-square"></i> <i class="fa fa-youtube-play"></i></div>
    </div> -->
    <!-- Akhir Bagian About -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>