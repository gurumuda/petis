<style>
  th {
    width: 50%
  }
</style>
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-9 main-chart">
        <!--CUSTOM CHART START -->
        <div class="border-head">
          <h3>Dashboard Aplikasi Pemilihan Ketua Osis</h3>
        </div>

        <div class="row">
          <!-- DIRECT MESSAGE PANEL -->
          <div class="col-md-6 mb">
            <div class="message-p pn">
              <div class="message-header" style="background:blue">
                <h5 style="color:white">Informasi Sekolah</h5>
              </div>
              <div class="row">
                <div class="col-md-12" style="padding-left: 25px">
                  <table>
                    <tr>
                      <th>Nama Sekolah</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= $sekolah->nmSekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= $sekolah->almt; ?></td>
                    </tr>
                    <tr>
                      <th>Tlp</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= $sekolah->tlp; ?>
                      <td>
                    </tr>
                    <tr>
                      <th>Calon Ketua</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= $jumlahCalon; ?> Orang</td>
                    </tr>
                    <tr>
                      <th>Jumlah Pemilih</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= $jumlahpemilih; ?> Orang</td>
                    </tr>
                    <tr>
                      <th>Tanggal Pemilihan</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= tgl($sekolah->tglPilihan); ?></td>
                    </tr>
                    <tr>
                      <th>Jam Pemilihan</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= $sekolah->jamPilihan; ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Selesai</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= tgl($sekolah->tglPilihans); ?></td>
                    </tr>
                    <tr>
                      <th>Jam Selesai</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td><?= $sekolah->jamPilihans; ?></td>
                    </tr>

                  </table>
                </div>
              </div>

            </div>
            <!-- /Message Panel-->
          </div>
          <!-- /col-md-6  -->
          <div class="col-md-6 mb">
            <div class="message-p pn">
              <div class="message-header" style="background:green">
                <h5 style="color:white">Informasi Aplikasi</h5>
              </div>
              <div class="row">
                <div class="col-md-12" style="padding-left: 25px">
                  <table>
                    <tr>
                      <th>Nama Aplikasi</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td>Petis (Pemilihan Ketua Osis)</td>
                    </tr>
                    <tr>
                      <th>Versi PHP</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td>7.0 sd 7.3</td>
                    </tr>
                    <tr>
                      <th>Database</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td>Mysql database
                      <td>
                    </tr>
                    <tr>
                      <th>Backend Developer</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td>yuwandianto</td>
                    </tr>
                    <tr>
                      <th>Template</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td>DASHIO</td>
                    </tr>
                    <tr>
                      <th>Tahun Pembuatan</th>
                      <td>:</td>
                      <td width="10px"></td>
                      <td>2020</td>
                    </tr>
                  </table>
                  <br>
                  <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-info"><i class="fa fa-info"></i> &nbsp;Cara Penggunaan</button>
                </div>

              </div>


            </div>
            <!-- /Message Panel-->
          </div>
          <!-- /col-md-6  -->
        </div>
        <div class="row">
          <!-- WEATHER PANEL -->
          <div class="col-md-4 mb">
            <div class="weather pn">
              <i class="fa fa-calendar fa-4x"></i>
              <h2><?= date('d'); ?></h2>
              <h4><?= date('F'); ?></h4>
            </div>
          </div>
          <!-- /col-md-4-->
          <div class="col-md-8">
          </div>
        </div>
      </div>



      <div class="col-lg-3 ds">

        <!-- RECENT ACTIVITIES SECTION -->
        <h4 class="centered mt">RECENT ACTIVITY</h4>
        <!-- First Activity -->
        <div class="aksi">

        </div>


      </div>
      <!-- /col-lg-3 -->
    </div>
    <!-- /row -->
  </section>
</section>
<!--main content end-->

<div class="modal fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> Informasi Cara Penggunaan!</h4>
      </div>
      <div class="modal-body" style="font-family: 'Times New Roman', Times, serif; font-size: 12pt">
        <ol type="i">
          <li>
            Lakukan pengaturan pada data sekolah, jadwal kegiatan, dan unggah logo sekolah.
          </li>
          <li>
            Sebelum kegiatan dimulai, lakukan reset hasil dengan menekan tombol RESET HASIL PEMILIHAN di menu pengaturan sekolah untuk memastikan semua data lama telah terhapus.
          </li>
          <li>
            Tambahkan data kandidat ketua dan wakil ketua osis. Perubahan kandidat hanya bisa dilakukan sebelum kegiatan dimulai (tombol tambah, hapus, dan ubah non aktif pada saat kegiatan pemilihan berlangsung).
          </li>
          <li>
            Unggah data pemilih dengan menggunakan format yang telah disediakan.
          </li>
          <li>
            Setelah mengunggah data pemilih anda dapat mencetak kartu pemilih yang dikelompokkan berdasarkan kelas.
          </li>
          <li>
            Menu perhitungan suara sementara akan aktif pada saat kegiatan pemilihan berlangsung.
          </li>
          <li>
            Pemilih bisa mengakses <?= base_url(); ?> untuk melakukan pemilihan.
          </li>
          <li>
            Pemilih hanya bisa memilih pada rentang waktu yang telah ditentukan. Kode pilih hanya bisa digunakan satu kali.
          </li>
          <li>
            Menu hasil akhir akan aktif setelah kegiatan selesai.
          </li>

        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>