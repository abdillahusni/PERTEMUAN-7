<div class="row p-3">
    <div class="col">
        <?php
        $query = "SELECT * FROM barang WHERE id='$_GET[id]'";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        ?>
        <h4>Form Edit Data Barang</h1>
            <form action="<?= 'modul/barang/proses.php?modul=barang&action=update&id=' . $row['id']; ?>
" method="post">
                <label class="form-label" for="nama_barang">Nama Barang</label>
                <input class="form-control" type="text" name="nama_barang" value="<?=
                                                                                    $row['nama_barang']; ?>" />
                <label for="harga">Harga</label>
                <input class="form-control" type="number" name="harga" value="<?= $row['harga']; ?>" />
                <label class="form-label" for="stok_barang">Stok</label>
                <input class="form-control" type="number" name="stok_barang" value="<?= $row['stok_barang']; ?>" />
                <label class="form-label" for="kategori">Kategori</label>
                <label class="form-label" for=""><?= $row['kategori']; ?></label>
                <select class="form-select mb-2" name="kategori">
                    <option value="Food" <?= $row['kategori'] == 'Food' ? 'selected' : '' ?>>Food</option>
                    <option value="Fashion" <?= $row['kategori'] == 'Fashion' ? 'selected' : '' ?>>Fashion</option>
                    <option value="Farmasi" <?= $row['kategori'] == 'Farmasi' ? 'selected' : '' ?>>Farmasi</option>
                </select>
                <button class="btn btn-primary">Update</button>
            </form>
    </div>
</div>