<!-- <?php var_dump($data_mahasiswa); ?> -->
<br>
    <img src="<?= base_url();?>assets/img/jb.jpg" class="img-fluid" alt="Responsive image">

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
    <div class="container bawah" id="datamhs">
      <h1>DATA MAHASISWA</h1>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <?php if( $this->session->flashdata('flash')) : ?>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data Mahasiswa <strong>Berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <div class="container">
            <a href="<?= base_url(); ?>admin/tambah" class="btn btn-primary" style="margin-bottom: 10px" > + Tambah Data</a>
            <br>
          </div>
          <div class="row mt-3">
            <div class="col-md">
              <h3>Daftar Mahasiswa</h3>
              <table class="table">
                <thead class="thead-dark">
                  <th scope="col">No</th>
                  <th scope="col">NPM</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Semester</th>
                  <th scope="col">Aksi</th>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach($data_mahasiswa as $mhs):
                  ?>
                  <tr scope="row">
                    <td><?= $no; ?></td>
                    <td><?= $mhs['npm']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['jurusan']; ?></td>
                    <td><?= $mhs['semester']; ?></td>
                    <td>
                      <a href="<?= base_url(); ?>admin/hapus/<?= $mhs['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data Dihapus ?');">Hapus</a>
                      <a href="<?= base_url(); ?>admin/ubah/<?= $mhs['id']; ?>" class="badge badge-primary")">Edit</a>
                    </td>
                    <!-- <td>
                      <a href="" class="btn btn-primary">Edit</a>
                      <a href="<?= base_url(); ?>admin/hapus/<?= $mhs['id']; ?>" class="btn btn-danger" onclick="return confirm('Data dihapus, yakin?');">Hapus</a>
                    </td> -->
                  </tr>
                  <?php
                  $no++;
                  endforeach;
                  ?>
                </tbody>
              </table>
              <!-- <ul class="list-group">
                <?php foreach($data_mahasiswa as $mhs) : ?>
                  <li class="list-group-item"><?= $mhs['nama']; ?></li>
                <?php endforeach; ?>
              </ul> -->
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <br>
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
    <!-- Akhir Bagian About -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>