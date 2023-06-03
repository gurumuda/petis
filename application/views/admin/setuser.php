<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12 main-chart">
        <!--CUSTOM CHART START -->
        <div class="row">
          <!-- DIRECT MESSAGE PANEL -->
          <div class="col-md-8 mb">
            <div class="message-p">
              <div class="message-header" style="background:blue">
                <h5 style="color:white">Data Pengguna</h5>
              </div>
              <div class="row">
                <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
                  <div class="form">
                    <?= form_open('admin/ubahuser', 'class="cmxform form-horizontal style-form"'); ?>
                    <div class="form-group">
                      <label for="nama" class="control-label col-lg-3">NAMA LENGKAP</label>
                      <div class="col-lg-9">
                        <input class=" form-control" name="nama" type="text" value="<?= $user->nama; ?>" required />
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="xuser" class="control-label col-lg-3">NAMA PENGGUNA </label>
                      <div class="col-lg-9">
                        <input class="form-control" id="xuser" name="xuser" type="text" value="<?= $user->xuser; ?>" required />

                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pass_lama" class="control-label col-lg-3">PASSWORD LAMA</label>
                      <div class="col-lg-9">
                        <input class="form-control " id="pass_lama" name="pass_lama" type="text" placeholder="Masukkan password lama (jika akan diubah)" />
                        <small class="text-danger">Biarkan kosong jika password tidak diubah</small>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="pass_baru" class="control-label col-lg-3">PASSWORD BARU</label>
                      <div class="col-lg-9">
                        <input class="form-control " id="pass_baru" name="pass_baru" type="text" placeholder="Masukkan password baru" />
                        <small class="text-danger">Biarkan kosong jika password tidak diubah</small>
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


          </div>

        </div>

      </div>

    </div>
    <!-- /row -->
  </section>
</section>
<!--main content end-->