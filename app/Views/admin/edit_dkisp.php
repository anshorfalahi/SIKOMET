<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?=base_url()?>assets/extensions/filepond/filepond.css">
<link rel="stylesheet" href="<?=base_url()?>assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
<link rel="stylesheet" href="<?=base_url()?>assets/extensions/toastify-js/src/toastify.css">

<link rel="stylesheet" href="<?=base_url()?>assets/extensions/sweetalert2/sweetalert2.min.css">


<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Nama, NIP, dan Keterangan</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="<?= base_url('kelola_dkisp/prosesEditDkisp/'.$dkisp['id']) ?>" method="post">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="first-name-horizontal-icon"><b>Nama</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='nama' value="<?= $dkisp['nama'] ?>" >
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal-icon"><b>NIP</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='nip' value="<?= $dkisp['nip'] ?>" >
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-credit-card"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal-icon"><b>Keterangan</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='keterangan' value="<?= $dkisp['keterangan'] ?>" >
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-x-diamond"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning me-1 mb-1">Edit</button>
                                            <a href="<?= base_url('kelola_dkisp') ?>" class="btn btn-danger me-1 mb-1">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script src="<?=base_url()?>assets/compiled/js/app.js"></script>

<script src="<?=base_url()?>assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?=base_url()?>assets/extensions/sweetalert2/sweetalert2.min.js"></script>
<script src="<?=base_url()?>assets/static/js/pages/sweetalert2.js"></script>


<?= $this->endSection() ?>