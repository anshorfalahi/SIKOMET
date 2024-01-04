<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/compiled/css/table-datatable.css">

<div class="page-heading">
    <h3><?= $title ?> </h3>
</div> 
<section class="row"> 
<div class="card-header">
    <div class="card">
        <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
            <tr>
                <th>No. </th>
                <th>Nama Media</th>
                <th>Judul Berita</th>
                <th>Link Berita</th>
                <th>Tanggal Berita</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach($listBerita as $berita): ?>
                <tr>
                <td><?= $no++ ?></td>
                <td><?= $berita['nama_media'] ?></td>
                <td><?= $berita['judul_berita'] ?></td>
                <td><a href="<?= $berita['link_berita'] ?>" target="_blank"><?= $berita['link_berita'] ?></a></td>
                <td><?= $berita['tanggal_berita'] ?></td>
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