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
        <a href="<?= base_url() ?>/daftar_berita_wartawan/tambah_berita_wartawan" class="btn btn-primary btn-sm mb-3"><i class="bi bi-plus-circle"></i> Tambah Berita</a>
      <table class="table table-striped" id="table1">
        <thead>
          <tr style="text-align: center;">
            <th>No. </th>
            <th>Nama Media</th>
            <th>Judul Berita</th>
            <th>Jenis Berita</th>
            <th>Link Berita</th>
            <th>Tanggal Berita</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach($listBerita as $berita): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $berita['nama_media'] ?></td>
                <td><?= $berita['judul_berita'] ?></td>
                <td><?= $berita['jenis_berita'] ?></td>
                <td><a href="<?= $berita['link_berita'] ?>" target="_blank"><?= $berita['link_berita'] ?></a></td>
                <td><?= $berita['tanggal_berita'] ?></td>
                <td>
                <a href="<?= base_url() ?>daftar_berita_wartawan/ubah_berita/<?= $berita['id_berita'] ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $berita['id_berita'] ?>"><i class="bi bi-trash"></i></button>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

<!-- Modal -->
<?php foreach($listBerita as $berita): ?>
<div class="modal fade" id="delete<?= $berita['id_berita'] ?>" tabindex="-1" aria-labelledby="delete<?= $berita['id_berita'] ?>Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url() ?>daftar_berita_wartawan/deleteBerita/<?= $berita['id_berita'] ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="delete<?= $berita['id_berita'] ?>Label">Hapus Berita <?= $berita['judul_berita'] ?> ?</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus berita ini ?</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<script src="<?= base_url() ?>assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?= base_url() ?>assets/static/js/pages/simple-datatables.js"></script>


<?= $this->endSection() ?>