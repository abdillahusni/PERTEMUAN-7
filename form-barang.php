<div class="row p-3">
    <div class="col">
        <h4>Form Input Data Barang</h4>
        <form action="modul/barang/proses.php?modul=barang&action=tambah" method="post">
            <label class="form-label" for="nama_barang">Nama Barang</label>
            <input class="form-control" type="text" name="nama_barang" /><br />
            <label class="form-label" for="harga">Harga</label>
            <input class="form-control" type="number" name="harga" /><br />
            <label class="form-label" for="stok_barang">Stok</label>
            <input class="form-control" type="number" name="stok_barang" /><br />
            <label class="form-label" for="kategori">Kategori</label>
            <select class="form-select mb-2" name="kategori">
                <option value="Food">Food</option>
                <option value="Fashion">Fashion</option>
                <option value="Farmasi">Farmasi</option>
            </select>
            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>