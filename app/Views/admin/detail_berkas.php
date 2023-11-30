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
                    <th>No</th>
                    <th>Persyaratan Umum Kerjasama Publikasi</th>
                    <th>Lihat Berkas</th>
                    <th>Dowload Berkas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Salinan Akte pendirian dan perubahan terakhir (PT, Yayasan, Koperasi) dari notaris dan salinan pengesahan dari Kemenkumham RI</td>
                    <?php if ($berkas['akte_pendirian'] != null): ?>
                      <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['akte_pendirian'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                      <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['akte_pendirian'] ?>" class="btn btn-sm btn-primary"  download>Download</a></td>
                    <?php else: ?>
                      <td><span class="badge bg-danger">Belum Ada</span></td>
                      <td><span class="badge bg-danger">Belum Ada</span></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Surat Izin Usaha Perusahaan (SIUP)</td>
                    <?php if ($berkas['surat_izin_usaha_perusahaan'] != null): ?>
                      <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_izin_usaha_perusahaan'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                      <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_izin_usaha_perusahaan'] ?>" class="btn btn-sm btn-primary"
                    <?php else: ?>
                      <td><span class="badge bg-danger">Belum Ada</span></td>
                      <td><span class="badge bg-danger">Belum Ada</span></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Surat izin Tempat Usaha (SITU)</td>
                    <?php if ($berkas['surat_izin_tempat_usaha'] != null): ?>
                      <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_izin_tempat_usaha'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                      <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_izin_tempat_usaha'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                    <?php else: ?>
                      <td><span class="badge bg-danger">Belum Ada</span></td>
                      <td><span class="badge bg-danger">Belum Ada</span></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Surat Keterangan Domisili Perusahaan</td>
                    <?php if ($berkas['surat_keterangan_domisili_perusahaan'] != null): ?>
                      <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_keterangan_domisili_perusahaan'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                      <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_keterangan_domisili_perusahaan'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                    <?php else: ?>
                      <td><span class="badge bg-danger">Belum Ada</span></td>
                      <td><span class="badge bg-danger">Belum Ada</span></td>
                    <?php endif; ?>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Tanda Daftar Perusahaan (TDP)</td>
                  <?php if($berkas['tanda_daftar_perusahaan'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['tanda_daftar_perusahaan'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['tanda_daftar_perusahaan'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Nomor Rekening Perusahaan</td>
                  <?php if($berkas['no_rek'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['no_rek'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['no_rek'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Nomor Pokok Wajib Pajak (NPWP)</td>
                  <?php if($berkas['npwp'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['npwp'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['npwp'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>8</td>
                  <td>SPT Tahunan, SSP 3 Bulan terakhir dan Surat Keterangan Fiksal</td>
                  <?php if($berkas['spt_tahunan'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['spt_tahunan'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['spt_tahunan'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Surat Penawaran Kerjasama disertai dengan tarif yang ditandatangani oleh Pimpinan atau Perusahaan/Media</td>
                  <?php if($berkas['surat_penawaran_kerjasama'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_penawaran_kerjasama'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_penawaran_kerjasama'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Perusahaan Pers menerbitkan Surat Tugas Ka.Biro/Wartawan di wilayah Kabupaten Banjar</td>
                  <?php if($berkas['surat_tugas'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_tugas'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_tugas'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif;?>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Salinan KTP Pimpinan perusahaan dan wartawan yang bertugas di Kabupaten Banjar</td>
                  <?php if ($berkas['ktp_pimpinan'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['ktp_pimpinan'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['ktp_pimpinan'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Pas Photo warna Ka.Biro/Wartawan ukuran 3 x 4 (2 lembar)</td>
                  <?php if ($berkas['pas_photo'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['pas_photo'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['pas_photo'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Foto Kantor/Perusahaan (pusat)</td>
                  <?php if($berkas['foto_kantor'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['foto_kantor'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['foto_kantor'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Salinan Struktur Redaksi</td>
                  <?php if($berkas['struktur_redaksi'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['struktur_redaksi'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['struktur_redaksi'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Surat Izin Siaran (Radio & Telivisi)</td>
                  <?php if($berkas['surat_izin_siaran'] != null): ?>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_izin_siaran'] ?>" target="_blank" class="btn btn-sm btn-primary">Lihat</a></td>
                    <td><a href="<?= base_url() ?>uploads/berkas/<?= $berkas['surat_izin_siaran'] ?>" class="btn btn-sm btn-primary" download>Download</a></td>
                  <?php else: ?>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                    <td><span class="badge bg-danger">Belum Ada</span></td>
                  <?php endif; ?>
                  </tr>
          </tbody>
        </table>
        <form method="post" action="<?= site_url('validasi_berkas/prosesValidasi/'.$berkas['id_berkas']) ?>">
          <div class="form-group">
            <label for="validasi">Validasi</label>
            <select class="form-control" id="validasi" name="validasi">
              <option value="1" <?php if($berkas['validasi'] == 1) echo 'selected' ?>>Valid</option>
              <option value="0" <?php if($berkas['validasi'] == 0) echo 'selected' ?>>Belum Valid</option>
            </select>
          </div>
          <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea class="form-control" id="catatan" name="catatan" rows="2"><?= $berkas['catatan'] ?></textarea>
          </div>
          <div style="float: right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
</section>

<script src="<?= base_url() ?>assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?= base_url() ?>assets/static/js/pages/simple-datatables.js"></script>

<?= $this->endSection() ?>