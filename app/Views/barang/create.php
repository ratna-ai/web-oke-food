<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <form action="/daftar/save" method="post">
            <?php csrf_field(); ?>
                <h3 class="mt-3 mb-3" style="text-align: center;">Tambah Data Produk</h3>
                <div class="form-group">
                    <label for="InputNama">Nama Produk</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama_produk')) ? 'is-invalid' : ''; ?>" id="InputNama" placeholder="Masukkan Nama Produk" name="nama_produk">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_produk'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputDeskripsi">Deskripsi Produk</label>
                    <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="InputDeskripsi" placeholder="Masukkan Deskripsi Produk" name="deskripsi">
                    <div class="invalid-feedback">
                        <?= $validation->getError('deskripsi'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputHarga">Harga</label>
                    <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="InputHarga" placeholder="Masukkan Harga Produk" name="harga">
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga'); ?>
                    </div>
                </div>  
                <div class="form-group">
                    <label for="InputStok">Stok</label>
                    <input type="text" class="form-control <?= ($validation->hasError('stok')) ? 'is-invalid' : ''; ?>" id="InputStok" placeholder="Masukkan Stok Produk" name="stok">
                    <div class="invalid-feedback">
                        <?= $validation->getError('stok'); ?>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="InputKadaluarsa">Tanggal Kadaluarsa</label>
                    <input type="date" class="form-control <?= ($validation->hasError('kadaluarsa')) ? 'is-invalid' : ''; ?>" id="InputKadaluarsa" placeholder="Masukkan Tanggal Kadaluarsa" name="kadaluarsa">
                    <div class="invalid-feedback">
                        <?= $validation->getError('kadaluarsa'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputFoto">Foto Produk</label>
                    <input type="text" class="form-control <?= ($validation->hasError('foto_produk')) ? 'is-invalid' : ''; ?>" id="InputFoto" placeholder="Masukkan Foto Produk" name="foto_produk">
                    <div class="invalid-feedback">
                        <?= $validation->getError('foto_produk'); ?>
                    </div>
                </div>  
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>