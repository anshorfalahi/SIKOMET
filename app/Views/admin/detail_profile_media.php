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
                        <h4 class="card-title">Profile Media <?= $profile_media['nama_media'] ?></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action=""> 
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="first-name-horizontal-icon"><b>Nama Media</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='nama_media' value="<?= $profile_media['nama_media'] ?>" disabled>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal-icon"><b>Nama Instansi / PT</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='nama_instansi' value="<?= $profile_media['nama_instansi'] ?>" disabled>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon"><b>Link Media</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='link_media' value="<?= $profile_media['link_media'] ?>" disabled>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-link-45deg"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="contact-info-horizontal-icon"><b>Jenis Instansi</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='jenis_media' value="<?= $profile_media['jenis_media'] ?>" disabled>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon"><b>Penanggung Jawab</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='penanggung_jawab' value="<?= $profile_media['penanggung_jawab'] ?>" disabled>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon"><b>Jabatan</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='jabatan' value="<?= $profile_media['jabatan'] ?>" disabled>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-x-diamond"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon"><b>Nomer HP</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='no_hp' value="<?= $profile_media['no_hp'] ?>" disabled>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon"><b>Alamat</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name='alamat' value="<?= $profile_media['alamat'] ?>" disabled>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-building"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon"><b>Logo Media</b></label>
                                        </div>
                                        <div class="col-md-9">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <img name="logo_old"src="<?= base_url()?>uploads/logo_media/<?= $profile_media['logo_media'] ?>" alt="" width="100px" height="100px">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <a href="<?= base_url()?>/list_profile_media" class="btn btn-primary me-1 mb-1">Kembali</a>
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