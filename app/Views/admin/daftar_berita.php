<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/compiled/css/table-datatable.css">
<style type="text/css">
    .case-item {
        border-radius: 10px;
    }
</style>

<!-- Template Stylesheet -->
<link href="<?=base_url()?>assets/freeuser/css/style.css" rel="stylesheet">

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
<div class="row g-4">
    <div class="col-lg-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="case-item position-relative overflow-hidden">
            <img class="img-fluid" src="<?=base_url()?>assets/freeuser/img/logo.jpg">
            <a class="case-overlay text-decoration-none" href="<?= base_url('daftar_berita_kontribusi/all') ?>">
                <h5 class="lh-base text-white mb-1">Semua Media</h5>
            </a>
        </div>
    </div>
    <?php 
    $delay = 0.1;
    foreach($media as $m):?>
    <div class="col-lg-2 wow fadeIn" data-wow-delay="<?php echo $delay+= 0.1; ?>s">
        <div class="case-item position-relative overflow-hidden">
            <img class="img-fluid" src="<?=base_url()?>uploads/logo_media/<?=$m['logo_media']?>">
            <a class="case-overlay text-decoration-none" href="<?= base_url('daftar_berita_kontribusi/'.$m['id_media']) ?>">
                <h5 class="lh-base text-white"><?php echo $m['nama_media']?></h5>
            </a>
        </div>
    </div>
    <?php endforeach;?>
</div>

</section>

<?= $this->endSection() ?>