<div>
    <h2>Tambah Dosen Pembimbing</h2>
    <form action="<?php echo site_url('admin/dosbim/store'); ?>" method="POST">
        <label for="gambar">gambar:</label>
        <input type="file" name="gambar" id="gambar">
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="npp">NPP:</label>
        <input type="text" name="npp" id="npp">
        <br>
        <label for="bidang_kajian">Bidang Kajian:</label>
        <input type="text" name="bidang" id="bidang">
        <br>
        <input type="submit" value="Simpan">
    </form>
</div>