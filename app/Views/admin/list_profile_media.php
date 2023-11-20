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
                    <td><?=$row['link_media']?></td>
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
                        <form method="post" action="<?=site_url('list_profile_media/delete/'.$row['id_media'])?>" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <button onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
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