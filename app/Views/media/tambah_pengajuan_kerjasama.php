<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="<?=base_url()?>assets/extensions/sweetalert2/sweetalert2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .form-check-label {
      margin-right: 20px; 
    }
</style>

<div class="page-heading">
    <h3><?= $title ?></h3>
</div> 
<section class="row"> 
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Pengajuan Kerja Sama</h4>
      </div>
        <div class="card-content">
          <div class="card-body">
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
            <form class="form form-horizontal" action="<?=base_url()?>/pengajuan_kerja_sama/insertPengajuanKerjaSama" method="POST" enctype="multipart/form-data">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-3">
                      <label for="first-name-horizontal-icon"><b>Masa Kerja Sama</b></label>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group position-relative has-icon-left mb-4">
                      <select class="form-control" id="masa_kerja_sama" name="masa_kerja_sama" onchange="hitungDateRange()">
                          <option value="">Pilih Masa Kerja Sama</option>
                          <option value="3 bulan">3 Bulan</option>
                          <option value="6 bulan">6 Bulan</option>
                          <option value="9 bulan">9 Bulan</option>
                      </select>
                      <div class="form-control-icon">
                          <i class="bi bi-calendar3"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                      <label for="first-name-horizontal-icon"><b>Terhitung Pada Tanggal</b></label>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group position-relative has-icon-left mb-4">
                      <input type="text" class="form-control" name="terhitung_pada_tanggal" id="terhitung_pada_tanggal">
                      <div class="form-control-icon">
                          <i class="bi bi-calendar2-range"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                      <label for="first-name-horizontal-icon"><b>Tarif pemasangan Berita, Adventorial, dan Promoai</b></label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group position-relative has-icon-left mb-4">
                      <input type="text" class="form-control"  id="input_rupiah" oninput="convert()">
                      <div class="form-control-icon">
                        <i class="fa-solid fa-rupiah-sign"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group position-relative ">
                        <input type="text" class="form-control" name="tarif_pemasangan" id="tarif_pemasangan" readonly>
                    </div> 
                  </div> 
                  <div class="col-md-3">
                      <label for="first-name-horizontal-icon"><b>Dengan Minimal</b></label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group position-relative has-icon-left mb-4">
                      <input type="number" class="form-control" name="minimal_berita_perbulan" id="minimal_berita_perbulan" oninput="perbulanBerita()">
                      <input type="text" class="form-control" name="output_berita_perbulan" id="output_berita_perbulan" hidden>
                      <div class="form-control-icon">
                        <i class="bi bi-calendar2"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="first-name-horizontal-icon"><b>Berita Perbulan</b></label>
                  </div>
                  <div class="col-md-3">
                    <label for="first-name-horizontal-icon"><b>Dengan Jenis Berita Liputan</b></label>
                  </div>
                  <div class="col-md-9">
                    <div class="form-group position-relative has-icon-left mb-4">
                      <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="jenis_berita[]" value="text">
                      <label class="form-check-label" for="primary" >Text </label>
                      <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="jenis_berita[]" value="foto">
                      <label class="form-check-label" for="primary">Foto </label>
                      <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="jenis_berita[]" value="video">
                      <label class="form-check-label" for="primary">Video </label>
                      <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="jenis_berita[]" value="video streaming">
                      <label class="form-check-label" for="primary">Video Streaming </label>
                      <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="jenis_berita[]" value="running text">
                      <label class="form-check-label" for="primary">Running Text </label>
                      <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="jenis_berita[]" value="banner">
                      <label class="form-check-label" for="primary">Banner </label>
                      <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="jenis_berita[]" value="lipsus">
                      <label class="form-check-label" for="primary">Lipsus </label>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                      <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://unpkg.com/@develoka/angka-terbilang-js/index.min.js"> </script>
<script>
  function convert() {
    var rupiahInput = document.getElementById("input_rupiah").value;
    var terbilangOutput = document.getElementById("tarif_pemasangan");
    const cleanRupiah = rupiahInput.replace(/[^\d]/g, '');
    const formattedRupiah = formatRupiah(cleanRupiah);
    const terbilang = angkaTerbilang(cleanRupiah);
    const terbilangCapitalized = terbilang.replace(/\b\w/g, match => match.toUpperCase());
    terbilangOutput.value = `${formattedRupiah} (${terbilangCapitalized} Rupiah)`;
  }
  function formatRupiah(angka) {
    const reverse = angka.toString().split('').reverse().join('');
    const ribuan = reverse.match(/\d{1,3}/g);
    const formatted = ribuan.join('.').split('').reverse().join('');
    return `Rp.${formatted},-`;
  }

  function perbulanBerita(){
    var bilangan = document.getElementById("minimal_berita_perbulan").value;
    var output = document.getElementById("output_berita_perbulan");
    var terbilang = angkaTerbilang(bilangan);

    output.value = `${bilangan} (${terbilang})`;
  }

  function hitungDateRange() {
    var masaKerjaSamaSelect = document.getElementById("masa_kerja_sama");
    var masaKerjaSamaValue = parseInt(masaKerjaSamaSelect.value);
    var currentDate = new Date();
    var endDate = new Date(currentDate);
    endDate.setMonth(currentDate.getMonth() + masaKerjaSamaValue);

    var options = { year: 'numeric', month: 'long', day: 'numeric' };
    var formatter = new Intl.DateTimeFormat('id-ID', options);

    var resultElement = document.getElementById("terhitung_pada_tanggal");
    resultElement.value = formatter.format(currentDate) + " sampai dengan " + formatter.format(endDate);
  }
</script>
<script src="<?=base_url()?>assets/compiled/js/app.js"></script>

<script src="<?=base_url()?>assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?=base_url()?>assets/extensions/sweetalert2/sweetalert2.min.js"></script>
<script src="<?=base_url()?>assets/static/js/pages/sweetalert2.js"></script>


<?= $this->endSection() ?>