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
                        <h4 class="card-title">Berkas Media .... </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon">Salinan Akte Pendirian</label>
                                        </div>
                                        <div class="col-md-9">
                                          <div class="form-group">
                                            <div class="position-relative">
                                              <input type="file" name="image" class="basic-filepond">
                                              <p>Format Pdf Max Size 5120kb</p>
                                              <p id="errorMessage" style="color: red;"></p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="password-horizontal-icon">Surat Izin Usaha Perusahaan</label>
                                        </div>
                                        <div class="col-md-9">
                                          <div class="form-group">
                                            <div class="position-relative">
                                              <input type="file" name="image" class="basic-filepond1">
                                              <p>Format Pdf Max Size 5120kb</p>
                                              <p id="errorMessage" style="color: red;"></p>
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

  <!-- <script>
        function validateFile(input) {
          const allowedExtensions =  ['application/pdf'];
          const allowedSize = 5120;
          if (!allowedExtensions.includes(input.files[0].type)) {
            input.value = null;
            Toastify({
              text: "Format file tidak sesuai",
              duration: 3000,
              gravity: "top",
              position: "right",
              backgroundColor: "#FFA500",
              stopOnFocus: true,
            }).showToast();
          } else if (input.files[0].size > allowedSize) {
            input.value = null;
            Toastify({
              text: "Ukuran file terlalu besar",
              duration: 3000,
              gravity: "top",
              position: "right",
              backgroundColor: "#FFA500",
              stopOnFocus: true,
            }).showToast();
          }
        }
  </script> -->
<?= $this->endSection() ?>