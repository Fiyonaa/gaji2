<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
	</div>

	<div class="intro-y datatable-wrapper box p-5 mt-5">
		<table class="table table-report table-report--bordered display  w-full">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="border-b-2 text-center whitespace-no-wrap">Bulan/Tahun</th>
					<th class="border-b-2 text-center whitespace-no-wrap">Gaji Pokok</th>
					<th class="border-b-2 text-center whitespace-no-wrap">Tj. Transport</th>
					<th class="border-b-2 text-center whitespace-no-wrap">Uang Makan</th>
					<th class="border-b-2 text-center whitespace-no-wrap">Potongan</th>
					<th class="border-b-2 text-center whitespace-no-wrap">Total Gaji</th>
					<th class="border-b-2 text-center whitespace-no-wrap">Cetak Slip</th>
				</tr>
			</thead>
			<tbody>
			<?php
					// Inisialisasi
					$alpha = 0;
					$sakit = 0;

					// Ambil potongan dari data
					if (!empty($potongan)) {
						foreach ($potongan as $p) {
							if ($p->potongan == 'Alpha') {
								$alpha = $p->jml_potongan;
							}
							if ($p->potongan == 'Sakit') {
								$sakit = $p->jml_potongan;
							}
						}
					}

					$no = 1;
					foreach ($gaji as $a) :
						$potongan_gaji = ($a->alpha * $alpha) + ($a->sakit * $sakit);
				?>
				<tr>
					<td class="border-b font-medium whitespace-no-wrap text-center"><?php echo $no++?></td>
					<td class="border-b font-medium whitespace-no-wrap text-center"><?php echo $a->bulan?></td>
					<td class="border-b font-medium whitespace-no-wrap text-center">
						<?php echo number_format($a->gaji_pokok,0,',','.')?></td>
					<td class="border-b font-medium whitespace-no-wrap text-center">
						<?php echo number_format($a->tj_transport,0,',','.')?></td>
					<td class="border-b font-medium whitespace-no-wrap text-center">
						<?php echo number_format($a->uang_makan,0,',','.')?></td>
					<td class="border-b font-medium whitespace-no-wrap text-center">
						<?php echo number_format($potongan_gaji,0,',','.')?></td>
					<td class="border-b font-medium whitespace-no-wrap text-center">
						<?php echo number_format($a->gaji_pokok + $a->tj_transport + $a->uang_makan - $potongan_gaji,0,',','.')?>
					</td>
					<td>
						<a href="<?php echo base_url('pegawai/DataGaji/cetakSlipGaji/'.$a->id_kehadiran) ?>"
								class="button bg-theme-1 text-white  text-center block">
								Cetak Slip Gaji
						</a>
					</td>
				</tr>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
