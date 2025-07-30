<div class="card mb-3">
	<div class="card mb-3 mt-5">
		<div class="card-body">
			<form method="POST" action="<?php echo base_url('admin/LaporanGaji/cetak_laporan_gaji')?>">
				<div class="grid grid-cols-12 gap-2 items-end">
					<!-- Bulan -->
					<div class="col-span-3">
						<label for="bulan" class="block text-sm font-medium">Bulan</label>
						<select class="input w-full border mt-1" name="bulan" id="bulan" required>
							<option value=""> Pilih Bulan </option>
							<?php
							$bulan_list = [
								'01' => 'Januari',
								'02' => 'Februari',
								'03' => 'Maret',
								'04' => 'April',
								'05' => 'Mei',
								'06' => 'Juni',
								'07' => 'Juli',
								'08' => 'Agustus',
								'09' => 'September',
								'10' => 'Oktober',
								'11' => 'November',
								'12' => 'Desember',
							];
							foreach ($bulan_list as $key => $val) {
								$selected = (isset($bulan_selected) && $bulan_selected == $key) ? 'selected' : '';
								echo "<option value='$key' $selected>$val</option>";
							}
							?>
						</select>
					</div>

					<!-- Tahun -->
					<div class="col-span-3">
						<label for="tahun" class="block text-sm font-medium">Tahun</label>
						<select class="input w-full border mt-1" name="tahun" id="tahun" required>
							<option value=""> Pilih Tahun </option>
							<?php 
							$tahun_now = date('Y');
							for ($i = 2020; $i <= $tahun_now + 5; $i++) {
								$selected = (isset($tahun_selected) && $tahun_selected == $i) ? 'selected' : '';
								echo "<option value='$i' $selected>$i</option>";
							} 
							?>
						</select>
					</div>


					<!-- Button Tampilkan -->
					<div class="col-span-3">
						<button type="submit" class="button w-full bg-theme-1 text-white mt-6 ml-full ">
							<i class="fas fa-eye"></i> Cetak Laporan Gaji
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
