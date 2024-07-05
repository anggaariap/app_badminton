<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Pemesanan Lapangan</h6>
            <h1 class="mb-5"><span class="text-primary text-uppercase"></span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid" data-wow-delay="0.1s" src="<?= base_url() ?>public/image/upload/lapangan/<?= $data_lapangan['foto_lapangan'] ?>" style="margin-top: 25%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    echo validation_errors('<div class="alert alert-danger alert-dismissible">','</div>');
                    if ($this->session->flashdata('success'))
                    {
                        echo '<div class="alert alert-success alert-dismissible " role="alert">';
                        echo $this->session->flashdata('success');
                        echo '</div>';
                    }
                    if ($this->session->flashdata('error'))
                    {
                        echo '<div class="alert alert-danger alert-dismissible " role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }

                    ?>
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="<?php echo base_url() ?>riwayat/insert" method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" value="<?= $this->session->userdata('nama') ?>" readonly>
                                    <input type="hidden" class="form-control" id="id_lapangan" name="id_lapangan" placeholder="Nama Lapangan" value="<?= $data_lapangan['id_lapangan'] ?>" readonly>
                                    

                                    <label for="name">Nama Customer</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" value="<?= $cutomer['email'] ?>" readonly>
                                    <label for="email">Email Customer</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama_lapangan" name="nama_lapangan" placeholder="Nama Lapangan" value="<?= $data_lapangan['nama_lapangan'] ?>" readonly>
                                    <label for="name">Nama Lapangan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" required/>
                                    <label for="checkin">Tanggal Sewa</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <select class="form-control" id="id_jadwal" name="id_jadwal">
                                        <option value="">Pilih</option>
                                        <?php foreach($list_jadwal as $row){ ?>
                                            <option value="<?= $row->id_jadwal ?>"><?= $row->jam ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="number" class="form-control" id="lama_sewa" name="lama_sewa" required/>
                                    <label for="checkin">Lama Sewa (dalam jam)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Pesan Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>