<div class="container-xxl py-5" style="min-height: 500px;">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Reservasi</h6>
            <h1 class="mb-5">Data Booking <span class="text-primary text-uppercase"></span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12">
                <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                      <thead>
                          <tr>
                              <th style="width: 5%;text-align: center;">#</th>
                              <th style="width: 15%;text-align: center;">Tanggal Pemesanan</th>
                              <th style="width: 15%;text-align: center;">No Pemesanan</th>
                              <th style="width: 15%;text-align: center;">Nama Lapangan</th>
                              <th style="width: 15%;text-align: center;">Tanggal Sewa</th>
                              <th style="width: 15%;text-align: center;">Jam</th>
                              <th style="width: 15%;text-align: center;">Lama Sewa</th>
                              <th style="width: 15%;text-align: center;">Bukti Pemesanan</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $no= 1; foreach($data as $row){  ?>
                            <tr>
                                <td style="width: 5%;text-align: center;"><?= $no++ ?></td>
                                <td style="width: 15%;text-align: center;"><?= date_indo($row->tgl_pemesanan) ?></td>
                                <td style="width: 15%;text-align: center;"><?= $row->no_pemesanan ?></td>
                                <td style="width: 15%;text-align: center;"><?= $row->nama_lapangan ?></td>
                                <td style="width: 15%;text-align: center;"><?= date_indo($row->tgl_sewa) ?></td>
                                <td style="width: 15%;text-align: center;"><?= $row->jam ?></td>
                                <td style="width: 15%;text-align: center;"><?= $row->lama_sewa ?> Jam</td>
                                <td style="width: 15%;text-align: center;"> <a href="<?= base_url() ?>riwayat/bill/<?= $row->no_pemesanan ?>" target="_blank" class=" btn btn-sm btn-info" data-toggle="tooltip" title="Cetak"><span class="glyphicon glyphicon-print"> Cetak</span></a> </td>
                            </tr>

                        <?php }  ?>
                      </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>