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
      <?php if($pengajuan_kerja_sama == null): ?>
        <a href="<?= base_url() ?>pengajuan_kerja_sama/tambah_pengajuan_kerjasama" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle"></i> Tambah Pengajuan Kerja Sama</a>
      <?php endif; ?>

      <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>Masa Perjanjian</th>
            <th>Masa Jangka Waktu</th>
            <th>Tarif Pemasangan</th>
            <th>Minimal Berita Perbulan</th>
            <th>Jenis Berita</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($pengajuan_kerja_sama as $pks): ?>
          <tr>
            <td><?= $pks['masa_pks'] ?></td>
            <td><?= $pks['masa_jangka_pks'] ?></td>
            <td><?= $pks['tarif_pks'] ?></td>
            <td><?= $pks['minimal_berita'] ?></td>
            <td><?= $pks['jenis_berita'] ?></td>
            <td>
              <a href="<?= base_url() ?>pengajuan_kerja_sama/ubah_pengajuan_kerjasama/<?= $pks['id_pks'] ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $pks['id_pks'] ?>"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

<!-- Modal -->
<?php foreach($pengajuan_kerja_sama as $pks): ?>
  <div class="modal fade" id="delete<?= $pks['id_pks'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" action="<?= base_url()?>pengajuan_kerja_sama/deletePengajuanKerjaSama/<?= $pks['id_pks'] ?>">
          <div class="modal-header">
            <h5 class="modal-title" id="delete<?= $pks['id_pks'] ?>Label">Hapus Pengajuan Kerja Sama</h5>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus pengajuan kerja sama ini?
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>



<script src="<?= base_url() ?>assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?= base_url() ?>assets/static/js/pages/simple-datatables.js"></script>


<?= $this->endSection() ?>