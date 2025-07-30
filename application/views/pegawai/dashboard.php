<div class="intro-y flex items-center h-10">
  <h1 class="text-lg font-medium truncate mr-5"><?php echo $title?></h1>
</div>

<div class="alert alert-success font-weight-bold mb-4" style="width: 65%">Selamat datang, Anda login sebagai pegawai</div>

<div class="card" style="margin-bottom: 120px; width: 65%">
	<div class="card-header font-weight-bold bg-primary text-white">
		Data Pegawai
	</div>

<?php foreach($pegawai as $p) : ?>
	<div class="card-body p-5 bg-white shadow rounded-lg w-full">
	<div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start w-full">
		<div class="flex justify-center">
			<img class="w-[250px] rounded-lg shadow-md object-cover" src="<?php echo base_url('assets/photo/'.$p->photo) ?>" alt="Foto Pegawai">
		</div>
		<div class="md:col-span-2">
			<table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded-md overflow-hidden">
				<tbody>
					<tr class="border-b border-gray-300">
						<td class="font-medium px-4 py-2 w-1/3 bg-gray-100">Nama Pegawai</td>
						<td class="px-2 py-2 w-1">:</td>
						<td class="px-4 py-2"><?php echo $p->nama_pegawai; ?></td>
					</tr>
					<tr class="border-b border-gray-300">
						<td class="font-medium px-4 py-2 bg-gray-100">Jabatan</td>
						<td class="px-2 py-2">:</td>
						<td class="px-4 py-2"><?php echo $p->jabatan; ?></td>
					</tr>
					<tr class="border-b border-gray-300">
						<td class="font-medium px-4 py-2 bg-gray-100">Tanggal Masuk</td>
						<td class="px-2 py-2">:</td>
						<td class="px-4 py-2"><?php echo $p->tgl_masuk; ?></td>
					</tr>
					<tr>
						<td class="font-medium px-4 py-2 bg-gray-100">Status</td>
						<td class="px-2 py-2">:</td>
						<td class="px-4 py-2"><?php echo $p->status; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php endforeach; ?>


</div>
<!-- /.container-fluid -->
</div>
