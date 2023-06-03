<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                        <h4 class="gen-case">
                            Data kandidat ketua osis
                        </h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="mail-option">
                            <!-- Default checked -->
                            <div class="row" style="padding:10px">
                                <a <?= $st == '1' ? 'disabled' : 'data-toggle="modal" data-target="#myModal"'; ?> class="btn btn-sm btn-success"><i class="fa fa-pencil"></i>Tambah Kandidat</a>
                                <table class="table " style="margin-top: 10px;">
                                    <thead>
                                        <tr>
                                            <th>No Urut</th>
                                            <th>Nama Calon Ketua dan Wakil</th>
                                            <th width="10%">Kelas</th>
                                            <th>Visi</th>
                                            <th>Misi</th>
                                            <th>Foto</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($calon as $cl) : ?>
                                            <tr>
                                                <td style="padding: 20px 10px"><?= $cl->nomorUrut; ?></td>
                                                <td style="padding: 20px 10px" width="20%"><?= $cl->nama; ?><br>dan <br><?= $cl->wakil; ?></td>
                                                <td style="padding: 20px 10px"><?= $cl->kelas; ?></td>
                                                <td style="padding: 20px 10px"><?= $cl->visi; ?></td>
                                                <td style="padding: 20px 10px"><?= $cl->misi; ?></td>
                                                <td style="padding: 20px 10px"><img width="100px" src="<?= base_url('assets/images/calon/' . $cl->photo); ?>" alt="" /></td>
                                                <td style="padding: 20px 10px" nowrap>
                                                    <a type="button" <?= $st == '0' ? 'class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModaledit' . $cl->xid . '"' : 'class="btn btn-xs btn-warning disabled"'; ?>><i class="fa fa-edit"></i> Ubah</a>

                                                    <a onclick="return confirm('anda akan menghapus data calon <?= $cl->nama; ?>')" href="<?= base_url('admin/hapuskandidat/' . $cl->xid); ?>" class="btn btn-xs btn-theme04 <?= $st == '1' ? 'disabled' : ''; ?>"><i class="fa fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="myModaledit<?= $cl->xid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Ubah Data Kandidat</h4>
                                                        </div>

                                                        <?= form_open_multipart('admin/ubahkandidat', 'class="cmxform form-horizontal style-form"'); ?>
                                                        <input type="hidden" name="id" value="<?= $cl->xid; ?>">
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
                                                                    <div class="form">
                                                                        <div class="form-group">
                                                                            <label for="namaCalon" class="control-label col-lg-3">NAMA KANDIDAT</label>
                                                                            <div class="col-lg-9">
                                                                                <input class=" form-control" name="namaCalon" type="text" value="<?= $cl->nama; ?>" required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="namaCalon" class="control-label col-lg-3">NAMA WAKIL</label>
                                                                            <div class="col-lg-9">
                                                                                <input class=" form-control" name="namaWakil" type="text" value="<?= $cl->wakil; ?>" required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="nomorUrut" class="control-label col-lg-3">NOMOR URUT</label>
                                                                            <div class="col-lg-9">
                                                                                <input class="form-control" id="nomorUrut" name="nomorUrut" type="text" value="<?= $cl->nomorUrut; ?>" required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="kelas" class="control-label col-lg-3">KELAS</label>
                                                                            <div class="col-lg-9">
                                                                                <input class="form-control" id="kelas" name="kelas" type="text" value="<?= $cl->kelas; ?>" required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="visi" class="control-label col-lg-3">VISI</label>
                                                                            <div class="col-lg-9">
                                                                                <input class="form-control" id="visi" name="visi" type="text" required value="<?= $cl->visi; ?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="misi" class="control-label col-lg-3">MISI</label>
                                                                            <div class="col-lg-9">
                                                                                <textarea name="misi" class="wysihtml5 form-control" rows="9" required><?= $cl->misi; ?></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group last">
                                                                            <div class="col-md-12 text-center">
                                                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                                                        <img src="<?= base_url('assets/images/calon/' . $cl->photo); ?>" alt="" />
                                                                                    </div>
                                                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                                                    <div>
                                                                                        <span class="btn btn-theme02 btn-file">
                                                                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                                                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                                                            <input type="file" name="foto" class="default" required />
                                                                                        </span>
                                                                                        <a href="<?= base_url('admin/setsekolah'); ?>" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="label label-info">NOTE!</span>
                                                                                <span>
                                                                                    Foto jpg atau png
                                                                                </span>
                                                                            </div>
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
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Kandidat</h4>
            </div>

            <?= form_open_multipart('admin/tambahkandidat', 'class="cmxform form-horizontal style-form"'); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
                        <div class="form">
                            <div class="form-group">
                                <label for="namaCalon" class="control-label col-lg-3">NAMA CALON KETUA</label>
                                <div class="col-lg-9">
                                    <input class=" form-control" name="namaCalon" type="text" required placeholder="Masukkan nama calon ketua osis">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaCalon" class="control-label col-lg-3">NAMA CALON WAKIL</label>
                                <div class="col-lg-9">
                                    <input class=" form-control" name="namaWakil" type="text" required placeholder="Masukkan nama calon wakil ketua osis">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nomorUrut" class="control-label col-lg-3">NOMOR URUT</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="nomorUrut" name="nomorUrut" type="text" required placeholder="Masukkan nomor urut pasangan calon">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="kelas" class="control-label col-lg-3">KELAS</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="kelas" name="kelas" type="text" required placeholder="Masukkan kelas pasangan calon ketua osis">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="visi" class="control-label col-lg-3">VISI</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="visi" name="visi" type="text" required placeholder="Masukkan visi pasangan calon ketua osis">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="misi" class="control-label col-lg-3">MISI</label>
                                <div class="col-lg-9">
                                    <textarea name="misi" class="wysihtml5 form-control" rows="9" required placeholder="Masukkan misi dari pasangan calon"></textarea>
                                </div>
                            </div>

                            <div class="form-group last">
                                <div class="col-md-12 text-center">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" name="foto" class="default" required />
                                            </span>
                                            <a href="<?= base_url('admin/setsekolah'); ?>" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-info">NOTE!</span>
                                    <span>
                                        Attached image thumbnail is supported in Latest Firefox,
                                        Chrome, Opera, Safari and Internet Explorer 10 only
                                    </span>
                                </div>
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