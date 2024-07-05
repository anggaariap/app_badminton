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
                <li class="breadcrumb-item" style="float: left;"><a href="<?= base_url() ?>lapangan"><?= $judul ?></a>
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
                    
                    <ul class="nav navbar-right panel_toolbox">
                        
                            <p><a href="<?= base_url(); ?>lapangan/add" class="btn btn-success icon-btn"><i class="icofont icofont-ui-add"></i> Tambah Data</a></p>
                        
                    </ul>

                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th style="width: 20%;">Nama Lapangan</th>
                                    <th style="width: 20%;">Foto Lapangan</th>
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php $no=1; foreach($data as $row){?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama_lapangan ?></td>
                                    <td>
									    <img src="<?= base_url() ?>public/image/upload/lapangan/<?= $row->foto_lapangan ?>" style="width: 80px; height: 100px;">
						            </td>
                                    <td>
                                    
                                    <a href="<?= base_url(); ?>lapangan/edit/<?= $row->id_lapangan ?>" type="submit" class="btn btn-sm btn-warning" id="<?= $row->id_lapangan ?>"><i class="fa fa-lg fa-edit"></i> Edit</a>

                                    <a type="submit" class="btn btn-sm btn-danger btnhapus" data-id="<?= $row->id_lapangan ?>"><i class="fa fa-lg fa-trash"></i> Hapus</a></td>
                                    
                                    
                                </tr>
                                <?php } ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>