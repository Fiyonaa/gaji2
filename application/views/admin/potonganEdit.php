<?php foreach($potongan_gaji as $a){?>
<div class="col-sm-12 col-xl-12">
	<div class="rounded h-100 p-4">
		<h6 class="mb-4">Form Edit Potongan</h6>
		<form action="<?= base_url('admin/PotonganGaji/updateDataAksi')?>" method="POST">
			<div>
				<label>Potongan</label>
				<input type="potongan" class="input w-full border mt-2" id="floatingInput"
					placeholder="potongan" name="potongan" value="<?= $a->potongan ?>">
			</div>
			<div>
				<label>Jumlah Potongan</label>
				<input type="jml_potongan" class="input w-full border mt-2" id="floatingInput" placeholder="jml_potongan"
					name="jml_potongan" value="<?= $a->jml_potongan ?>">
			</div>
			
			<input type="hidden" name="id" value="<?= $a->id ?>">
			<button class="button bg-theme-1 text-white mt-5" type="submit">Update</button>
		</form>

	</div>
</div>
<?php } ?>
