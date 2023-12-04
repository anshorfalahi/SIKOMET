<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-4 py-4-5">
              <div class="row">
                  <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content ">
                      <div class="stats-icon purple mb-2">
                        <i class="iconly-boldProfile"></i>
                      </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Total Media</h6>
                      <h6 class="font-extrabold mb-0"><?= $totalMedia ?></h6>
                  </div>
              </div> 
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card"> 
          <div class="card-body px-4 py-4-5">
              <div class="row">
                  <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                      <div class="stats-icon blue mb-2">
                        <i class="iconly-boldShow"></i>
                      </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Total Media Aktif</h6>
                      <h6 class="font-extrabold mb-0"><?= $totalMediaAktif ?></h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-4 py-4-5">
              <div class="row">
                  <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                      <div class="stats-icon green mb-2">
                          <i class="iconly-boldAdd-User"></i>
                      </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Following</h6>
                      <h6 class="font-extrabold mb-0">80.000</h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body px-4 py-4-5">
              <div class="row">
                  <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                      <div class="stats-icon red mb-2">
                          <i class="iconly-boldBookmark"></i>
                      </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                      <h6 class="text-muted font-semibold">Saved Post</h6>
                      <h6 class="font-extrabold mb-0">112</h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</section>

<?= $this->endSection() ?>