<div class="flex items-center justify-center min-h-screen bg-gray-100">
	<div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
		<h2 class="text-xl font-bold text-center text-blue-700 mb-6">Filter Slip Gaji Pegawai</h2>

		<form method="POST" action="<?php echo base_url('admin/SlipGaji/cetak_slip_gaji') ?>">

			<!-- Bulan -->
			<div class="mb-4">
				<label for="bulan" class="block text-sm font-medium text-gray-700">Bulan</label>
				<select name="bulan" id="bulan"
					class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
					<option value="">Pilih Bulan</option>
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
			<div class="mb-4">
				<label for="tahun" class="block text-sm font-medium text-gray-700">Tahun</label>
				<select name="tahun" id="tahun"
					class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
					<option value="">Pilih Tahun</option>
					<?php $tahun = date('Y');
					for($i = 2020; $i < $tahun + 5; $i++) { ?>
						<option value="<?php echo $i ?>"><?php echo $i ?></option>
					<?php } ?>
				</select>
			</div>

			<!-- Nama Pegawai -->
			<div class="mb-4">
				<label for="nama_pegawai" class="block text-sm font-medium text-gray-700">Nama Pegawai</label>
				<select name="nama_pegawai" id="nama_pegawai"
					class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2">
					<option value="">Pilih Pegawai</option>
					<?php foreach($pegawai as $p) : ?>
						<option value="<?php echo $p->nama_pegawai ?>"><?php echo $p->nama_pegawai ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<!-- Tombol Submit -->
			<div>
				<button type="submit"
					class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow hover:bg-blue-700">
					<i class="fas fa-print mr-1"></i> Cetak Slip
				</button>
			</div>

		</form>
	</div>
</div>
