<div class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
    <h2 class="text-xl font-bold text-center text-blue-700 mb-6">Ganti Password</h2>

    <form method="POST" action="<?php echo base_url('pegawai/GantiPassword/ganti_password_aksi'); ?>">
      
      <!-- Password Baru -->
      <div class="mb-4">
        <label for="passBaru" class="block text-sm font-medium text-gray-700">Password Baru</label>
        <input
          type="password"
          name="passBaru"
          id="passBaru"
          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2"
          placeholder="Masukkan password baru"
        >
        <?php echo form_error('passBaru', '<div class="text-sm text-red-500 mt-1">', '</div>'); ?>
      </div>

      <!-- Ulangi Password Baru -->
      <div class="mb-6">
        <label for="ulangPass" class="block text-sm font-medium text-gray-700">Ulangi Password</label>
        <input
          type="password"
          name="ulangPass"
          id="ulangPass"
          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2"
          placeholder="Ulangi password baru"
        >
        <?php echo form_error('ulangPass', '<div class="text-sm text-red-500 mt-1">', '</div>'); ?>
      </div>

      <!-- Tombol Simpan -->
      <div>
        <button type="submit"
          class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow hover:bg-blue-700">
          <i class="fas fa-save mr-1"></i> Simpan
        </button>
      </div>
    </form>
  </div>
</div>
