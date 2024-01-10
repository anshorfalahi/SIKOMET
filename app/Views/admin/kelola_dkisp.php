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
      <table class="table table-striped" id="table1">
        <thead>
          <tr>
            <th>No. </th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($dkisp as $row): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nip'] ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td>
                    <a href="<?= base_url('kelola_dkisp/edit_dkisp/'.$row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
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