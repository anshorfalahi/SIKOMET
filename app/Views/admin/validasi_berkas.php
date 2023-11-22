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
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Nama Media</th>
                    <th>Nama Instansi</th>
                    <th>Validasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($profile_media as $row): ?>
                <tr>
                    <td><?=$row['nama_media']?></td>
                    <td><?=$row['nama_instansi']?></td>
                    <td>
                        <?php if($row['validasi'] == 1): ?>
                            <span class="badge bg-success">Valid</span>
                        <?php else: ?>
                            <span class="badge bg-danger">Belum Valid</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?=site_url('validasi_berkas/detail/'.$row['id_media'])?>" class="btn btn-sm btn-primary">Detail</a>    
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>
</section>

<script src="<?= base_url() ?>assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?= base_url() ?>assets/static/js/pages/simple-datatables.js"></script>

<?= $this->endSection() ?>