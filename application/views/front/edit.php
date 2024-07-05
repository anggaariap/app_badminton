    <!-- <div class="page-title" style="background: url(<?= base_url() ?>public/front/assets/images/<?= $fotomenu['foto_menu'] ?>); background-repeat: no-repeat; background-position: center;">
		<h2 style="font-size: 34px;"><?= $fotomenu['judul_menu'] ?></h2>
	</div>
	<div class="content">
		<div class="container">
			<div class="col-12">
				<ul class="breadcrumb">
                    <li><i class="icon-home home-icon"></i><a href="<?= base_url() ?>"></i>Home</a><span class="divider"><i class="icon-angle-right arrow-icon"></i></span></li>
                    <li><a href="" title="edit"><?= $fotomenu['judul_menu'] ?></a></li></ul>			</div>
			<div class="css-list">
				<div class="row">
					<div class="col-md-12">
						
                        <style>
                            .sidebar-member .profile, .sidebar-member .histori, .sidebar-member .logout, .sidebar-member .konfirmasi{
                                padding:10px 10px;
                                border-top:1px solid rgb(0,0,0,0.1);
                            }
                            .sidebar-member a{
                                color:inherit;
                            }
                            .sidebar-member a:hover{
                                color:#2196f3;
                            }
                            .sidebar-member p{
                                text-align:left;
                                display:inline;
                            }
                            .fa{
                                width:20px;
                                
                            }
                        </style>

                        <div class="row mt-2" style="min-height:500px;">
                            <div class="col-md-3 col-12 sidebar-member py-3">
                                <h3 class=" mb-4"><?= $data_profil->nama_pengunjung ?></h3>
                        
                                <?php foreach($menufront as $rowf){?>
                                    <a href="<?= base_url() ?><?= $rowf->url_menu ?>"><div class="profile"><i class="<?= $rowf->icon_menu ?>" aria-hidden="true"></i> <p><?= $rowf->judul_menu ?></p></div></a>
                                <?php } ?>
                            </div>
                            <div class="col-md-9 col-12">
                                <?php  
                                echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
                                if ($this->session->flashdata('warning'))
                                {
                                    echo '<div class="alert alert-warning alert-slide-up">';
                                    echo $this->session->flashdata('warning');
                                    echo '</div>';
                                }

                                if ($this->session->flashdata('success'))
                                {
                                    echo '<div class="alert alert-success alert-slide-up">';
                                    echo $this->session->flashdata('success');
                                    echo '</div>';
                                }
                                ?>

                                <div class="shadow mb-5 p-2">  
                                    <h2>Form Edit Reservasi</h2>
                                    <form class="form-update">
                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Paket Retret</label>
                                                <div class="col-md-9">
                                                    <select id="id_paket" name="id_paket" class="form-control" required>
                                                        <option value="<?= $data_reservasi->id_paket ?>"><?= $data_reservasi->nama_paket ?></option>
                                                        <option value="">- Pilih Paket -</option>
                                                        <?php foreach($paket as $pb){ ?>
                                                            <option value="<?= $pb->id_paket ?>"><?= $pb->nama_paket ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Instansi Pemesan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="instansi_pemesan" id="instansi_pemesan" value="<?= $data_reservasi->instansi_pemesan ?>" placeholder="Instansi Pemesan" required>
                                                    <input type="hidden" class="form-control" name="id_reservasi" id="id_reservasi" value="<?= $data_reservasi->id_reservasi ?>" placeholder="Instansi Pemesan" readonly>
                                                    <input type="hidden" class="form-control" name="no_reservasi" id="no_reservasi" value="<?= $data_reservasi->no_reservasi ?>" placeholder="Instansi Pemesan" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Nama Pemesan</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" placeholder="Nama Pemesan" value="<?= $data_profil->nama_pengunjung ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">No. Telepon</label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="telp_pemesan" id="telp_pemesan" placeholder="Instansi Pemesan" value="<?= $data_profil->telp_pengunjung ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Alamat</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="alamat_pemesan" id="alamat_pemesan" placeholder="Alamat Pemesan" value="<?= $data_reservasi->alamat_pemesan ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Tanggal Check In</label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="check_in" id="check_in" placeholder="date" value="<?= $data_reservasi->check_in ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Tanggal Check Out</label>
                                                <div class="col-md-4">
                                                    <input type="date" class="form-control" name="check_out" id="check_out" placeholder="date" value="<?= $data_reservasi->check_out ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Kegiatan</label>
                                                <div class="col-md-6">
                                                    <select id="kegiatan" name="kegiatan" class="form-control" required>
                                                        <option value="<?= $data_reservasi->kegiatan ?>"><?= $data_reservasi->kegiatan ?></option>
                                                        <option value="">- Pilih Kegiatan -</option>
                                                        <option value="Retret">Retret</option>
                                                        <option value="Rekoleksi">Rekoleksi</option>
                                                        <option value="Lokakarya">Lokakarya</option>
                                                        <option value="Seminar">Seminar</option>
                                                        <option value="Rapat">Rapat</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Topik</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="topik" id="topik" placeholder="Topik" value="<?= $data_reservasi->topik ?>" required>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Jumlah Tamu</label>
                                                <div class="col-md-3">
                                                    <input type="number" class="form-control" name="jumlah_tamu" id="jumlah_tamu" placeholder="Jumlah Tamu" value="<?= $data_reservasi->jumlah_tamu ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Pembimbing Rohani</label>
                                                <div class="col-md-6">
                                                    <select id="pembimbing" name="pembimbing" class="form-control" required>
                                                        <option value="<?= $data_reservasi->pembimbing ?>"><?= $data_reservasi->pembimbing ?></option>
                                                        <option value="">- Pilih -</option>
                                                        <option value="Sudah ada, disiapkan dari kelompok">Sudah ada, disiapkan dari kelompok</option>
                                                        <option value="Belum ada, disiapkan dari rumah retret">Belum ada, disiapkan dari rumah retret</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group hidden-js" id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Deskripsi Permintaan khusus</label>
                                                <div class="col-md-9">
                                                    
                                                    <textarea class="form-control" name="deskripsi_permintaan" id="deskripsi_permintaan" rows="8" required><?= $data_reservasi->deskripsi_permintaan ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php if($data_reservasi->status_reservasi == 'Order'){ ?>
                                        <div class="form-group row">
                                            <div class="col-md-12 text-center mb-2">
                                                <button type="button" class="btn btn-primary btnupdateres" id="btnupdateres" style="background-color:#BF3A3D; border:unset;">Submit</button>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->