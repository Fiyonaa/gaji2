<div class="intro-y datatable-wrapper box p-5 mt-5">
	<table class="table table-report table-report--bordered display datatable w-full">
		<thead>
			<tr>
				<th class="border-b-2 whitespace-no-wrap">NO</th>
				<th class="border-b-2 text-center whitespace-no-wrap">NAMA</th>
				<th class="border-b-2 text-center whitespace-no-wrap">EMAIL</th>
				<th class="border-b-2 text-center whitespace-no-wrap">ISI SARAN</th>
				<th class="border-b-2 text-center whitespace-no-wrap">TANGGAL</th>
			</tr>
		</thead>
		<tbody>
		<?php $no=1; foreach ($saran as $j) :?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td class="border-b font-medium whitespace-no-wrap text-center"><?php echo $j['nama'] ?></td>
			<td class="border-b font-medium whitespace-no-wrap text-center"><?php echo $j['email'] ?></td>
			<td class="border-b font-medium whitespace-no-wrap text-center"><?php echo $j['isi_saran'] ?></td>
			<td class="border-b font-medium whitespace-no-wrap text-center"><?php echo $j['tanggal'] ?></td>
		</tr>
		<?php endforeach; ?>

		</tbody>
	</table>
</div>
