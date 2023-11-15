<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

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
        <h4 class="card-title">Berkas Media .... </h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form class="form form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="form-body">
              <div class="row">

                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Salinan Akte pendirian dan perubahan terakhir (PT, Yayasan, Koperasi) dari notaris dan salinan pengesahan dari Kemenkumham RI </b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="akte_pendirian" class="basic-filepond">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <br />
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat Izin Usaha Perusahaan (SIUP)</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_izin_usaha_perusahaan" class="basic-filepond1">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat izin Tempat Usaha (SITU)</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_izin_tempat_usaha" class="basic-filepond2">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat Keterangan Domisili Perusahaan</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_keterangan_domisili_perusahaan" class="basic-filepond3">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Tanda Daftar Perusahaan (TDP)</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="tanda_daftar_perusahaan" class="basic-filepond4">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Nomor Rekening Bank Perusahaan</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="no_rek" class="basic-filepond5">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Nomor Pokok Wajib Pajak (NPWP)</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="NPWP" class="basic-filepond6">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>SPT Tahunan, SSP 3 Bulan terakhir dan Surat Keterangan Fiksal </b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="SPT_tahunan" class="basic-filepond7">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat Penawaran Kerjasama disertai dengan tarif yang ditandatangani oleh Pimpinan atau Perusahaan/Media</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_penawaran_kerjasama" class="basic-filepond8">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Perusahaan Pers menerbitkan Surat Tugas Ka.Biro/Wartawan di wilayah Kabupaten Banjar</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_tugas" class="basic-filepond9">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Salinan KTP Pimpinan perusahaan dan wartawan yang bertugas di Kabupaten Banjar</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="ktp_pimpinan_wartawan" class="basic-filepond10">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Pas Photo warna Ka.Biro/Wartawan ukuran 3 x 4 (2 lembar) </b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="pas_photo" class="basic-filepond11">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Foto Kantor/Perusahaan (pusat)</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="foto_kantor" class="basic-filepond12">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Salinan Struktur Redaksi</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="struktur_redaksi" class="basic-filepond13">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat Izin Siaran (Radio & Telivisi)</b></label>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_izin_siaran" class="basic-filepond14">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                  <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
<script src="<?= base_url() ?>assets/compiled/js/app.js"></script>

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