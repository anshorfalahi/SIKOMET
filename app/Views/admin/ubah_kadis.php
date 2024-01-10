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
                        <h4 class="card-title">Edit Nama dan NIP KADIS </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php if(session()->getFlashdata('success')): ?>
                                <div class="alert alert-success" role="alert" >
                                    <?= session()->getFlashdata('success') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right;"></button>
                                </div>
                                <?php elseif(session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger" role="alert" >
                                    <?= session()->getFlashdata('error') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right;"></button>
                                </div>
                            <?php endif; ?>
                            <form class="form form-horizontal" action="<?= base_url() ?>/perjanjian_kerja_sama/processEditKadis" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="first-name-horizontal-icon"><b>Nama Kepala Dinas DKISP</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='nama_kadis' value="<?= $dkisp[0]['nama'] ?>" >
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal-icon"><b>NIP Kepala Dinas DKISP</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='nip_kadis' value="<?= $dkisp[0]['nip'] ?>" >
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-credit-card"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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