<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Pemilihan Ketua Osis</title>

  <!-- Favicons -->
  <link href="<?= base_url('assets/images/' . $sekolah->logo); ?>" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/template'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url('assets/template'); ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/template'); ?>/css/style.css" rel="stylesheet">
  <!-- <link href="<?= base_url('assets/template'); ?>/css/style-responsive.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="<?= base_url(); ?>/assets/material-dashboard.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template'); ?>/lib/gritter/css/jquery.gritter.css" />
  <style>
    .header ul {
      margin-left: 80px;
      margin-top: 14px;
      right: 18px;
      position: absolute;
    }

    .header ul li {
      display: inline-block;
      margin-left: 5px;
      font-size: 20px;
    }

    .header ul li a {
      border: 1px solid #393b3f;
      padding: 2px 4px;
      border-radius: 8px;
      color: #62cdc4;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      transition: 0.2s;
    }

    .header ul li a:hover {
      background-color: #3d514d;
      color: #0ff9e6;
      font-size: 22px;
    }

    .table td {
      padding: 10px;
      vertical-align: top !important;
    }
  </style>

</head>

<body style="background-image: url(<?= base_url('assets/images/wheat.png'); ?>);">


  <!--header start-->
  <header class="header black-bg" style="padding-top: 10px;">

    <!--logo start-->
    <a href="<?= base_url(); ?>" class="logo"><b><span>P E T I S</span></b></a>
    <!--logo end-->
    <ul>
      <li>
        <a href="<?= base_url('welcome/visimisi'); ?>">Visi Misi</a>
      </li>
      <li>
        <a href="javascript:void(0)" data-target="#modal-petunjuk" data-toggle="modal">Cara Memilih</a>
      </li>

    </ul>
  </header>
  <!--header end-->

  <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
  <!--main content start-->

  <section class="container">


    <br><br>
    <div class="container" style="color: black; font-size: 12pt; background-color: #5e5e5e; padding: 10px">
      <h2 class="text-center" style="color: white; font-weight: bolder">
        <br><br> VISI DAN MISI <br> CALON KETUA OSIS
      </h2>
      <br><br><br>
      <div style="background-color: white; padding: 10px 5px; border: 1px solid black; border-radius: 4px; ">
        <?php foreach ($calon as $c) : ?>
          <h2 style="font-weight: bolder; text-align: center">Nomor Urut <?= $c->nomorUrut; ?></h2>
          <br>
          <table class="table" style="border-bottom: 2px solid black; width:100%">
            <tr>
              <td width="200px">Nama Calon Ketua</td>
              <td><?= $c->nama; ?></td>
            </tr>
            <tr>
              <td width="200px">Nama Calon Wakil Ketua</td>
              <td><?= $c->wakil; ?></td>
            </tr>
            <tr>
              <td width="200px">Kelas</td>
              <td><?= $c->kelas; ?></td>
            </tr>
            <tr>
              <td width="200px">Visi</td>
              <td><?= $c->visi; ?></td>
            </tr>
            <tr>
              <td width="200px">Misi</td>
              <td><?= $c->misi; ?></td>
            </tr>
          </table>
          <br>
        <?php endforeach; ?>
      </div>

    </div>

    <div class="modal fade" id="modal-petunjuk">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title">Informasi !</h2>
          </div>

          <div class="modal-body">
            <h3>Silakan gunakan hak suara anda dengan cara berikut :</h3>
            <h3>
              <ol type="1">
                <li>
                  Arahkan pointer mouse ke foto pasangan calon pilihan anda.
                </li>
                <li>
                  Klik tombol pilih dibawah foto pasangan calon.
                </li>
                <li>
                  Masukkan KODE pilih sesuai yang tertera di kartu pemilih.
                </li>
                <li>
                  Klik tombol simpan pilihan.
                </li>
                <li>
                  Pastikan muncul pesan bahwa proses pemilihan sudah berhasil dilakukan pada pojok kanan bawah.
                </li>
              </ol>
            </h3>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

          </div>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <script src="<?= base_url('assets/template'); ?>/lib/jquery/jquery.min.js"></script>

    <script src="<?= base_url('assets/template'); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/jquery.dcjqaccordion.2.7.js"></script>

    <script src="<?= base_url('assets/template'); ?>/lib/common-scripts.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/gritter-conf.js"></script>




    <?php if ($this->session->flashdata('pesan')) : ?>
      <script type="text/javascript">
        $(document).ready(function() {
          var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Informasi!',
            // (string | mandatory) the text inside the notification
            text: '<?= $this->session->flashdata('pesan'); ?>',
            // (string | optional) the image to display on the left
            image: false,
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 20000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
          });

          return false;
        });
      </script>
    <?php endif; ?>
</body>

</html>