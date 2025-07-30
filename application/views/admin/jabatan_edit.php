<?php foreach($jabatan as $a){?>
<div class="col-sm-12 col-xl-12">
	<div class="rounded h-100 p-4">
		<h6 class="mb-4">Form Edit User</h6>
		<form action="<?= base_url('admin/dataJabatan/updateDataAksi')?>" method="POST">
			<div>
				<label>Nama Jabatan</label>
				<input type="nama_jabatan" class="input w-full border mt-2" id="floatingInput"
					placeholder="nama_jabatan" name="nama_jabatan" value="<?= $a->nama_jabatan ?>">
			</div>
			<div>
				<label>Gaji Pokok</label>
				<input type="gaji_pokok" class="input w-full border mt-2" id="floatingInput" placeholder="gaji_pokok"
					name="gaji_pokok" value="<?= $a->gaji_pokok ?>">
			</div>
			<div>
				<label>Tj. Transport</label>
				<input type="tj_transport" class="input w-full border mt-2" id="floatingInput"
					placeholder="tj_transport" name="tj_transport" value="<?= $a->tj_transport ?>">
			</div>
			<div>
				<label>Uang Makan</label>
				<input type="uang_makan" class="input w-full border mt-2" id="floatingInput" placeholder="uang_makan"
					name="uang_makan" value="<?= $a->uang_makan ?>">
			</div>
			<input type="hidden" name="id_jabatan" value="<?= $a->id_jabatan ?>">
			<button class="button bg-theme-1 text-white mt-5" type="submit">Update</button>
		</form>

	</div>
</div>
<?php } ?>
