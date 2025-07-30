<div class="container-fluid">

	<div class="card mb-3">
		<div class="card mb-3 mt-5">
			<div class="card-body">
				<form>
					<div class="grid grid-cols-12 gap-2 items-end">
						<!-- Bulan -->
						<div class="col-span-3">
							<label for="bulan" class="block text-sm font-medium">Bulan</label>
							<select class="input w-full border mt-1" name="bulan" id="bulan">
								<option value=""> Pilih Bulan </option>
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
						</div>

						<!-- Tahun -->
						<div class="col-span-3">
							<label for="tahun" class="block text-sm font-medium">Tahun</label>
							<select class="input w-full border mt-1" name="tahun" id="tahun">
								<option value=""> Pilih Tahun </option>
								<?php $tahun = date('Y');
                				for($i = 2020; $i < $tahun + 5; $i++) { ?>
								<option value="<?php echo $i ?>"><?php echo $i ?></option>
								<?php } ?>
							</select>
						</div>

						<button type="submit" class="button w- bg-theme-1 text-white mt-6 text-center block"><i
								class="fas fa-eye"></i> Generate </button>
					</div>
				</form>

			</div>
		</div>
	</div>

	<?php
		if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
	?>


	<div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">
		Menampilkan Data Kehadiran Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun:
		<span class="font-weight-bold"><?php echo $tahun ?></span>
	</div>
 
	<div class="intro-y datatable-wrapper box p-5 mt-5">
		<form method="POST" action="<?= base_url('admin/DataAbsensi/tambah') ?>">
			<button class="button bg-theme-1 text-white " type="submit" name="submit" value="submit">Simpan</button>
			<table class="table table-bordered table-striped">
				<tr>
					<td class="border-b-2 text-center whitespace-no-wrap">No</td>
					<td class="border-b-2 text-center whitespace-no-wrap">NIK</td>
					<td class="border-b-2 text-center whitespace-no-wrap">Nama Pegawai</td>
					<td class="border-b-2 text-center whitespace-no-wrap">Jenias Kalamin</td>
					<td class="border-b-2 text-center whitespace-no-wrap">Jabatan</td>
					<td class="border-b-2 text-center whitespace-no-wrap" width="8%">Hadir</td>
					<td class="border-b-2 text-center whitespace-no-wrap" width="8%">Sakit</td>
					<td class="border-b-2 text-center whitespace-no-wrap" width="8%">Alpha</td>
				</tr>
				<?php $no=1; foreach($input_absensi as $a) :?>
				<tr>
					<input type="hidden" name="bulan[]" class="border-b font-medium whitespace-no-wrap text-center" value="<?php echo $bulantahun?>">
					<input type="hidden" name="nik[]" class="border-b font-medium whitespace-no-wrap text-center" value="<?php echo $a->nik?>">
					<input type="hidden" name="nama_pegawai[]" class="border-b font-medium whitespace-no-wrap text-center"
						value="<?php echo $a->nama_pegawai?>">
					<input type="hidden" name="jenis_kelamin[]" class="border-b font-medium whitespace-no-wrap text-center"
						value="<?php echo $a->jenis_kelamin?>">
					<input type="hidden" name="nama_jabatan[]" class="border-b font-medium whitespace-no-wrap text-center"
						value="<?php echo $a->nama_jabatan?>">


					<td><?php echo $no++?></td>
					<td><?php echo $a->nik?></td>
					<td><?php echo $a->nama_pegawai?></td>
					<td><?php echo $a->jenis_kelamin?></td>
					<td><?php echo $a->nama_jabatan?></td>
					<td><input type="number" name="hadir[]" class="form-control w-20 text-sm px-2 py-1" value="0"></td>
					<td><input type="number" name="sakit[]" class="form-control w-20 text-sm px-2 py-1" value="0"></td>
					<td><input type="number" name="alpha[]" class="form-control w-20 text-sm px-2 py-1" value="0"></td>
					<?php endforeach; ?>
			</table><br></br><br></br>
		</form>
	</div>
</div>
