<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
  
  <link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/compiled/css/app-dark.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/extensions/flatpickr/flatpickr.min.css">

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
<div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Ubah Berita Wartawan</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="<?= base_url() ?>daftar_berita_wartawan/updateBerita/<?= $berita['id_berita'] ?>" method="post">
                        <div class="form-body">
                            <div class="row">
                            <div class="col-md-3">
                                    <label for="first-name-horizontal-icon"><b>Nama Media</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select class="form-control" name='id_wartawan' id="select-icons">
                                                <?php foreach($nama_media as $media): ?>
                                                    <option value="<?= $media['id_wartawan'] ?>" <?= ($berita['id_wartawan'] == $media['id_wartawan']) ? 'selected' : '' ?>><?= $media['nama_media'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-list"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="first-name-horizontal-icon"><b>Judul Berita</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name='judul_berita' value="<?= $berita['judul_berita'] ?>" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-justify"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="first-name-horizontal-icon"><b>Jenis Berita</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                        <select class="form-control" name="jenis_berita" id="jenis_berita">
                                            <?php
                                            $jenisBerita = ['Berita', 'Artikel', 'Koran', 'Lipsus', 'Video'];
                                            foreach ($jenisBerita as $jenis) {
                                                $selected = ($berita['jenis_berita'] == $jenis) ? 'selected' : '';
                                                echo "<option value=\"$jenis\" $selected>$jenis</option>";
                                            }
                                            ?>
                                        </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-list"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="email-horizontal-icon"><b>Link Berita</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name='link_berita' value="<?= $berita['link_berita'] ?>" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-link-45deg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="password-horizontal-icon"><b>Tanggal Berita</b></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="date" class="form-control mb-3 flatpickr flatpickr-input active" id="flatpickr" name='tanggal_berita' value="<?= $berita['tanggal_berita'] ?>" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar-date"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <a href="<?= base_url() ?>daftar_berita_wartawan" class="btn btn-light-secondary me-1 mb-1">Kembali</a>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr(document.getElementById('flatpickr'), {
            enableTime: false ,
            dateFormat: "Y-m-d",
        });
    });
</script>

<script src="<?=base_url()?>assets/compiled/js/app.js"></script>
<script src="<?=base_url()?>assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?=base_url()?>assets/compiled/js/app.js"></script>

<script src="<?=base_url()?>assets/extensions/flatpickr/flatpickr.min.js"></script>
<script src="<?=base_url()?>assets/static/js/pages/date-picker.js"></script>


<?= $this->endSection() ?>