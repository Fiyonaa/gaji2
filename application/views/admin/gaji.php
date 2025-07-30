<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
	</div>

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

						<!-- Button Tampilkan -->
						<div class="col-span-3">
							<button type="submit" class="button w-full bg-theme-1 text-white mt-6">
								<i class="fas fa-eye"></i> Tampilkan Data
							</button>
						</div>

						<div class="col-span-3">
							<a href="<?php echo base_url('admin/DataPenggajian/cetak_gaji') ?>"
								class="button w-full bg-theme-1 text-white mt-6 text-center block">
								Cetak Daftar Gaji
							</a>
						</div>
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
		Menampilkan Data Gaji Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun:
		<span class="font-weight-bold"><?php echo $tahun ?></span>
	</div>

	<?php

	$jml_data = count($gaji);
	if($jml_data > 0 ) { ?>

<div class="intro-y box p-5 mt-5 overflow-x-auto">
    <table class="table table-report table-report--bordered w-full min-w-max text-sm">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="border-b-2 text-center whitespace-nowrap">NIK</th>
                <th class="border-b-2 text-center whitespace-nowrap">Nama Pegawai</th>
                <th class="border-b-2 text-center whitespace-nowrap">Jenis Kelamin</th>
                <th class="border-b-2 text-center whitespace-nowrap">Jabatan</th>
                <th class="border-b-2 text-center whitespace-nowrap">Gaji Pokok</th>
                <th class="border-b-2 text-center whitespace-nowrap">Tj. Transport</th>
                <th class="border-b-2 text-center whitespace-nowrap">Uang Makan</th>
                <th class="border-b-2 text-center whitespace-nowrap">Potongan</th>
                <th class="border-b-2 text-center whitespace-nowrap">Total Gaji</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $alpha = 0;
                $sakit = 0;

                if (!empty($potongan)) {
                    foreach ($potongan as $p) {
                        if ($p->potongan == 'Alpha') $alpha = $p->jml_potongan;
                        if ($p->potongan == 'Sakit') $sakit = $p->jml_potongan;
                    }
                }

                $no = 1;
                foreach ($gaji as $a) :
                    $potongan_gaji = ($a->alpha * $alpha) + ($a->sakit * $sakit);
            ?>
            <tr>
                <td class="text-center"><?php echo $no++ ?></td>
                <td class="text-center"><?php echo $a->nik ?></td>
                <td class="text-center"><?php echo $a->nama_pegawai ?></td>
                <td class="text-center"><?php echo $a->jenis_kelamin ?></td>
                <td class="text-center"><?php echo $a->nama_jabatan ?></td>
                <td class="text-center"><?php echo number_format($a->gaji_pokok, 0, ',', '.') ?></td>
                <td class="text-center"><?php echo number_format($a->tj_transport, 0, ',', '.') ?></td>
                <td class="text-center"><?php echo number_format($a->uang_makan, 0, ',', '.') ?></td>
                <td class="text-center"><?php echo number_format($potongan_gaji, 0, ',', '.') ?></td>
                <td class="text-center">
                    <?php echo number_format($a->gaji_pokok + $a->tj_transport + $a->uang_makan - $potongan_gaji, 0, ',', '.') ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


	<?php }else { ?>
	<span class="rounded-md flex items-center px-5 py-4 mb-2 bg-gray-200 text-gray-600"><i data-feather="alert-triangle"
			class="w-6 h-6 mr-2"></i> Data masih kosong, silakan input data kehadiran
		pada bulan dan tahun yang anda pilih </span>
	<?php } ?>
</div>
