<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<center>
		<h1>PT. TRAVELMATE</h1>
		<h2>Laporan Kehadiran Pegawai</h2>
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
	<table class="table table-sm w-auto mt-3">
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

	<table class="table table-bordered table-striped">
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">NIK</th>
				<th class="text-center">Nama Pegawai</th>
				<th class="text-center">Jabatan</th>
				<th class="text-center">Hadir</th>
				<th class="text-center">Sakit</th>
				<th class="text-center">Alpha</th>
			</tr>
			<?php $no=1; foreach($lap_kehadiran as $l) : ?>
			<tr>
				<td class="text-center"><?php echo $no++ ?></td>
				<td class="text-center"><?php echo $l->nik ?></td>
				<td class="text-center"><?php echo $l->nama_pegawai ?></td>
				<td class="text-center"><?php echo $l->nama_jabatan ?></td>
				<td class="text-center"><?php echo $l->hadir ?></td>
				<td class="text-center"><?php echo $l->sakit ?></td>
				<td class="text-center"><?php echo $l->alpha ?></td>
			</tr>
			<?php endforeach ;?>
		</table>

</body>
</html>

<script type="text/javascript">
	window.print();
</script>