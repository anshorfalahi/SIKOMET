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
                    <th>Link Media</th>
                    <th>Penanggung Jawab</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($profile_media as $row): ?>
                <tr>
                    <td><?=$row['nama_media']?></td>
                    <td><?=$row['nama_instansi']?></td>
                    <td><a href="<?=$row['link_media']?>" target="_blank"><?=$row['link_media']?></a></td>
                    <td><?=$row['penanggung_jawab']?></td>
                    <td>
                        <?php if($row['status'] == '1'): ?>
                            <form method="post" action="<?=site_url('list_profile_media/active/'.$row['id_media'])?>" class="d-inline">
                                <button  class="btn btn-success btn-sm">Aktif</button>
                            </form>
                        <?php else: ?>
                            <form method="post" action="<?=site_url('list_profile_media/active/'.$row['id_media'])?>" class="d-inline">
                                <button  class="btn btn-danger btn-sm">Tidak Aktif</button>
                            </form>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?=site_url('list_profile_media/detail/'.$row['id_media'])?>" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?=$row['id_media']?>"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>
</section>

<!-- Modal -->
<?php foreach($profile_media as $row): ?>
<div class="modal fade" id="delete<?=$row['id_media']?>" tabindex="-1" aria-labelledby="delete<?=$row['id_media']?>Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?=site_url('list_profile_media/delete/'.$row['id_media'])?>">
        <div class="modal-header">
          <h5 class="modal-title" id="delete<?=$row['id_media']?>Label">Hapus Data Akun Media</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus data akun media <?=$row['nama_media']?> ?</p>
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