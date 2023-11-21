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
        <h4 class="card-title">Berkas Media <?= $profile_media->nama_media ?></h4>
      </div>
      <div class="card-content">
        <div class="card-body">
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
          <form class="form form-horizontal" action="<?= site_url('upload_berkas/prosesUpdateBerkas') ?>" method="post" enctype="multipart/form-data">
            <div class="form-body">
              <div class="row">
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Salinan Akte pendirian dan perubahan terakhir (PT, Yayasan, Koperasi) dari notaris dan salinan pengesahan dari Kemenkumham RI </b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="akte_pendirian" class="basic-filepond">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                  <?php if ($berkas->akte_pendirian != null) : ?>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->akte_pendirian) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->akte_pendirian) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                  <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat Izin Usaha Perusahaan (SIUP)</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_izin_usaha_perusahaan" class="basic-filepond1">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                  <?php if ($berkas->surat_izin_usaha_perusahaan != null) : ?>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->surat_izin_usaha_perusahaan) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->surat_izin_usaha_perusahaan) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                  <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat izin Tempat Usaha (SITU)</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_izin_tempat_usaha" class="basic-filepond2">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                  <?php if ($berkas->surat_izin_tempat_usaha != null) : ?>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->surat_izin_tempat_usaha) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->surat_izin_tempat_usaha) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                  <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat Keterangan Domisili Perusahaan</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_keterangan_domisili_perusahaan" class="basic-filepond3">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                  <?php if ($berkas->surat_keterangan_domisili_perusahaan != null) : ?>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->surat_keterangan_domisili_perusahaan) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->surat_keterangan_domisili_perusahaan) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                  <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Tanda Daftar Perusahaan (TDP)</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="tanda_daftar_perusahaan" class="basic-filepond4">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                  <?php if ($berkas->tanda_daftar_perusahaan != null) : ?>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->tanda_daftar_perusahaan) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                    <a href="<?= base_url('uploads/berkas/' . $berkas->tanda_daftar_perusahaan) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                  <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Nomor Rekening Bank Perusahaan</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="no_rek" class="basic-filepond5">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->no_rek != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->no_rek) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->no_rek) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Nomor Pokok Wajib Pajak (NPWP)</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="npwp" class="basic-filepond6">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->npwp != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->npwp) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->npwp) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>SPT Tahunan, SSP 3 Bulan terakhir dan Surat Keterangan Fiksal </b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="spt_tahunan" class="basic-filepond7">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->spt_tahunan != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->spt_tahunan) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->spt_tahunan) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat Penawaran Kerjasama disertai dengan tarif yang ditandatangani oleh Pimpinan atau Perusahaan/Media</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_penawaran_kerjasama" class="basic-filepond8">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->surat_penawaran_kerjasama != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->surat_penawaran_kerjasama) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->surat_penawaran_kerjasama) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Perusahaan Pers menerbitkan Surat Tugas Ka.Biro/Wartawan di wilayah Kabupaten Banjar</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_tugas" class="basic-filepond9">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->surat_tugas != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->surat_tugas) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->surat_tugas) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Salinan KTP Pimpinan perusahaan dan wartawan yang bertugas di Kabupaten Banjar</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="ktp_pimpinan" class="basic-filepond10">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->ktp_pimpinan != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->ktp_pimpinan) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->ktp_pimpinan) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Pas Photo warna Ka.Biro/Wartawan ukuran 3 x 4 (2 lembar) </b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="pas_photo" class="basic-filepond11">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->pas_photo != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->pas_photo) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->pas_photo) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Foto Kantor/Perusahaan (pusat)</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="foto_kantor" class="basic-filepond12">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top:20px;">
                    <?php if ($berkas->foto_kantor != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->foto_kantor) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->foto_kantor) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Salinan Struktur Redaksi</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="struktur_redaksi" class="basic-filepond13">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->struktur_redaksi != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->struktur_redaksi) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->struktur_redaksi) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                  <label for="password-horizontal-icon"><b>Surat Izin Siaran (Radio & Telivisi)</b></label>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <div class="position-relative">
                      <input type="file" name="surat_izin_siaran" class="basic-filepond14">
                      <p>Format Pdf Max Size 5120kb</p>
                      <p id="errorMessage" style="color: red;"></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 20px;">
                    <?php if ($berkas->surat_izin_siaran != null) : ?>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->surat_izin_siaran) ?>" target="_blank" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="<?= base_url('uploads/berkas/' . $berkas->surat_izin_siaran) ?>" download class="btn btn-success"><i class="bi bi-download"></i></a>
                    <?php endif ?>
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

<?= $this->endSection() ?>