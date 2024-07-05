    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url() ?>public/image/header1.jpg" alt="Image" height="600">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-3 text-white mb-4 animated slideInDown">The Most Equipped Sport Center</h1>
                            <p>Temukan Sarana Olahraga mu di Hamdalah Sport</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?= base_url() ?>public/image/header2.png" alt="Image" height="600">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-3 text-white mb-4 animated slideInDown">The Most Equipped Sport Center</h1>
                            <p>Temukan Sarana Olahraga mu di Hamdalah Sport</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <div class="container-xxl py-5" id="package">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-5">Booking Lapangan</h1>
                    </div>
                    <div class="row g-4">
                        <?php $total= 0; $no=1; foreach($data as $row){  ?>
                        <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="position-relative">
                                            <img class="img-fluid" alt="Responsive image" src="<?= base_url() ?>public/image/upload/lapangan/<?= $row->foto_lapangan ?>" style="height: 250px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-4 mt-2 text-center">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0"><?= $row->nama_lapangan ?></h5>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <p class="mb-0"><strong>Rp 40.000</strong> Per Jam</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="<?= base_url() ?>riwayat/add/<?= $row->id_lapangan ?>">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <?php }  ?>
                    </div>
                </div>

                <div class="col-md-12 py-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-5 mt-5">Pengumuman</h1>
                    </div>
                    <div class="row g-4 wow fadeInUp">
                        <table class="table" border="0">
                            <tbody>
                                <?php $no=1; foreach($pengumuman as $row){  ?>
                                <tr>
                                    <td scope="row" width="10%" align="left"><i class="fa fa-bullhorn" aria-hidden="true"
                                    style="color: orange;"></i></td>
                                    <td width="90%" align="left">
                                        <strong><a><?= $row->judul_pengumuman ?></a></strong>
                                        <br> 
                                        <span><?= date_indo($row->tgl_pengumuman) ?></span>
                                    </td>
                                </tr>
                                <?php }  ?>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Room End -->

    