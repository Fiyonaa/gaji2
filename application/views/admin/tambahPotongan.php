<form method="post" action="<?= base_url('admin/PotonganGaji/tambahDataAksi') ?>" id="form">
    <div class="mt-3">
        <label for="email">Potongan</label>
        <input type="text" class="input w-full border mt-2"  name="potongan" placeholder="Masukan Potongan">
    </div>
    <div class="mt-3">
        <label for="email">Jumlah</label>
        <input type="text" class="input w-full border mt-2"  name="jml_potongan" placeholder="Masukan Jumlah Potongan">
    </div>
    <button id="tombol_tambah" type="submit" class="button bg-theme-1 text-white mt-5" data-dismiss="modal" >Tambah</button>
</form>