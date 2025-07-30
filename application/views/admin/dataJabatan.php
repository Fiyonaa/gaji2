<div id="pesan">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="intro-y datatable-wrapper box p-5 mt-5">
	<a class="button w-24 mr-1 mb-2 bg-theme-1 text-white mt-5" href="<?php echo base_url('admin/DataJabatan/tambahData')?>">Tambah Data </a> <br>
	<br>
	<table class="table table-report table-report--bordered display datatable w-full">
		<thead>
			<tr>
				<th class="border-b-2 whitespace-no-wrap">NO</th>
				<th class="border-b-2 text-center whitespace-no-wrap">NAMA JABATAN</th>
				<th class="border-b-2 text-center whitespace-no-wrap">GAJI POKOK</th>
				<th class="border-b-2 text-center whitespace-no-wrap">TJ.TRANSPORT</th>
				<th class="border-b-2 text-center whitespace-no-wrap">UANG MAKAN</th>
				<th class="border-b-2 text-center whitespace-no-wrap">TOTAL</th>
				<th class="border-b-2 text-center whitespace-no-wrap">ACTION</th>
			</tr>
		</thead> 
		<tbody>
			<?php $no=1; foreach ($jabatan as $j) :?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td class="border-b font-medium whitespace-no-wrap text-center"><?php echo $j->nama_jabatan?></td>
				<td class="border-b font-medium whitespace-no-wrap text-center">Rp.
					<?php echo number_format($j->gaji_pokok,0,',','.')?></td>
				<td class="border-b font-medium whitespace-no-wrap text-center">Rp.
					<?php echo number_format($j->tj_transport,0,',','.')?></td>
				<td class="border-b font-medium whitespace-no-wrap text-center">Rp.
					<?php echo number_format($j->uang_makan,0,',','.')?></td>
				<td class="border-b font-medium whitespace-no-wrap text-center">Rp.
					<?php echo number_format($j->gaji_pokok + $j->tj_transport + $j->uang_makan ,0,',','.')?></td>
				<td class="border-b w-5">
					<div class="flex sm:justify-center items-center">
						<a class="flex items-center mr-3"
							href="<?php echo base_url('admin/DataJabatan/updateData/'. $j->id_jabatan)?>"> <i
								data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
						<a onclick="return confirm('Yakin Hapus')" class="flex items-center text-theme-6"
							href="<?php echo base_url('admin/DataJabatan/deleteData/'. $j->id_jabatan)?>"> <i
								data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
					</div>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
