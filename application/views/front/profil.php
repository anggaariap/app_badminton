    <div class="page-title" style="background: url(<?= base_url() ?>public/front/assets/images/<?= $fotomenu['foto_menu'] ?>); background-repeat: no-repeat; background-position: center;">
		<h2 style="font-size: 40px;"><?= $fotomenu['judul_menu'] ?></h2>
	</div>
	<div class="content">
		<div class="container">
			<div class="col-12">
				<ul class="breadcrumb">
                    <li><i class="icon-home home-icon"></i><a href="<?= base_url() ?>"></i>Home</a><span class="divider"><i class="icon-angle-right arrow-icon"></i></span></li>
                    <li><a href="<?= base_url() ?>profil" title="Profil"><?= $fotomenu['judul_menu'] ?></a></li></ul>			</div>
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

                                <div class="alert alert-info alert-dismissible in" role="alert">
                                    <button class="close" aria-label="Close" data-dismiss="alert" type="button">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    Selamat Datang <strong><?= $data_profil->nama_pengunjung ?></strong>,<br> Silahkan Lengkapi Data Diri Anda.
                                </div>

                                <div class="shadow mb-5 p-2">  
                                    <h2>Update Profil</h2>
                                    <form class="mb-4" action="<?= base_url() ?>profil/update" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="update" value="">
                                        <div class="form-group hidden-js " id="nama">
                                            <div class="row">
                                                <label for="nama" class="col-md-3 col-form-label">Nama Lengkap</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama_pengunjung" id="nama_pengunjung" value="<?= $data_profil->nama_pengunjung ?>" placeholder="Nama Lengkap" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group hidden-js" id="email">
                                            <div class="row">
                                                <label for="email" class="col-md-3 col-form-label">Email</label>
                                                <div class="col-md-7">
                                                    <input type="email" class="form-control" name="email_pengunjung" value="<?= $data_profil->email_pengunjung ?>" placeholder="user@mail.com" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group hidden-js" id="no_hp">
                                            <div class="row">
                                                <label for="no_hp" class="col-md-3 col-form-label">No Telp</label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="telp_pengunjung" id="telp_pengunjung" value="<?= $data_profil->telp_pengunjung ?>" placeholder="0812345..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group hidden-js" id="password">
                                            <div class="row">
                                                <label for="password" class="col-md-3 col-form-label">Password</label>
                                                <div class="col-md-9">
                                                    <input type="password" name="password_pengunjung"  id="password_pengunjung" class="form-control" placeholder="Password">
                                                   
                                                    <input type="checkbox" onclick="checkFluency()" id="fluency">Tampilkan Password
					                                <span class="focus-input100"></span> <br>
                                                    <span style="color: red;">Kosongkan password jika tidak ingin merubah password</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 text-center mb-2">
                                                <button type="submit" id="submit" class="btn btn-primary" style="background-color:#BF3A3D; border:unset;">Update Profil</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>