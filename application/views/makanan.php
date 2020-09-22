<div class="container-fluid">
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
    <h3 class="text-center">Data Makanan</h3> <hr>
    <div class="row text-center">
        <?php foreach($makan as $mkn) : ?>
            <div class="card ml-3 mb-3" style="width: 16.2rem;">
                <img src="<?php echo base_url().'/upload/'.$mkn->gambar?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $mkn->nama_makanan ?></h5>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($mkn->harga, 0,',','.') ?></span>
                    <br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$mkn->id_makanan,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>')?>
                    <?php echo anchor('dashboard/detail/'.$mkn->id_makanan,'<div class="btn btn-sm btn-success">Detail</div>')?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>