<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12 main-chart">
        <!--CUSTOM CHART START -->
        <div class="border-head">
          <h3>Pengaturan data Pemilih</h3>
        </div>

        <div class="row">
          <!-- DIRECT MESSAGE PANEL -->
          <div class="col-md-12 mb">
            <div class="message-p">
              <div class="message-header" style="background:blue">
                <h5 style="color:white">Data Pemilih</h5>
              </div>
              <div class="col-md-12">

                <div class="pull-right" style="margin-bottom: 20px">
                  <a target="_blank" href="<?= base_url('printt'); ?>" class="btn btn-success">Cetak kartu</a>
                  <a data-target="#myModal" data-toggle="modal" class="btn btn-primary">Upload Data</a>
                  <a href="<?= base_url('admin/hapussemuapemilih'); ?>" class="btn btn-danger" onclick="return confirm('anda akan menghapus semua data pemilih')">Hapus semua data</a>
                </div>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NISN</th>
                      <th>NAMA</th>
                      <th>KELAS</th>
                      <!-- <th>KODE</th> -->
                      <th>STATUS</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if ($pemilih) : ?>
                      <?php $no = $this->uri->segment(3);
                      foreach ($pemilih as $p) : ?>
                        <tr>
                          <td><?= ++$no; ?></td>
                          <td><?= base64_decode($p->nisn); ?></td>
                          <td><?= base64_decode($p->nama); ?></td>
                          <td><?= base64_decode($p->kelas); ?></td>
                          <!-- <td><?= $p->kunci; ?></td> -->
                          <td><?= $p->status == '0' ? '<i class="badge" style="background-color:orange">Belum Memilih</i>' : '<i class="badge" style="background-color:green">Sudah Memilih</i>'; ?></td>
                          <td>
                            <a class="badge" style="background-color:red" onclick="return confirm('anda akan menghapus data <?= base64_decode($p->nama); ?>')" href="<?= base_url('admin/hapuspemilih/' . $p->xid . '/' . $this->uri->segment(3)); ?>"><i class="fa fa-trash"></i> Hapus</a>
                            |
                            <a style="background-color:blue" class="badge ubahPemilih" data-id="<?= $p->xid; ?>"><i class="fa fa-edit"></i> Ubah</a>

                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else : ?>
                      <tr>
                        <td colspan="6">data tidak ditemukan</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
                <?= $this->pagination->create_links(); ?>
              </div>

            </div>
            <!-- /Message Panel-->
          </div>


        </div>

      </div>

    </div>
    <!-- /row -->
  </section>
</section>
<!--main content end-->

<!-- Modal Import-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Import Data Pemilih</h4>
      </div>

      <?= form_open_multipart('admin/importpemilih', 'class="cmxform form-horizontal style-form"'); ?>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
            <div class="form">
              <div class="form-group">
                <label class="control-label col-lg-3">Format Import</label>
                <div class="col-lg-9">
                  <a href="<?= base_url('assets/format import pemilih.xlsx'); ?>" class="btn btn-success"><i class="fa fa-download"></i> Download Format</a>
                </div>
              </div>

              <div class="form-group">
                <label for="nomorUrut" class="control-label col-lg-3">File</label>
                <div class="col-lg-9">
                  <input type="file" name="excel" id="excel" accept=".xlsx" required>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data Pemilih</h4>
      </div>

      <?= form_open('admin/ubahpemilih', 'class="cmxform form-horizontal style-form" id="formUbahPemilih"'); ?>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">

            <div class="form-group">
              <label class="control-label col-lg-3">Nama</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="nama" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3">NISN</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="nisn" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3">Kelas</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="kelas" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3">Kode</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="kode" value="">
              </div>
            </div>




          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default tutup" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>