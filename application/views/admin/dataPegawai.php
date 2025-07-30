<div id="pesan">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="intro-y datatable-wrapper box p-5 mt-5">
	<a class="button w-24 mr-1 mb-2 bg-theme-1 text-white mt-5" href="<?php echo base_url('admin/DataPegawai/tambahData')?>">Tambah Data </a> <br>
	<br>
	<table class="table table-report table-report--bordered display datatable w-full" >
		<thead>
			<tr>
				<th class="border-b-2 whitespace-no-wrap">NO</th>
				<th class="border-b-2 text-center whitespace-no-wrap">NIK</th>
				<th class="border-b-2 text-center whitespace-no-wrap">NAMA PEGAWAI</th>
				<th class="border-b-2 text-center whitespace-no-wrap">USERNAME</th>
				<th class="border-b-2 text-center whitespace-no-wrap">FOTO</th>
				<th class="border-b-2 text-center whitespace-no-wrap">JENIS KELAMIN</th>
				<th class="border-b-2 text-center whitespace-no-wrap">JABATAN</th>
				<th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
				<th class="border-b-2 text-center whitespace-no-wrap">HAK AKSES</th>
				<th class="border-b-2 text-center whitespace-no-wrap">ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach ($pegawai as $p) :?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td class="border-b font-medium whitespace-no-wrap"><?php echo $p->nik?></td>
				<td class="border-b font-medium whitespace-no-wrap"><?php echo $p->nama_pegawai?></td>
				<td class="border-b font-medium whitespace-no-wrap"><?php echo $p->username?></td>
				<td class="text-center border-b">
					<div class="flex sm:justify-center">
						<div class="intro-x w-10 h-10 image-fit">
							<img alt="" class="rounded-full"
								src="<?= base_url('assets/photo/'. $p->photo) ?>">
						</div>
					</div>
				</td>
				<td class="border-b font-medium whitespace-no-wrap"><?php echo $p->jenis_kelamin?></td>
				<td class="border-b font-medium whitespace-no-wrap"><?php echo $p->jabatan?></td>
				<td class="border-b font-medium whitespace-no-wrap"><?php echo $p->status?></td>
				<?php if ($p->hak_akses=='1'){?>
				<td class="border-b font-medium whitespace-no-wrap">Admin</td>
				<?php } else { ?>
				<td class="border-b font-medium whitespace-no-wrap">Pegawai</td>
				<?php } ?>
				<td class="border-b w-5">
					<div class="flex sm:justify-center items-center">
						<a class="flex items-center mr-3"
							href="<?php echo base_url('admin/DataPegawai/updateData/'. $p->id_pegawai)?>"> <i
								data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
						<a onclick="return confirm('Yakin Hapus')" class="flex items-center text-theme-6"
							href="<?php echo base_url('admin/DataPegawai/deleteData/'. $p->id_pegawai)?>"> <i
								data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
					</div>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
