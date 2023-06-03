<?php
$menu = $this->uri->segment(1);
$sub = $this->uri->segment(2);; ?>
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="profile.html"><img src="<?= base_url('assets/images/' . $sekolah->logo); ?>" class="img-circle" width="80"></a></p>
      <h5 class="centered"><?= $sekolah->nmSekolah; ?></h5>
      <li class="mt">
        <a <?= ($sub == '') ? 'class="active"' : ''; ?> href="<?= base_url('admin'); ?>">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sub-menu">
        <a <?= ($sub == 'setsekolah' || $sub == 'ubahsekolah' || $sub == 'aturcalon' || $sub == 'pemilih' || $sub == 'user') ? 'class="active"' : ''; ?> href="javascript:;">
          <i class="fa fa-cogs"></i>
          <span>Settings</span>
        </a>
        <ul class="sub">
          <li <?= ($sub == 'setsekolah' || $sub == 'ubahsekolah') ? 'class="active"' : ''; ?>><a href="<?= base_url('admin/setsekolah'); ?>">Sekolah</a></li>
          <li <?= ($sub == 'aturcalon') ? 'class="active"' : ''; ?>><a href="<?= base_url('admin/aturcalon'); ?>">Kandidat</a></li>
          <li <?= ($sub == 'pemilih') ? 'class="active"' : ''; ?>><a href="<?= base_url('admin/pemilih'); ?>">Pemilih</a></li>
          <li <?= ($sub == 'user') ? 'class="active"' : ''; ?>><a href="<?= base_url('admin/user'); ?>">User</a></li>
        </ul>
      </li>

      <li class="sub-menu">
        <a <?= ($sub == 'sementara' || $sub == 'hasil') ? 'class="active"' : ''; ?> href="javascript:;">
          <i class="fa fa-bar-chart-o"></i>
          <span>Suara</span>
        </a>
        <ul class="sub">
          <li <?= ($sub == 'sementara') ? 'class="active"' : ''; ?>><a <?= (($sekolah->tglPilihan . ' ' . $sekolah->jamPilihan) < date('Y-m-d H:i:s') && ($sekolah->tglPilihans . ' ' . $sekolah->jamPilihans) > date('Y-m-d H:i:s')) ? 'href="' . base_url('admin/sementara') . '"' : 'href="javascript:void(0)"'; ?>>Sementara</a></li>
          <?php if (($sekolah->tglPilihans . ' ' . $sekolah->jamPilihans) < date('Y-m-d H:i:s')) : ?>
            <li <?= ($sub == 'hasil') ? 'class="active"' : ''; ?>><a class="buathasil" href="<?= base_url('admin/hasil'); ?>">Hasil Akhir</a></li>
          <?php endif; ?>

        </ul>
      </li>

    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->