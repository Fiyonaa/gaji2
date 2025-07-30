<div class="card mb-3">
		<div class="card mb-3 mt-5">
			<div class="card-body">
				<form method="POST" action="<?php echo base_url('admin/LaporanAbsensi/cetak_laporan_absensi')?>">
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

						<!-- Button Tampilkan -->
						<div class="col-span-3">
							<button type="submit" class="button w-full bg-theme-1 text-white mt-6 ml-full">
								<i class="fas fa-eye"></i> Cetak Laporan Absensi
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>