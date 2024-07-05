    <div class="row">
        <div class="col-md-12">
            <div class="text-left wow fadeInUp" data-wow-delay="0.1s">
                <p class="mb-5 mt-1"><strong>Selamat Datang di Admin Dashboard Hamdalah Sport</strong></p>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-c-yellow text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Total Booking</p>
                            <h4 class="m-b-0"><?= $jumlah_pemesanan ?></h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-file f-50 text-c-yellow"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-c-green text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Total Lapangan</p>
                            <h4 class="m-b-0"><?= $jumlah_lapangan ?></h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-flag f-50 text-c-green"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-c-pink text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="m-b-5">Total Member</p>
                            <h4 class="m-b-0"><?= $jumlah_member ?></h4>
                        </div>
                        <div class="col col-auto text-right">
                            <i class="feather icon-user f-50 text-c-pink"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>