<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="/daftar" class="btn btn-primary mt-3">Back to the list</a>
        </div>
        <div class="col-md-6 mt-3" style="text-align: right;">
            <a href="/daftar/edit/<?= $barang['slug']; ?>" class="btn btn-warning">Edit</a>
            <form action="/daftar/<?= $barang['id']; ?>" method="post" class="d-inline">
                <?php csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>

        <div class="col-md-12">
            <h3 class="mt-3 mb-3" style="text-align: center;"><?= $barang['nama_produk']; ?></h3>
            <div class="col-md-12 text-center">
                <img class="card-img-top" src="/img/<?= $barang['foto_produk']; ?>" style="width: 200px; height: 200px; text-align: center;">
            </div>
            <div class="col-md-6 d-inline">
                <table class="table">
                    <tr>
                        <th>Produk</th>
                        <th>:</th>
                        <td><?= $barang['nama_produk']; ?></td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <th>:</th>
                        <td><?= $barang['deskripsi']; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <th>:</th>
                        <td><?= $barang['harga']; ?></td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <th>:</th>
                        <td><?= $barang['stok']; ?></td>
                    </tr>
                    <tr>
                        <th>Kadaluarsa</th>
                        <th>:</th>
                        <td><?= $barang['kadaluarsa']; ?></td>
                    </tr>
                </table>
            </div>
        </div>  
    </div>
</div>

<?= $this->endSection(); ?>