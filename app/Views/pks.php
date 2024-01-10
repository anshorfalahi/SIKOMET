<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <style>
    td {
      vertical-align: top; 
    }

    td:first-child {
      text-align: left; 
    }

    @page {
      margin: 2cm;/* this affects the margin in the printer settings */
    }

    body {
      margin: 0;
      padding: 0;
      background-color: #FAFAFA;
      font: 12pt "Times New Roman";
    }

  </style>
  <body>
    <div>
      <img src="<?= base_url() ?>uploads/logo_media/<?= $pks[0]['logo_media']?>"  width="75" height="75" style="float: right; margin-left: 10px; margin-bottom: 10px;" />
      <img src="https://upload.wikimedia.org/wikipedia/id/7/73/LOGO_KAB_BANJAR.png"  width="75" height="75" style="float: left; margin-right: 10px; margin-bottom: 10px;" />
      <p style="text-align: center">
        <strong>PERJANJIAN KERJA SAMA</strong><strong><br /></strong
        ><strong><u>PEMERINTAH KABUPATEN BANJAR &ndash; <?= $pks[0]['nama_instansi'] ?></u></strong>
      </p>
      <p style="text-align: center">
        <strong
          >NOMER:
          &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</strong
        >
      </p>
      <p style="text-align: center">
        <strong
          >NOMER:
          &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</strong
        >
      </p>
      <p style="text-align: justify; line-height: 1.5em;">
        Pada hari ini, Kamis tanggal Dua bulan Januari tahun Dua Ribu Dua Puluh,
        bertempat yang bertanda tangan di bawah ini :
      </p>
      <table
        width="640"
        style="width: 640px;"
        cellpadding="0"
        cellspacing="0"
        border="0"
      >
        <tbody style="line-height: 1.5em;">
          <tr>
            <td style="width: 24.0156px">
              <p><strong>I.</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>Nama</strong></p>
            </td>
            <td style="width: 10px">
              <p>:</p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p>
                <strong><?= $dkisp[0]['nama'] ?></strong><strong></strong>
              </p>
            </td>
          </tr>
          <tr>
            <td style="width: 24.0156px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>NIP</strong></p>
            </td>
            <td style="width: 10px">
              <p>:</p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p><?= $dkisp[0]['nip'] ?></p>
            </td>
          </tr>
          <tr>
            <td style="width: 24.0156px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>Jabatan</strong></p>
            </td>
            <td style="width: 10px">
              <p>:</p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p>
                Kepala Dinas Kominikasi, Informatika, Statistik dan Persandian
                (Kominfo SP) Kabupaten Banjar
              </p>
            </td>
          </tr>
          <tr>
            <td style="width: 24.0156px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>Alamat</strong></p>
            </td>
            <td style="width: 10px">
              <p>:</p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p>
                Jalan Ahmad Yani No. 3 Martapura, Kab. Banjar Kalimantan Selatan
              </p>
            </td>
          </tr>
          <tr>
            <td style="width: 24.0156px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 10px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p>
                Dalam hal ini bertindak untuk dan atas nama Pemerintah Kabupaten
                Banjar Dinas Komunikasi, Informatika, Statistik, dan Persandian
                Kabupaten Banjar, selanjutnya disebut <strong>PIHAK PERTAMA</strong>
              </p>
            </td>
          </tr>
          <tr>
            <td style="width: 24.0156px">
              <p><strong>II.</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>Nama</strong></p>
            </td>
            <td style="width: 10px">
              <p>:</p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p><strong><?= $pks[0]['pimpinan_tertinggi'] ?></strong></p>
            </td>
          </tr>
          <tr>
            <td style="width: 24.0156px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>Jabatan</strong></p>
            </td>
            <td style="width: 10px">
              <p>:</p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p><?= $pks[0]['jabatan_pt'] ?></p>
            </td>
          </tr>
          <tr>
            <td style="width: 24.0156px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>Alamat</strong></p>
            </td>
            <td style="width: 10px">
              <p>:</p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p><?= $pks[0]['alamat']?></p>
            </td>
          </tr>
          <tr>
            <td style="width: 24.0156px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 95.125px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 10px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 616.859px; text-align: justify">
              <p>
                Dalam hal ini bertindak untuk dan atas nama
                <strong><?= $pks[0]['nama_instansi']?> </strong> selaku pemilik
                media peyiaran <strong><?= $pks[0]['nama_media']?> </strong>,
                selanjutnya disebut <strong>PIHAK KEDUA</strong>
              </p>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- <p><strong>&nbsp;</strong></p> -->
      <p style="text-align: justify; line-height: 1.5em;">
        PIHAK PERTAMA dan PIHAM KEDUA, selanjutnya disebut PARA PIHAK, terlebih
        dahulu Menerangkan hal &ndash; hal sebagai berikkut:
      </p>
      <ol style="text-align: justify; line-height: 1.5em;">
        <li>
          PIHAK PERTAMA bermaksud mempublikasikan atau menyebarluaskan informasi
          penyelenggaraan pemerintahan daerah dan Pembangunan melalui media
          massa.
        </li>
        <li>
          PIHAK KEDUA adalah Perusahaan yang bergerak di bidang media penyiaran
          dangan nama <?= $pks[0]['nama_media']?> .
        </li>
        <li>
          PARA PIHAK bermaksud melakukan kerja sama publikasi atau
          penyeberluasan informasi penyelenggaraan pemerintahan daerah dan
          Pembangunan PIHAK PERTAMA, melalui pemberitaan di media penyiaran
          PIHAK KEDUA.
        </li>
      </ol>
      <!-- <p style="text-align: justify">&nbsp;</p> -->
      <p style="text-align: justify; line-height: 1.5em;">
        Berdasarkan hal &ndash; hal di atas, PARA PIHAK sepakat mengadakan
        Perjanjian Kerjasama mengenai publikasi atau penyebarluasan informasi
        penyelenggaraan pemerintahan daerah dan pembangunan melalui pemberitaan
        atau penerbitan di media penyiaran, yang selanjutnya disebut Perjanjian,
        dengan ketentuan sebagai berikut :&nbsp;
      </p>
      <p style="text-align: justify">&nbsp;</p>
      <p style="text-align: justify">&nbsp;</p>
      <p style="text-align: justify">&nbsp;</p>
      <p style="text-align: justify">&nbsp;</p>
      <p style="text-align: center; margin-bottom: 1;">
        <strong>PASAL 1<br />RUANG LINGKUP PERJANJUAN</strong>
      </p>
      <ol style="line-height: 1.5em; margin-top: 0;">
        <li style="text-align: justify">
          PIHAK KEDUA melakukan peliputan berita atau pendokumentasian
          foto/video yang terkait dengan informasi penyelenggaraan pemerintahan
          dareah dan pembangunan yang dilaksanakan Pemerintah Kabupaten Banjar
          dan ditayangkan pada rubik atau kanal yang disepakati PARA PIHAK,
          dengan biaya yang disepakati PARA PIHAK.
        </li>
        <li style="text-align: justify">
          PIHAK PERTAMA membantu menyediakan bahan pemberitaan yang diperlukan
          berkaitan dengan informasi penyelenggaraan pemerintahan daerah dan
          Pembangunan Kabupaten Banjar kepada PIHAK KEDUA
        </li>
        <li style="text-align: justify">
          PIHAK PERTAMA diperbolehkan menggunakan berita atau foto/video PIHAK
          KEDUA sebagai bagian dari publikasinya dengan tetap menyantumkan nama
          pemegang hak cipta dari PIHAK KEDUA.
        </li>
      </ol>
      <p style="text-align: center; margin-bottom: 1;">
        <strong>PASAL 2<br />JANGKA WAKTU PERJANJIAN</strong>
      </p>
      <ol style="line-height: 1.5em; margin-top: 0;">
        <li style="text-align: justify">
          Perjanjian ini berlaku <?= $pks[0]['masa_pks']?> , terhitung mulai tanggal <?= $pks[0]['masa_jangka_pks']?> .
        </li>
        <li style="text-align: justify">
          Sehubungan dengan berakhirnya jangka waktu kerjasama sebagaimana pada
          ayat (1) pasal ini, maka perjanjian ini akan berakhir dengan sendiriya
          tanpa kewajiban PIHAK PERTAMA untuk melakukan pemberitahuan kepada
          PIHAK KEDUA.
        </li>
      </ol>
      <p style="text-align: center; margin-bottom: 1;">
        <strong>PASAL 3<br />PENGHENTIAN KERJA SAMA</strong>
      </p>
      <ol style="line-height: 1.5em; margin-top: 0;">
        <li style="text-align: justify">
          Setiap saat selama masa perjanjian, apabila atas pertimbangan PIHAK
          PERTAMA, dana yang tersedia tidak mencukupi karena sesuatu dan lain
          hal, maka PIHAK PERTAMA berhak menghentikan kerjasama ini dengan
          memberitahukan pengakhiran perjanjian ini kepada PIHAK KEDUA secara
          tertulis 3 (tiga) hari sebelumnya.
        </li>
        <li style="text-align: justify">
          Setiap saat selama masa perjanjian, apabila atas pertimbangan PIHAK
          PERTAMA, PIHAK KEDUA tidak menjalankan kewajibannya sebagaimana
          diuraikan dalam perjanjian ini dengan baik maka PIHAK PERTAMA berhak
          menghentikan kerjasama ini secara sepihak tanpa kewajiban menyampaikan
          pemberintahuan baik secara tertulis maupun secara lisan
        </li>
      </ol>
      <p style="text-align: center; margin-bottom: 1;">
        <strong>PASAL 4 <br />TARIF PEMBERITAAN, ADVERTORIAL ATAU PROMOSI</strong>
      </p>
      <ol style="line-height: 1.5em; margin-top: 0;">
        <li style="text-align: justify">
          Kedua belah pihak sepakat tarif pemasangan Berita, Advertorial dan
          Promosi dilakukan oleh PIHAK PERTAMA adalah sebesar <?= $pks[0]['tarif_pks']?>  
          untuk minimal <?= $pks[0]['minimal_berita']?>  berita
          liputan (<?= $pks[0]['jenis_berita']?>) per
          bulan.
        </li>
        <li style="text-align: justify">
          Perubahan terhadap tarif prmasangan Berita, Advertorial dan Promosi
          tidak dapat dilakukan selama jangka waktu perjanjian ini, sehingga
          nilai tersebut sudah merupakan nilai final sampai dengan berakhirnya
          perjanjian.
        </li>
        <li style="text-align: justify">
          Tarif sebagaimana dimaksud dalam ayat (1) pasal ini sudah termasuk
          Pajak &ndash; Pajak yang akan dibayarkan berdasarkan peraturan
          perpajakan yang berlaku dan akan dipotong langsung pada saat
          pembayaran dilakukan.
        </li>
        <li style="text-align: justify">
          Pembayaran tarif biaya dilakukan setiap bulan olah PIHAK PERTAMA.
        </li>
        <!-- <p style="text-align: justify">&nbsp;</p> -->
        <li style="text-align: justify">
          <em> </em>PIHAK PERTAMA dan PIHAK KEDUA sepakat bahwa biaya Kerjasama
          produksi dan penyiaran tersebut tidak dikenakan Pajak Pertambahan
          Nilai sesuai Undang &ndash; Undang Republik Indonesia Nomer 42 Tahun
          2009 tentang jenis jasa yang tidak dikenai Pajak Pertambahan Nilai
          sesuai Pasal 4A Ayat (3) Huruf i berbunyi :
          <em>jasa penyiaran yang tidak bersifat iklan.</em>
        </li>
      </ol>
      <p style="text-align: center; margin-bottom: 1;">
        <strong>PASAL 5<br />KEADAAN MEMAKSA / KAHAR (<em>FORCE MAJEUR</em>)</strong>
      </p>
      <ol style="line-height: 1.5em; margin-top: 0;">
        <li style="text-align: justify">
          Perjanjian Kerjasama ini dapat berakhir atau batal dengan sendirinya
          apabila terdapat:
          <ol type="a">
            <li>
              Ketentuan perundang-undangan atau kebijakan pemerintah yang tidak
              memungkinkan berlangsungnya Perjanjian Kerjasama ini.
            </li>
            <li>
              Keadaan kahar (force majeur), antara lain kebakaran, bencana alam,
              gempa bumi, pemogokan masal, kerusuhan, dan yang sejenis sebahai
              akibat alam dan tidak dapat dihindari pihak yang terkena.
            </li>
            <li>Palit</li>
          </ol>
        </li>
        <li style="text-align: justify">
          Pihak yang tekena keadaan sebagaimana dimaksud pada ayat 1 pasal ini
          wajib memberitahukan kepada PARA PIHAK dalam waktu selambat-lambatnya
          1 (satu) minggu terhitung sejak peristiwa itu terjadi.
        </li>
      </ol>
      <p style="text-align: center; margin-bottom: 1;">
        <strong>PASAL 6<br />PENYELESAIAN PERSELISIHAN</strong>
      </p>
      <ol style="line-height: 1.5em; margin-top: 0;">
        <li style="text-align: justify">
          Apabila terjadi perbedaan pendapat dalam pelaksanaan Perjanjian
          Kerjasama ini, PARA PIHAK akan menyelesaikan melalui musyawarah dengan
          sebaik-baiknya untuk mencapaai mupakat.
        </li>
        <li style="text-align: justify">
          Apabila setelah diupayakan musyawarah ternyata belum memperoleh
          penyelesaian, maka PARA PIHAK sepakat menyelesaikan di Pengadilan
          Negeri Martapura.
        </li>
      </ol>
      <p style="text-align: center; margin-bottom: 1;">
        <strong>PASAL 7<br />PENUTUP</strong>
      </p>
      <p style="text-align: justify; line-height: 1.5em; margin-top: 1;">
        Perjanjian ini di buat rangkap 2 (dua) asli dengan materai cukup,
        masing-masing sama isi dan bunyinya, ditandatangani PARA PIHAK tanpa
        paksaan dari pihak manapun dan mempunyai, kekuatan hukum yang sama, satu
        ranhgkap untuk PIHAK PERTAMA dan satu rangkap untuk PIHAK KEDUA, oleh
        karenanya mengikat PARA PIHAK untuk dilaksanakan.
      </p>
      <!-- <p style="text-align: justify">&nbsp;</p> -->
      <table style="width: 682px; height: 237px">
        <tbody>
          <tr style="height: 82px">
            <td style="width: 370px; height: 82px">
              <p>
                <strong>PIHAK PERTAMA<br /></strong
                ><strong>PEMERINTAH KABUPATEN BANJAR<br /></strong
                ><strong>KEPALA DINAS KOMINFO SP</strong>
              </p>
            </td>
            <td style="width: 333.516px; height: 82px">
              <p>
                <strong>PIHAK KEDUA<br /></strong
                ><strong><?= $pks[0]['nama_instansi']?> </strong>
              </p>
            </td>
          </tr>
          <tr style="height: 79px">
            <td style="width: 370px; height: 79px">
              <p><strong>&nbsp;</strong></p>
            </td>
            <td style="width: 333.516px; height: 79px">
              <p><strong>&nbsp;</strong></p>
            </td>
          </tr>
          <tr style="height: 76px">
            <td style="width: 370px; height: 76px">
              <p>
                <strong
                  ><u><?= $dkisp[0]['nama']?> <br /></u></strong
                >Pembina Utama Muda<br />NIP. <?= $dkisp[0]['nip']?> 
              </p>
            </td>
            <td style="width: 333.516px; height: 76px">
              <p>
                <strong
                  ><u><?= $pks[0]['pimpinan_tertinggi']?> <br /></u></strong
                ><?= $pks[0]['jabatan_pt']?> 
              </p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
  <script>
    window.print();
  </script>
</html>
