<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card">
			<div class="card-header">
				Form Tambah Data Mahasiswa
			</div>
			<div class="card-body">
				
				<form action="" method="post">
				<div class="form-group">
					<label for="npm">NPM</label>
               <input type="text" maxlength="8" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM" value="">
               <small class="form-text text-danger"><?= form_error('npm'); ?></small>
            </div>
            <div class="form-group">
					<label for="nama">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="">
               <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
					<label for="jurusan">Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
						   <option value="Teknik Informatika">Teknik Informatika</option>
						   <option value="Teknik Industri">Teknik Industri</option>
						   <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
					</select>
				</div>
				<div class="form-group">
					<label for="semester">Semester</label>
						<select class="form-control" id="semester" name="semester">
						   <option value="1">1</option>
						   <option value="2">2</option>
						   <option value="3">3</option>
						   <option value="4">4</option>
						   <option value="5">5</option>
						   <option value="6">6</option>
						   <option value="7">7</option>
						   <option value="8">8</option>
					</select>
				</div>
				<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
			</form>
			</div>
		</div>

		</div>
	</div>
</div>