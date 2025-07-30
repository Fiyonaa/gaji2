<?php foreach($pegawai as $a){?>
<div class="col-sm-12 col-xl-12">
	<div class="rounded h-100 p-4">
		<h6 class="mb-4">Form Edit User</h6>
		<form action="<?= base_url('admin/dataPegawai/updateDataAksi')?>" method="POST" enctype="multipart/form-data">
			<div>
				<label>NIK</label>
				<input type="nik" class="input w-full border mt-2" id="floatingInput" placeholder="nik" name="nik"
					value="<?= $a->nik ?>">
			</div>
			<div>
				<label>Nama Pegawai</label>
				<input type="nama_pegawai" class="input w-full border mt-2" id="floatingInput"
					placeholder="nama_pegawai" name="nama_pegawai" value="<?= $a->nama_pegawai ?>">
			</div>
			<div>
				<label>Username</label>
				<input type="username" class="input w-full border mt-2" id="floatingInput"
					placeholder="username" name="username" value="<?= $a->username ?>">
			</div>
			<div>
				<label>Password</label>
				<input type="password" class="input w-full border mt-2" id="floatingInput"
					placeholder="password" name="password" value="<?= $a->password ?>">
			</div>
			<div class="mt-3">
				<label for="floatingSelect">Jenis Kelamin</label>
				<select class="input w-full border mt-2" id="floatingSelect" aria-label="Floating label select example"
					name="jenis_kelamin">
					<option value="<?= $a->jenis_kelamin ?>"><?= $a->jenis_kelamin ?></option>
					<option value="Perempuan">Perempuan</option>
					<option value="Laki - Laki">Laki - Laki</option>
				</select>
			</div>
			<div class="mt-3">
            <label for="floatingSelect">Jabatan</label>
            <select class="input w-full border mt-2" id="floatingSelect" aria-label="Floating label select example" name="jabatan">
				<option value="<?= $a->jabatan ?>"><?= $a->jabatan ?></option>
                <?php foreach ($jabatan as $j) :?>
                <option value="<?php echo $j->nama_jabatan?>"><?php echo $j->nama_jabatan?></option>
                <?php endforeach; ?>
            </select>
        </div>
			<div class="mt-3">
				<label>Tanggal Masuk</label>
				<input type="date" class="input w-full border mt-2" placeholder="tgl_masuk" name="tgl_masuk"
					value="<?= $a->tgl_masuk ?>">
			</div>
			<div class="mt-3">
				<label for="floatingSelect">Status</label>
				<select class="input w-full border mt-2" id="floatingSelect" aria-label="Floating label select example"
					name="status">
					<option value="<?= $a->status ?>"><?= $a->status ?></option>
					<option value="Pegawai Tetap">Pegawai Tetap</option>
                	<option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
				</select>
			</div>
			<div class="mt-3">
				<label for="floatingSelect">Hak Akses</label>
				<select class="input w-full border mt-2" id="floatingSelect" aria-label="Floating label select example"
					name="hak_akses">
					<option value="<?= $a->hak_akses ?>">
						<?php if ($a->hak_akses=='1'){
						echo "Admin";
						} else { 
						echo "Pegawai";
						} ?>
					</option>
					<option value="1">Admin</option>
                	<option value="2">Pegawai</option>
				</select>
			</div>
			<div class="mt-3">
				<label>Photo</label>
				<input type="file" class="input w-full border mt-2" placeholder="photo" name="photo"
					value="<?= $a->photo ?>">
				<small class="text-red-500">*Foto harus .jpg | .jpeg | .png</small>
			</div>
			<input type="hidden" name="id_pegawai" value="<?= $a->id_pegawai ?>">
			<button class="button bg-theme-1 text-white mt-5" type="submit">Update</button>
		</form>

	</div>
</div>
<?php } ?>
