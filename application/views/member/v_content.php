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
                <li class="breadcrumb-item" style="float: left;"><a href="<?= base_url() ?>member"><?= $judul ?></a>
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
                        
                    </ul>

                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">No.</th>
                                    <th style="width: 20%;">Nama Member</th>
                                    <th style="width: 20%;">No HP</th>
                                    <th style="width: 20%;">Email</th>
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php $no=1; foreach($data as $row){?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama_member ?></td>
                                    <td><?= $row->no_hp ?></td>
                                    <td><?= $row->email ?></td>
                                    <td>
                                    
                                    <a href="<?= base_url(); ?>member/edit/<?= $row->id_member ?>" type="submit" class="btn btn-sm btn-warning" id="<?= $row->id_member ?>"><i class="fa fa-lg fa-edit"></i> Edit</a>

                                    <a type="submit" class="btn btn-sm btn-danger btnhapus" data-id="<?= $row->id_member ?>"><i class="fa fa-lg fa-trash"></i> Hapus</a></td>
                                    
                                    
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