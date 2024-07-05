<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4><?= $judul ?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                <li class="breadcrumb-item" style="float: left;">
                <a href="<?= base_url() ?>dashboard"> <i class="feather icon-home"></i> </a>
                </li>
                <li class="breadcrumb-item" style="float: left;"><a href="<?= base_url() ?>"><?= $judul ?></a>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="page-body">
    <div class="row">
        <div class="col-sm-12">

            <div class="card">

                <div class="card-block">
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
                    <h4 class="sub-title"></h4>
                    
                    <form action="<?php echo base_url().'pengumuman/insert'?>" method="post" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Judul Pengumuman</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="judul_pengumuman" name="judul_pengumuman" required="required">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Isi Pengumuman</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="isi_pengumuman" name="isi_pengumuman" required="required">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Pengumuman</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tgl_pengumuman" name="tgl_pengumuman" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
						    <label class="col-md-3 control-label">Nama Admin</label>
                            <div class="input-group col-sm-8 col-md-8">
                                <select class="form-control" id="id_admin" name="id_admin">
                                    <option value="">Pilih</option>
                                    <?php foreach($list_admin as $row){ ?>
                                    <option value="<?= $row->id_admin ?>"><?= $row->nama_admin ?></option>
                                    <?php } ?>
                                </select>
                            </div>
						</div>


                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-8">
                                <a href="<?= base_url()?>pengumuman" class="btn btn-warning m-b-0">Kembali</a>
                                <button type="submit" class="btn btn-primary m-b-0">Simpan</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>