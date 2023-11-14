<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?=base_url()?>assets/extensions/filepond/filepond.css">
<link rel="stylesheet" href="<?=base_url()?>assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
<link rel="stylesheet" href="<?=base_url()?>assets/extensions/toastify-js/src/toastify.css">

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Media .... </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="first-name-horizontal-icon">Nama Media</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Name"
                                                        id="first-name-horizontal-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="email-horizontal-icon">Nama Instansi / PT</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        id="email-horizontal-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="contact-info-horizontal-icon">Jenis Instansi</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                      <select class="form-select form-control" id="select-jenis-instansi" name="select-jenis-instansi" disabled>
                                                      <option value="">Pilih Jenis Media</option>
                                                      <option  value="Media Perorangan">Media Perorangan</option>
                                                      <option selected value="Media Perusahaan">Media Perusahaan</option>
                                                  </select>
                                                  <div class="form-control-icon">
                                                      <i class="bi bi-briefcase"></i>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon">Penanggung Jawab</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" placeholder="Password" id="password-horizontal-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon">Nomer HP</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" placeholder="Password" id="password-horizontal-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon">Alamat</label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" placeholder="Password" id="password-horizontal-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-building"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon">Logo Media</label>
                                        </div>
                                        <div class="col-md-9">
                                          <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                              <input type="file" name="image" class="imgbb-filepond">
                                              <p>JPG,PNG,JPEG 512x512</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
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

  <script src="<?=base_url()?>assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
  <script src="<?=base_url()?>assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
  <script src="<?=base_url()?>assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
  <script src="<?=base_url()?>assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
  <script src="<?=base_url()?>assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js"></script>
  <script src="<?=base_url()?>assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
  <script src="<?=base_url()?>assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
  <script src="<?=base_url()?>assets/extensions/filepond/filepond.js"></script>
  <script src="<?=base_url()?>assets/extensions/toastify-js/src/toastify.js"></script>
  <script src="<?=base_url()?>assets/static/js/pages/filepond.js"></script>

<?= $this->endSection() ?>