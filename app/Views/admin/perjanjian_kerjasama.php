<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/compiled/css/table-datatable.css">

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
<div class="card-header">

  <div class="card">
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
    <div class="card-body">
      <div class="table-responsive">
      <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Media</th>
            <th>Nama Instansi</th>
            <th>Masa Perjanjian</th>
            <th>Masa Jangka Waktu</th>
            <th>Tarif Pemasangan</th>
            <th>Minimal Berita Perbulan</th>
            <th>Jenis Berita</th>
            <!-- <th>Status</th> -->
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($pks as $row): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_media'] ?></td>
            <td><?= $row['nama_instansi'] ?></td>
            <td><?= $row['masa_pks'] ?></td>
            <td><?= $row['masa_jangka_pks'] ?></td>
            <td><?= $row['tarif_pks'] ?></td>
            <td><?= $row['minimal_berita'] ?></td>
            <td><?= $row['jenis_berita'] ?></td>
            <!-- <td><?= $row['status_ajuan'] ?></td> -->
            <td style="text-align: center;">
              <a href="<?= base_url() ?>perjanjian_kerja_sama/printPerjanjianKerjaSama/<?= $row['id_media'] ?>" class="btn btn-primary btn-sm" target="_blank" style="margin-bottom: 5px;"><i class="bi bi-printer"></i>Print PKS</a>
              <a href="<?= base_url() ?>perjanjian_kerja_sama/printKuitansiPKS/<?= $row['id_media'] ?>" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-printer"></i>Print Kuitansi</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>


<script src="<?= base_url() ?>assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?= base_url() ?>assets/static/js/pages/simple-datatables.js"></script>


<?= $this->endSection() ?>