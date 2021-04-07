<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <form action="/daftar/update/<?= $barang['id']; ?>" method="post">
            <?php csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $barang['slug']; ?>">
                <div class="col-md-6">
                    <a href="/daftar/<?= $barang['slug']; ?>" class="btn btn-primary mt-3">Kembali</a>
                </div>
                <h3 class="mt-3 mb-3" style="text-align: center;">Edit Data Produk</h3>
                <div class="form-group">
                    <label for="InputNama">Nama Produk</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_produk')) ? 'is-invalid' : ''; ?>" id="InputNama" name="nama_produk" value="<?= $barang['nama_produk']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_produk'); ?>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="InputDeskripsi">Deskripsi Produk</label>
                    <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="InputDeskripsi" name="deskripsi" value="<?= $barang['deskripsi']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('deskripsi'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputHarga">Harga</label>
                    <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="InputHarga" name="harga" value="<?= $barang['harga']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputStok">Stok</label>
                    <input type="text" class="form-control <?= ($validation->hasError('stok')) ? 'is-invalid' : ''; ?>" id="InputStok" name="stok" value="<?= $barang['stok']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('stok'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputKadaluarsa">Kadaluarsa</label>
                    <input type="date" class="form-control <?= ($validation->hasError('kadaluarsa')) ? 'is-invalid' : ''; ?>" id="InputKadaluarsa" name="kadaluarsa" value="<?= $barang['kadaluarsa']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('kadaluarsa'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputFoto">Foto Produk</label>
                    <input type="text" class="form-control <?= ($validation->hasError('foto_produk')) ? 'is-invalid' : ''; ?>" id="InputFoto" name="foto_produk" value="<?= $barang['foto_produk']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('foto_produk'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>