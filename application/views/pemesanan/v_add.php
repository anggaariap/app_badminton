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
                    
                    <form action="<?php echo base_url().'pemesanan/insert'?>" method="post" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Pemesanan</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="no_pemesanan" name="no_pemesanan" required="required">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Pemesanan</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tgl_pemesanan" name="tgl_pemesanan" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Sewa</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jam Sewa</label>
                            <div class="col-sm-8">
                                <input type="time" class="form-control" id="jam_sewa" name="jam_sewa" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
						    <label class="col-md-3 control-label">Nama Member</label>
                            <div class="input-group col-sm-8 col-md-8">
                                <select class="form-control" id="id_member" name="id_member">
                                    <option value="">Pilih</option>
                                    <?php foreach($list_member as $row){ ?>
                                    <option value="<?= $row->id_member ?>"><?= $row->nama_member ?></option>
                                    <?php } ?>
                                </select>
                            </div>
						</div>

                        <div class="form-group row">
						    <label class="col-md-3 control-label">Nama Lapangan</label>
                            <div class="input-group col-sm-8 col-md-8">
                                <select class="form-control" id="id_lapangan" name="id_lapangan">
                                    <option value="">Pilih</option>
                                    <?php foreach($list_lapangan as $row){ ?>
                                    <option value="<?= $row->id_lapangan ?>"><?= $row->nama_lapangan ?></option>
                                    <?php } ?>
                                </select>
                            </div>
						</div>


                        <div class="form-group row">
                            <label class="col-sm-3"></label>
                            <div class="col-sm-8">
                                <a href="<?= base_url()?>pemesanan" class="btn btn-warning m-b-0">Kembali</a>
                                <button type="submit" class="btn btn-primary m-b-0">Simpan</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>