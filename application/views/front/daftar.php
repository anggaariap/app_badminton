

    <div class="w-100 d-flex justify-content-center">
        <div class="col-12 col-md-7 text-center alert d-none"></div>
    </div>
        <div class="w-100 d-flex justify-content-center my-4">
            <div class="col-12 col-md-7 shadow">
                    <?php  
					echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
					if ($this->session->flashdata('warning'))
					{
						echo '<div class="alert alert-warning alert-slide-up">';
						echo $this->session->flashdata('warning');
						echo '</div>';
					}

					if ($this->session->flashdata('sukses'))
					{
						echo '<div class="alert alert-success alert-slide-up">';
						echo $this->session->flashdata('sukses');
						echo '</div>';
					}
					?>

                <h2 class="mt-3">Form Registrasi</h2>
                <form class="mt-3 form-add">
                    <div class="form-group hidden-js" id="nama">
                        <div class="row">
                            <label for="nama" class="col-md-3 col-form-label">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama_pengunjung" id="nama_pengunjung" placeholder="Nama Lengkap" onkeypress="return harusHuruf(event)" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group hidden-js" id="email">
                        <div class="row">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-7">
                                <input type="email" class="form-control" name="email_pengunjung" id="email_pengunjung" placeholder="user@mail.com" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group hidden-js" id="no_hp">
                        <div class="row">
                            <label for="no_hp" class="col-md-3 col-form-label">No Telp</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="telp_pengunjung" id="telp_pengunjung" placeholder="0812345..." required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group hidden-js" id="password">
                        <div class="row">
                            <label for="password" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password_pengunjung"  id="password_pengunjung" class="form-control" placeholder="Password" required>
                                <input type="checkbox" onclick="checkFluency()" id="fluency">Tampilkan Password
					            <span class="focus-input100"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group hidden-js" id="confirm_password">
                        <div class="row">
                            <label for="confirm_password" class="col-md-3 col-form-label">Konfirm Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" placeholder="Ulangi Password" required>
                                <input type="checkbox" onclick="checkFluencyKonf()" id="fluencykonf">Tampilkan Password
					            <span class="focus-input100"></span>
                                <p id="message"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 text-center mb-2">
                            <button type="button" id="submit" class="btn btn-primary btndaftar" style="background-color:#BF3A3D; border:unset;">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="page-title">
	</div>
