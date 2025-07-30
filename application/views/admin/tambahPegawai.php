
<div class="text-whitespace text-lg ml-3 whitespace-no-wrap"><?php echo $title ?></div><br>
<div>
    <form method="POST" action="<?= base_url('admin/DataPegawai/tambahDataAksi') ?>" enctype="multipart/form-data">
		<div class="mt-3">
			<label>Nik</label>
			<input type="text" class="input w-full border mt-2" placeholder="Nik" name="nik">
            <small class="text-red-500">*Masukkan 16 Digit</small>
		</div>
		<div class="mt-3">
			<label>Nama Pegawai</label>
			<input type="text" class="input w-full border mt-2" placeholder="Nama Pegawai" name="nama_pegawai">
		</div>
		<div class="mt-3">
			<label>Username</label>
			<input type="text" class="input w-full border mt-2" placeholder="Username" name="username">
		</div>
		<div class="mt-3">
			<label>Password</label>
			<input type="text" class="input w-full border mt-2" placeholder="Password" name="password">
		</div>
		<div class="mt-3">
            <label for="floatingSelect">Jenis Kelamin</label>
            <select class="input w-full border mt-2" id="floatingSelect" aria-label="Floating label select example" name="jenis_kelamin">
                <option value="Perempuan">Perempuan</option>
                <option value="Laki - Laki">Laki - Laki</option>
            </select>
        </div>
		<div class="mt-3">
            <label for="floatingSelect">Jabatan</label>
            <select class="input w-full border mt-2" id="floatingSelect" aria-label="Floating label select example" name="jabatan">
                <option value="">Pilih Jabatan</option>
                <?php foreach ($jabatan as $j) :?>
                <option value="<?php echo $j->nama_jabatan?>"><?php echo $j->nama_jabatan?></option>
                <?php endforeach; ?>
            </select>
        </div>
		<div class="mt-3">
			<label>Tanggal Masuk</label>
			<input type="date" class="input w-full border mt-2" placeholder="Tanggal Masuk" name="tgl_masuk">
		</div>
        <div class="mt-3">
            <label for="floatingSelect">Status</label>
            <select class="input w-full border mt-2" id="floatingSelect" aria-label="Floating label select example" name="status">
                <option value="Pegawai Tetap">Pegawai Tetap</option>
                <option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
            </select>
        </div>
        <div class="mt-3">
            <label for="floatingSelect">Hak Akses</label>
            <select class="input w-full border mt-2" id="floatingSelect" aria-label="Floating label select example" name="hak_akses">
                <option value="1">Admin</option>
                <option value="2">Pegawai</option>
            </select>
        </div>
        <div class="mt-3">
            <label>Photo</label>
            <input type="file" class="input w-full border mt-2" placeholder="photo" name="photo">
            <small class="text-gray-500">*Foto harus .jpg | .jpeg | .png</small>
        </div>
		<button type="submit" class="button bg-theme-1 text-white mt-5">Simpan</button>
	</form>
</div>
