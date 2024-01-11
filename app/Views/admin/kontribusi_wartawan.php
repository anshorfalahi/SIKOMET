<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/compiled/css/table-datatable.css">

<div class="page-heading">
    <h3><?= $title ?> </h3>
</div> 
<section class="row"> 
<div class="card-header">
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
  <div class="card">
    <div class="card-body">
    <a href="<?= base_url() ?>kontribusi_wartawan/tambah_wartawan" class="btn btn-primary mb-2">Tambah Wartawan</a>
    <a href="<?= base_url() ?>kontribusi_wartawan/print_kuitansi_bulanan" class="btn btn-primary mb-2" target="_blank">Print Kuitansi Bulanan</a>
      <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>No. </th>
            <th>Nama Wartawan</th>
            <th>No. Handphone</th>
            <th>No. Rekening</th>
            <th>Berkas</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($wartawan as $row): ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= $row['nama_wartawan'] ?></td>
            <td><?= $row['no_hp'] ?></td>
            <td><?= $row['no_rek'] ?></td>
            <td>
              <a href="<?= base_url() ?>berkas/<?= $row['berkas'] ?>" target="_blank" class="btn btn-info btn-sm"><i class="bi bi-file-earmark-pdf"></i> Lihat Berkas</a>
              <a href="<?= base_url() ?>berkas/<?= $row['berkas'] ?>" download="<?= $row['berkas'] ?>" class="btn btn-success btn-sm"><i class="bi bi-download"></i> Download</a>
            </td>
            <td>
              <a href="<?= base_url() ?>kontribusi_wartawan/print_kuitansi_wartawan/<?= $row['id_wartawan'] ?>" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-printer"></i> Print Kuitansi</a>
              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $row['id_wartawan'] ?>"><i class="bi bi-trash"></i> Hapus</button>
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
<?php foreach($wartawan as $row): ?>
  <div class="modal fade" id="delete<?=$row['id_wartawan']?>" tabindex="-1" aria-labelledby="delete<?=$row['id_wartawan']?>Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" action="<?=site_url('kontribusi_wartawan/delete/'.$row['id_wartawan'])?>">
          <div class="modal-header">
            <h5 class="modal-title" id="delete<?=$row['id_wartawan']?>Label">Hapus Data Wartawan</h5>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus data wartawan <?=$row['nama_wartawan']?> ?</p>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<script src="<?= base_url() ?>assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?= base_url() ?>assets/static/js/pages/simple-datatables.js"></script>


<?= $this->endSection() ?>