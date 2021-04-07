<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/image/banner.jpg" alt="First slide" style="height: 350px;">
        <div class="carousel-caption d-none d-md-block">
            <h3>OKE FROZEN FOOD</h3>
            <p>Dapatkan berbagai jenis frozen food di sini!</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/banner.jpg" alt="Second slide" style="height: 350px;">
        <div class="carousel-caption d-none d-md-block">
            <h3>OKE FROZEN FOOD</h3>
            <p>Harga terjangkau kualitas terjamin!</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/image/banner.jpg" alt="Third slide" style="height: 350px;">
        <div class="carousel-caption d-none d-md-block">
            <h3>OKE FROZEN FOOD</h3>
            <p>Sehat dan halal!!</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>

<div class="col-md-12">
    <div class="main_heading">
        <h1>Menu</h1>
        <div class="text-center"><span class="underline"></span></div>
    </div>
</div><!-- End col-md-12 -->

<br>
<br>

<div class="container">
    <div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="features-div">
                <a href="/daftar"><img src="/image/list.png" style="height: 100px; width: 100px;"></a>
			    <h4>List Barang</h4>
                <p>Silahkan lihat-lihat produk yang kami jual. Jika tertarik silahkan lanjut ke halaman pemesanan untuk mengetahui prosedur pemesanan</p>
			</div>
		</div><!-- End col-md-3-->
		<div class="col-md-4 col-sm-6">
			<div class="features-div">
                <a href="/pesan"><img src="/image/basket.png" style="height: 100px; width: 100px;"></a>
			    <h4>Pemesanan</h4>
                <p>Bagian ini merupakan halaman yang berisi informasi pemesanan di Oke Frozen Food</p>
			</div>
		</div><!-- End col-md-3-->
		<div class="col-md-4 col-sm-6">
			<div class="features-div">
                <a href="/about"><img src="/image/about.png" style="height: 100px; width: 100px;"></a>
			    <h4>About Us</h4>
                <p>Ingin tahu lebih jauh tentang Oke Frozen Food? Bisa kunjungi laman ini.</p>
			</div>			
		</div><!-- End col-md-3-->
	</div><!-- End row -->
</div>

<br>

<div class="more-feature-div">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="/image/nugget.jpg">
			</div><!-- End col-md-6-->
			<div class="col-md-6">
				<div class="more-features-div">
					<h3>Oke Frozen Food</h3>
					<div class="more-features-div-description">
	        Menjual makanan ringan beku (frozen food) dengan bahan-bahan segar dan halal MUI.
	        </div>
				</div>
			</div><!-- End col-md-6-->
		</div><!-- End row -->
	</div><!-- ENd container -->
</div>

<?= $this->endSection(); ?>