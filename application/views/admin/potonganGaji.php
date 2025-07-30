<div id="pesan">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="intro-y datatable-wrapper box p-5 mt-5">
	<a class="button w-24 mr-1 mb-2 bg-theme-1 text-white mt-5" href="<?php echo base_url('admin/PotonganGaji/tambahData')?>">Tambah Data </a> <br>
	<br>
	<table class="table table-report table-report--bordered display datatable w-full">
		<thead>
			<tr>
				<th class="border-b-2 whitespace-no-wrap">NO</th>
				<th class="border-b-2 text-center whitespace-no-wrap">POTONGAN</th>
				<th class="border-b-2 text-center whitespace-no-wrap">JUMLAH POTONGAN</th>
				<th class="border-b-2 text-center whitespace-no-wrap">ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach ($potongan_gaji as $p) :?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td class="border-b font-medium whitespace-no-wrap"><?php echo $p->potongan?></td>
                <td class="border-b font-medium whitespace-no-wrap text-center">Rp.
                <?php echo number_format($p->jml_potongan,0,',','.')?></td>
				<td class="border-b w-5">
					<div class="flex sm:justify-center items-center">
						<a class="flex items-center mr-3"
							href="<?php echo base_url('admin/PotonganGaji/updateData/'. $p->id)?>"> <i
								data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
						<a onclick="return confirm('Yakin Hapus')" class="flex items-center text-theme-6"
							href="<?php echo base_url('admin/PotonganGaji/deleteData/'. $p->id)?>"> <i
								data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
					</div>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
