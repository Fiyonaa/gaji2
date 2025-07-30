<!DOCTYPE html>
<html>

<head>
	<title><?php echo $title?></title>
	<style type="text/css">
		body {
			font-family: Arial;
			color: black;
		}
		
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<center>
		<h1>PT. TRAVELMATE</h1>
		<h2>Daftar Gaji Pegawai</h2>
	</center>

	<?php
	$bulan = isset($bulan_selected) ? $bulan_selected : date('m');
	$tahun = isset($tahun_selected) ? $tahun_selected : date('Y');

	$nama_bulan = [
		'01'=>'Januari', '02'=>'Februari', '03'=>'Maret', '04'=>'April',
		'05'=>'Mei', '06'=>'Juni', '07'=>'Juli', '08'=>'Agustus',
		'09'=>'September', '10'=>'Oktober', '11'=>'November', '12'=>'Desember'
	];

	$bulan_nama = $nama_bulan[$bulan];
	?>
	<table class="table table-bordered table-sm w-auto mt-3">
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?= $bulan_nama ?></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><?= $tahun ?></td>
		</tr>
	</table>

	<table class="table table-bordered table-triped">
		<tr>
			<th class="border-b-2 text-center whitespace-no-wrap">No</th>
			<th class="border-b-2 text-center whitespace-no-wrap">NIK</th>
			<th class="border-b-2 text-center whitespace-no-wrap">Nama Pegawai</th>
			<th class="border-b-2 text-center whitespace-no-wrap">Jenis Kelamin</th>
			<th class="border-b-2 text-center whitespace-no-wrap">Jabatan</th>
			<th class="border-b-2 text-center whitespace-no-wrap">GajI Pokok</th>
			<th class="border-b-2 text-center whitespace-no-wrap">Tj. Transport</th>
			<th class="border-b-2 text-center whitespace-no-wrap">Uang Makan</th>
			<th class="border-b-2 text-center whitespace-no-wrap">Potongan</th>
			<th class="border-b-2 text-center whitespace-no-wrap">Total Gaji</th>
		</tr>
		<?php
		// Inisialisasi nilai potongan
			$alpha = 0;
			$sakit = 0;

			// Ambil nilai potongan dari data
			foreach($potongan as $p) {
				if ($p->potongan == 'Alpha') {
					$alpha = $p->jml_potongan;
				}
				if ($p->potongan == 'Sakit') {
					$sakit = $p->jml_potongan;
				}
			}
		?>

		<?php $no = 1; foreach($cetak_gaji as $g) : ?>
		<?php 
			// Hitung potongan untuk setiap pegawai
			$potongan = ($g->alpha * $alpha) + ($g->sakit * $sakit);
		?>
		<tr>
			<td class="text-center"><?php echo $no++ ?></td>
			<td class="text-center"><?php echo $g->nik ?></td>
			<td class="text-center"><?php echo $g->nama_pegawai ?></td>
			<td class="text-center"><?php echo $g->jenis_kelamin ?></td>
			<td class="text-center"><?php echo $g->nama_jabatan ?></td>
			<td class="text-center">Rp. <?php echo number_format($g->gaji_pokok,0,',','.') ?></td>
			<td class="text-center">Rp. <?php echo number_format($g->tj_transport,0,',','.') ?></td>
			<td class="text-center">Rp. <?php echo number_format($g->uang_makan,0,',','.') ?></td>
			<td class="text-center">Rp. <?php echo number_format($potongan,0,',','.') ?></td>
			<td class="text-center">Rp.
				<?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan,0,',','.') ?>
			</td>
		</tr>
		<?php endforeach; ?>

	</table>

	<table width="100%" class="mt-5">
		<tr>
			<td></td>
			<td style="width: 200px; text-align: center;">
				<p>Karanganyar, <?= date("d M Y") ?><br><strong>Finance</strong></p>
				<br><br><br>
				<p style="margin-top: 40px;">_____________________</p>
			</td>
		</tr>
	</table>

</body>

</html>

<script type="text/javascript">
	window.print();

</script>
