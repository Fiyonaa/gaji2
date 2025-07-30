<div class="text-whitespace text-lg ml-3 whitespace-no-wrap"><?php echo $title ?></div><br>
<div>
	<form method="POST" action="<?php echo base_url('admin/DataJabatan/tambahDataAksi')?>">
		<div class="mt-3">
			<label>Nama Jabatan</label>
			<input type="text" class="input w-full border mt-2" placeholder="nama jabatan" name="nama_jabatan">
		</div>
		<div class="mt-3">
			<label>Gaji Pokok</label>
			<input type="number" class="input w-full border mt-2" placeholder="Rp.0" name="gaji_pokok">
		</div>
		<div class="mt-3">
			<label>Tj. Transport</label>
			<input type="number" class="input w-full border mt-2" placeholder="Rp.0" name="tj_transport">
		</div>
		<div class="mt-3">
			<label>Uang Makan</label>
			<input type="number" class="input w-full border mt-2" placeholder="Rp.0" name="uang_makan">
		</div	>
		<button type="submit" class="button bg-theme-1 text-white mt-5">Simpan</button>
	</form>
</div>
