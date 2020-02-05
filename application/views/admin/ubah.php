<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card">
			<div class="card-header">
				Form Edit Data Mahasiswa
			</div>
			<div class="card-body">
				
				<form action="" method="post">
				<input type="hidden" name="id" value="<?= $data_mahasiswa['id']; ?>">
				<div class="form-group">
					<label for="npm">NPM</label>
               <input type="text" maxlength="8" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM" value="<?= $data_mahasiswa['npm']; ?>">
               <small class="form-text text-danger"><?= form_error('npm'); ?></small>
            </div>
            <div class="form-group">
					<label for="nama">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?= $data_mahasiswa['nama']; ?>">
               <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
					<label for="jurusan">Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
						   <?php foreach($jurusan as $j) : ?>
							    	<?php if($j == $data_mahasiswa['jurusan']) :?>
							     		<option value="<?= $j; ?>" selected><?= $j; ?></option>
							     	<?php else : ?>
							      		<option value="<?= $j; ?>"><?= $j; ?></option>
							      <?php endif; ?>
							<?php endforeach; ?>
						</select>
				</div>
				<div class="form-group">
					<label for="semester">Semester</label>
						<select class="form-control" id="semester" name="semester">
						   <?php foreach($semester as $s) : ?>
							    	<?php if($s == $data_mahasiswa['semester']) :?>
							     		<option value="<?= $s; ?>" selected><?= $s; ?></option>
							     	<?php else : ?>
							      		<option value="<?= $s; ?>"><?= $s; ?></option>
							      <?php endif; ?>
							<?php endforeach; ?>
					</select>
				</div>
				<button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
			</form>
			</div>
		</div>

		</div>
	</div>
</div>