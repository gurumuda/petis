</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/template'); ?>/lib/jquery/jquery.min.js"></script>

<script src="<?= base_url('assets/template'); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url('assets/template'); ?>/lib/jquery.scrollTo.min.js"></script>
<script src="<?= base_url('assets/template'); ?>/lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?= base_url('assets/template'); ?>/lib/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="<?= base_url('assets/template'); ?>/lib/common-scripts.js"></script>
<script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/gritter-conf.js"></script>
<!--script for this page-->
<script src="<?= base_url('assets/template'); ?>/lib/sparkline-chart.js"></script>
<script src="<?= base_url('assets/template'); ?>/lib/zabuto_calendar.js"></script>
<!--script for this page-->
<script src="<?= base_url('assets/template'); ?>/lib/jquery-ui-1.9.2.custom.min.js"></script>

<script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="<?= base_url('assets/template'); ?>/lib/advanced-form-components.js"></script>

<?php if (($this->uri->segment(1) == 'admin') && ($this->uri->segment(2) == '')) : ?>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'P E T I S!',
        // (string | mandatory) the text inside the notification
        text: 'Aplikasi untuk membantu kegiatan pemilihan ketua osis berbasis web',
        // (string | optional) the image to display on the left
        image: '<?= base_url('assets/images/' . $sekolah->logo); ?>',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
<?php endif; ?>

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
        time: 10000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
<?php endif; ?>

<script>
  $(document).ready(function() {
    $(".aksi").load("<?= base_url('load/aksi') ?>");

    setInterval(function() {
      $('.aksi').load('<?= base_url('load/aksi') ?>').fadeIn('slow');
    }, 60000);

    $("#sementara").load("<?= base_url('load/sementara') ?>");

    setInterval(function() {
      $('#sementara').load('<?= base_url('load/sementara') ?>').fadeIn('slow');
    }, 10000);
  });
</script>

<script>
  myModalUbah = $('#myModalUbah');
  $('.ubahPemilih').on('click', function() {
    id = $(this).data('id');

    $.ajax({
      type: 'post',
      url: '<?= base_url('load/ubahPemilih'); ?>',
      dataType: 'json',
      data: {
        id: id,
        <?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>'
      },
      success: function(data) {
        myModalUbah.modal('show').on('shown.bs,modal');

        $('#formUbahPemilih [name="nama"]').val(data[0].nama);
        $('#formUbahPemilih [name="nisn"]').val(data[0].nisn);
        $('#formUbahPemilih [name="kelas"]').val(data[0].kelas);
        $('#formUbahPemilih [name="kode"]').val(data[0].kode);
        $('#formUbahPemilih [name="id"]').val(data[0].id);
      },
      error: function() {
        location.reload();
      }

    });
  });

  $('.tutup').on('click', function() {
    location.reload();
  });
</script>

<script>
  $('.buathasil').on('click', function() {
    window.location.href = '<?= base_url('admin/buathasil') ?>';
    $.ajax({
      url: '<?= base_url("admin/buathasil"); ?>'
    })
  })
</script>
</body>

</html>