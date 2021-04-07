<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>List Produk Oke Frozen Food</h1>
    <div class="text-center"><span class="underline"></span></div> 
</div>

<br>

<div class="container">
    <div class="text-right">
        <a href="/daftar/create"><button type="button" class="btn btn-info mb-3">+ Tambah Data</button></a>
    </div>
</div>

<div class="container">
    <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <div class="card-deck">
        <?php 
        $no = 1;
        foreach ($barang as $b) : ?>
        <div class="col-sm-3 col-sm-4">
        <div class="card">
            <div class="text-center">
                <img class="card-img-top" src="/img/<?= $b['foto_produk']; ?>" alt="Card image cap" style="width: 150px; height:150px;">
            </div>
            <div class="card-body">
            <h5 class="card-title"><?= $b['nama_produk']; ?></h5>
            <p class="card-text"><?= $b['deskripsi']; ?></p>
            <a href="/daftar/<?= $b['slug']; ?>" class="btn btn-primary">Detail>></a>
            </div>
        </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>



<?= $this->endSection(); ?>