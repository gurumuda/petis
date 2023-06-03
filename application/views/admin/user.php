<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12 main-chart">
        <!--CUSTOM CHART START -->
        <div class="border-head">
          <button data-target="#modal-konfirmasi" data-toggle="modal" class="btn btn-danger pull-right">Reset Hasil Pemilihan</button>
          <h3>Pengaturan data Sekolah</h3>
        </div>

        <div class="row">
          <!-- DIRECT MESSAGE PANEL -->
          <div class="col-md-8 mb">
            <div class="message-p">
              <div class="message-header" style="background:blue">
                <h5 style="color:white">Data Sekolah</h5>
              </div>
              <div class="row">
                <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
                  <div class="form">
                    <?= form_open('admin/ubahsekolah', 'class="cmxform form-horizontal style-form"'); ?>
                    <div class="form-group <?= form_error('namaSekolah') ? 'has-error' : ''; ?>">
                      <label for="namaSekolah" class="control-label col-lg-3">NAMA SEKOLAH</label>
                      <div class="col-lg-9">
                        <input class=" form-control" name="namaSekolah" type="text" value="<?= $sekolah->nmSekolah; ?>" />
                        <?= form_error('namaSekolah') ? '<span class="help-block">' . form_error('namaSekolah') . '</span>' : ''; ?>

                      </div>
                    </div>

                    <div class="form-group <?= form_error('alamat') ? 'has-error' : ''; ?>">
                      <label for="alamat" class="control-label col-lg-3">ALAMAT SEKOLAH</label>
                      <div class="col-lg-9">
                        <input class="form-control" id="alamat" name="alamat" type="text" value="<?= $sekolah->almt; ?>" />
                        <?= form_error('alamat') ? '<span class="help-block">' . form_error('alamat') . '</span>' : ''; ?>
                      </div>
                    </div>

                    <div class="form-group <?= form_error('tlp') ? 'has-error' : ''; ?>">
                      <label for="tlp" class="control-label col-lg-3">TLP</label>
                      <div class="col-lg-9">
                        <input class="form-control " id="tlp" name="tlp" type="text" value="<?= $sekolah->tlp; ?>" />
                        <?= form_error('tlp') ? '<span class="help-block">' . form_error('tlp') . '</span>' : ''; ?>
                      </div>
                    </div>

                    <div class="form-group <?= form_error('gov') ? 'has-error' : ''; ?>">
                      <label for="gov" class="control-label col-lg-3">PEMERINTAH</label>
                      <div class="col-lg-9">
                        <input class="form-control " id="gov" name="gov" type="text" value="<?= $sekolah->gov; ?>" />
                        <?= form_error('gov') ? '<span class="help-block">' . form_error('gov') . '</span>' : ''; ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-3 col-lg-12">
                        <button class="btn btn-theme" type="submit">Save</button>
                        <button class="btn btn-theme04" type="button">Cancel</button>
                      </div>
                    </div>
                    <?= form_close(); ?>
                  </div>
                </div>
              </div>

            </div>
            <!-- /Message Panel-->

            <div class="message-p">
              <div class="message-header" style="background:blue">
                <h5 style="color:white">Pengaturan Kegiatan</h5>
              </div>
              <div class="row">
                <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
                  <?php if ($sekolah->tglPilihan . $sekolah->jamPilihan > $sekolah->tglPilihans . $sekolah->jamPilihans) : ?>
                    <div class="alert alert-danger">

                      Anda sehat hari ini ?
                      <h4>Silakan cek tanggal dan jam pelaksanaan sepertinya ada yang aneh.</h4>

                    </div>
                  <?php endif; ?>
                  <div class="form">
                    <?= form_open('admin/ubahkegiatan', 'class="cmxform form-horizontal style-form"'); ?>

                    <div class="form-group">
                      <label class="control-label col-md-3">TANGGAL MULAI</label>
                      <div class="col-md-3">

                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="<?= $sekolah->tglPilihan; ?>" class="input-append date dpYears">
                          <input type="text" readonly="" name="tgl" value="<?= $sekolah->tglPilihan; ?>" class="form-control">
                          <span class="input-group-btn add-on">
                            <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group <?= form_error('jam') ? 'has-error' : ''; ?>">
                      <label class="control-label col-md-3">JAM MULAI</label>
                      <div class="col-md-3">
                        <div class="input-group ">
                          <input type="text" name="jam" readonly placeholder="<?= $sekolah->jamPilihan; ?>" class="form-control timepicker-24" />
                          <span class="input-group-btn">
                            <button class="btn btn-theme" type="button">
                              <i class="fa fa-clock-o"></i>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3">TANGGAL SELESAI</label>
                      <div class="col-md-3">
                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="<?= $sekolah->tglPilihan; ?>" class="input-append date dpYears">
                          <input type="text" readonly="" name="tgls" value="<?= $sekolah->tglPilihans; ?>" class="form-control">
                          <span class="input-group-btn add-on">
                            <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group <?= form_error('jams') ? 'has-error' : ''; ?>">
                      <label class="control-label col-md-3">JAM SELESAI</label>
                      <div class="col-md-3">
                        <div class="input-group ">
                          <input type="text" name="jams" readonly placeholder="<?= $sekolah->jamPilihans; ?>" class="form-control timepicker-24" />
                          <span class="input-group-btn">
                            <button class="btn btn-theme" type="button">
                              <i class="fa fa-clock-o"></i>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-3 col-lg-12">
                        <button class="btn btn-theme" type="submit">Save</button>
                        <button class="btn btn-theme04" type="button">Cancel</button>
                      </div>
                    </div>
                    <?= form_close(); ?>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-4 mb">
            <div class="message-p">
              <div class="message-header" style="background:blue">
                <h5 style="color:white">Logo Sekolah</h5>
              </div>
              <div class="row">
                <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
                  <div class="form">
                    <?= form_open_multipart('admin/uploadlogo', 'class="cmxform form-horizontal style-form"'); ?>

                    <div class="form-group last">
                      <div class="col-md-12 text-center">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?= base_url('assets/images/' . $sekolah->logo); ?>" alt="" />
                          </div>
                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                          <div>
                            <span class="btn btn-theme02 btn-file">
                              <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                              <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                              <input type="file" name="logo" class="default" />
                            </span>
                            <a href="<?= base_url('admin/setsekolah'); ?>" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                          </div>
                        </div>
                        <span class="label label-info">NOTE!</span>
                        <span>
                          File harus jpg | png
                        </span>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="text-center col-lg-12">
                        <button class="btn btn-theme" type="submit">Save</button>
                      </div>
                    </div>
                    <?= form_close(); ?>
                  </div>
                </div>
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

<div class="modal fade" id="modal-konfirmasi">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Konfirmasi Reset !</h4>
      </div>
      <?= form_open('admin/reset'); ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Masukkan kata RESET</label>
          <input type="text" class="form-control" name="reset" required>
          <small style="color: red;">Melakukan reset akan menghapus semua hasil pemilihan, mereset status pemilih, dan menghapus semua log activity pemilih</small>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-warning">Reset</button>

      </div>
      <?= form_close(); ?>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>