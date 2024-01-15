<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

    <link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/extensions/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/extensions/filepond/filepond.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/extensions/toastify-js/src/toastify.css">

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
<div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Ubah Data Wartawan</h4>
            </div>
            <div class="card-content">
                <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php elseif (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif ?>
                <div class="card-body">
                    <form class="form form-horizontal" action="<?= base_url() ?>/kontribusi_wartawan/updateWartawan/<?= $wartawan['id_wartawan'] ?>" method="post" enctype="multipart/form-data">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first-name-horizontal-icon"><b>Nama Wartawan</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name='nama_wartawan' value="<?= $wartawan['nama_wartawan'] ?>" required>   
                                            <div class="form-control-icon">
                                                <i class="bi bi-justify"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-horizontal-icon"><b>No Handphone</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name='no_hp' value="<?= $wartawan['no_hp'] ?>" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-link-45deg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal-icon"><b>No Rekening</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name='no_rek' value="<?= $wartawan['no_rek'] ?>" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-link-45deg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal-icon"><b>Nama Media</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name='nama_media' value="<?= $wartawan['nama_media'] ?>" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-link-45deg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal-icon"><b>Nama Perusahaan</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name='nama_perusahaan' value="<?= $wartawan['nama_perusahaan'] ?>" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-link-45deg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal-icon"><b>Upload Berkas</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <div class="position-relative">
                                        <input type="file" name="berkas" class="basic-filepond"  value="<?= $wartawan['berkas'] ?>" >
                                        <p>Format Pdf Max Size 5120kb</p>
                                        <a href="<?= base_url() ?>berkas/<?= $wartawan['berkas'] ?>" target="_blank" class="btn btn-info btn-sm"><i class="bi bi-file-earmark-pdf"></i> Lihat Berkas Lama</a>
                                        <input type="text" name="berkaslama" value="<?= $wartawan['berkas'] ?>" hidden>
                                        <p id="errorMessage" style="color: red;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <a href="<?= base_url() ?>kontribusi_wartawan" class="btn btn-light-secondary me-1 mb-1">Kembali</a>
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
<script src="<?= base_url() ?>assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
<script src="<?= base_url() ?>assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
<script src="<?= base_url() ?>assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
<script src="<?= base_url() ?>assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="<?= base_url() ?>assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js"></script>
<script src="<?= base_url() ?>assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="<?= base_url() ?>assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
<script src="<?= base_url() ?>assets/extensions/filepond/filepond.js"></script>
<script src="<?= base_url() ?>assets/extensions/toastify-js/src/toastify.js"></script>
<script src="<?= base_url() ?>assets/static/js/pages/filepond.js"></script>

<script src="<?=base_url()?>assets/compiled/js/app.js"></script>
<script src="<?=base_url()?>assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?=base_url()?>assets/compiled/js/app.js"></script>

<script src="<?=base_url()?>assets/extensions/flatpickr/flatpickr.min.js"></script>
<script src="<?=base_url()?>assets/static/js/pages/date-picker.js"></script>


<?= $this->endSection() ?>