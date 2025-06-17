<h2 class="mb-4">Tambah Menu</h2>

<form method="POST" action="indexAdmin.php?modul=menu&fitur=add" enctype="multipart/form-data" class="p-4 border rounded shadow-sm bg-white" style="max-width: 500px;">
    <div class="mb-3">
        <label for="gambar_menu" class="form-label">Gambar Menu</label>
        <input type="file" name="gambar_menu" id="gambar_menu" class="form-control" accept="image/*" required>
    </div>

    <div class="mb-3">
        <label for="nama_menu" class="form-label">Nama Menu</label>
        <input type="text" name="nama_menu" id="nama_menu" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="harga_menu" class="form-label">Harga (Rp)</label>
        <input type="number" name="harga_menu" id="harga_menu" step="0.01" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select name="kategori" id="kategori" class="form-select" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="kopi">Kopi</option>
            <option value="non-kopi">Non-Kopi</option>
            <option value="makanan">Makanan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="deskripsi_menu" class="form-label">Deskripsi</label>
        <textarea name="deskripsi_menu" id="deskripsi_menu" rows="3" class="form-control" required></textarea>
    </div>

    <div class="d-flex justify-content-between">
        <a href="indexAdmin.php?modul=menu&fitur=list" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
