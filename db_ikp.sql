-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2024 pada 10.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ikp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$hfZEPBb4aFlPv4Yjq4VrqumZvdFLyqsVKf2Jjg1HDJ57phqNCZqxK', 'admin'),
(2, 'rsb', '$2y$10$hfZEPBb4aFlPv4Yjq4VrqumZvdFLyqsVKf2Jjg1HDJ57phqNCZqxK', 'media'),
(3, 'tribunnews', '$2y$10$hfZEPBb4aFlPv4Yjq4VrqumZvdFLyqsVKf2Jjg1HDJ57phqNCZqxK', 'media'),
(13, 'anshor', '$2y$10$hfZEPBb4aFlPv4Yjq4VrqumZvdFLyqsVKf2Jjg1HDJ57phqNCZqxK', 'media');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `id_media` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `link_berita` varchar(256) NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_media`, `judul_berita`, `link_berita`, `tanggal_berita`) VALUES
(2, 1, 'Amat Kom', 'https://rsb.banjarkab.go.id/jelang-nataru-dkumpp-periksa-alat-ukur-di-tiga-spbu-coco/', '2023-12-14'),
(4, 1, 'Bupati', 'tes.com', '2023-12-12'),
(5, 1, 'Amat', 'tes.com', '2023-11-14'),
(6, 12, 'Anshor', 'anshor.com', '2023-12-13'),
(7, 2, 'Pohon Tumbang', 'berita.co', '2023-12-13'),
(8, 12, 'Anshor', 'anshor.com', '2023-12-13'),
(9, 12, 'Anshor', 'anshor.com', '2024-01-03'),
(10, 12, 'Anshor', 'anshor.com', '2024-02-19'),
(11, 12, 'Anshor', 'anshor.com', '2023-11-22'),
(12, 12, 'Pohon Tumbang', 'pohon_tumbang.com', '2024-01-25'),
(13, 1, 'Pohon Tumbang', 'pohon_tumbang.com', '2024-01-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita_wartawan`
--

CREATE TABLE `tb_berita_wartawan` (
  `id_berita` int(11) NOT NULL,
  `id_wartawan` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `link_berita` varchar(256) NOT NULL,
  `jenis_berita` varchar(50) NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita_wartawan`
--

INSERT INTO `tb_berita_wartawan` (`id_berita`, `id_wartawan`, `judul_berita`, `link_berita`, `jenis_berita`, `tanggal_berita`) VALUES
(1, 1, 'Pohon Tumbang', 'https://www.beritasatu.com/network/wartabanjar/86687/pohon-tumbang-di-depan-kantor-pemkab-banjar-halangi-arus-lalu-lintas', 'Artikel', '2024-01-05'),
(3, 1, 'OK', 'SIP.com', 'Koran', '2024-01-06'),
(4, 2, 'Anshor', 'anshor.com', 'Lipsus', '2024-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_media` int(11) NOT NULL,
  `akte_pendirian` varchar(256) NOT NULL,
  `surat_izin_usaha_perusahaan` varchar(256) NOT NULL,
  `surat_izin_tempat_usaha` varchar(256) NOT NULL,
  `surat_keterangan_domisili_perusahaan` varchar(256) NOT NULL,
  `tanda_daftar_perusahaan` varchar(256) NOT NULL,
  `no_rek` varchar(256) NOT NULL,
  `npwp` varchar(256) NOT NULL,
  `spt_tahunan` varchar(256) NOT NULL,
  `surat_penawaran_kerjasama` varchar(256) NOT NULL,
  `surat_tugas` varchar(256) NOT NULL,
  `ktp_pimpinan` varchar(256) NOT NULL,
  `pas_photo` varchar(256) NOT NULL,
  `foto_kantor` varchar(256) NOT NULL,
  `struktur_redaksi` varchar(256) NOT NULL,
  `surat_izin_siaran` varchar(256) NOT NULL,
  `validasi` int(11) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berkas`
--

INSERT INTO `tb_berkas` (`id_berkas`, `id_media`, `akte_pendirian`, `surat_izin_usaha_perusahaan`, `surat_izin_tempat_usaha`, `surat_keterangan_domisili_perusahaan`, `tanda_daftar_perusahaan`, `no_rek`, `npwp`, `spt_tahunan`, `surat_penawaran_kerjasama`, `surat_tugas`, `ktp_pimpinan`, `pas_photo`, `foto_kantor`, `struktur_redaksi`, `surat_izin_siaran`, `validasi`, `catatan`) VALUES
(2, 1, '1700790121_ffcb22388a32681c92ce.pdf', '1706249176_9ee46bc9366bd13fe242.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'Aman'),
(3, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL),
(9, 12, '1700622376_41bf69ad12edba1d2c01.pdf', '1701395905_a08d68580c0cb925c289.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dkisp`
--

CREATE TABLE `tb_dkisp` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dkisp`
--

INSERT INTO `tb_dkisp` (`id`, `nama`, `nip`, `keterangan`) VALUES
(1, 'Drs. H.M. Aidil Basith, M.AP', '19660107 198903 1 008 ', 'Pembina Utama Muda'),
(2, 'Noor Syawli Syahri, S.Kom', '19800901 200904 1 003 ', 'Pembina Tingkat I'),
(3, 'Heni Triyana, A.md', '19811019 201001 2 016', 'Penata Muda Tingkat I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pks`
--

CREATE TABLE `tb_pks` (
  `id_pks` int(11) NOT NULL,
  `id_media` int(11) NOT NULL,
  `masa_pks` varchar(50) NOT NULL,
  `masa_jangka_pks` varchar(50) NOT NULL,
  `tarif_pks` varchar(50) NOT NULL,
  `minimal_berita` varchar(50) NOT NULL,
  `jenis_berita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pks`
--

INSERT INTO `tb_pks` (`id_pks`, `id_media`, `masa_pks`, `masa_jangka_pks`, `tarif_pks`, `minimal_berita`, `jenis_berita`) VALUES
(9, 1, '3 bulan', '29 Desember 2023 sampai dengan 29 Maret 2024', 'Rp.5.000.000,- (Lima Juta Rupiah)', '6 (enam)', 'text/foto/video/banner/lipsus'),
(10, 2, '3 bulan', '12 Desember 2023 sampai dengan 12 Maret 2024', 'Rp.1.000.000,- (Satu Juta Rupiah)', '4 (empat)', 'text/foto'),
(13, 12, '6 bulan', '23 Januari 2024 sampai dengan 23 Maret 2024', 'Rp.5.000.000,- (Lima Juta Rupiah)', '8 (delapan)', 'text/foto/video');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profile_media`
--

CREATE TABLE `tb_profile_media` (
  `id_media` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_media` varchar(50) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `link_media` varchar(50) NOT NULL,
  `jenis_media` varchar(50) NOT NULL,
  `pimpinan_tertinggi` varchar(50) NOT NULL,
  `jabatan_pt` varchar(50) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `jabatan_pj` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `logo_media` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profile_media`
--

INSERT INTO `tb_profile_media` (`id_media`, `id_akun`, `nama_media`, `nama_instansi`, `link_media`, `jenis_media`, `pimpinan_tertinggi`, `jabatan_pt`, `penanggung_jawab`, `jabatan_pj`, `no_hp`, `alamat`, `logo_media`, `status`) VALUES
(1, 2, 'Suara Banjar ', 'PT TESTING  MEDIA', 'https://rsb.banjarkab.go.id/', 'Media Perusahaan', 'Pak Umar', 'Produser Media', 'Bpk Pepen', 'Wartawan Media', '089627223182', 'jl. Pangeran Hidayatullah,Martapura, Kalimantan Selatan 70611 Martapura, Kalimantan ', 'rsb.png', 0),
(2, 3, 'Tribun News Banjarmasin', 'PT Tribun Digital Online', 'https://banjarmasin.tribunnews.com/', 'Media Perusahaan', '', '', 'Bpk Mamat', 'Editor', '09088666', 'Handil Muara', 'tribun.png', 1),
(12, 13, 'Anshor Media ', 'PT. Media Maju', 'https://anshor.my.id', 'Media Perusahaan', 'Anshor Falahi', 'Direktur Utama', 'Anshor Falahi', 'Wartawan', '089627223182', 'Jalan A Yani Kalimantan Selatan', 'Desain judul.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wartawan`
--

CREATE TABLE `tb_wartawan` (
  `id_wartawan` int(11) NOT NULL,
  `nama_wartawan` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_rek` int(30) NOT NULL,
  `nama_media` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wartawan`
--

INSERT INTO `tb_wartawan` (`id_wartawan`, `nama_wartawan`, `no_hp`, `no_rek`, `nama_media`, `nama_perusahaan`, `berkas`) VALUES
(1, 'Anshor ', '12432', 235432, 'Liputan Anshor', 'PT Testing', '1704678403_6158008aa14eb973907d.pdf'),
(2, 'Falahi', '98765677', 76545678, 'Anshor Media', 'Anshor Falahi', '1705306403_0304b340d82286cd7600.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_media` (`id_media`);

--
-- Indeks untuk tabel `tb_berita_wartawan`
--
ALTER TABLE `tb_berita_wartawan`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_wartawan` (`id_wartawan`);

--
-- Indeks untuk tabel `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `id_media` (`id_media`);

--
-- Indeks untuk tabel `tb_dkisp`
--
ALTER TABLE `tb_dkisp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pks`
--
ALTER TABLE `tb_pks`
  ADD PRIMARY KEY (`id_pks`),
  ADD KEY `id_media` (`id_media`) USING BTREE;

--
-- Indeks untuk tabel `tb_profile_media`
--
ALTER TABLE `tb_profile_media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_user` (`id_akun`);

--
-- Indeks untuk tabel `tb_wartawan`
--
ALTER TABLE `tb_wartawan`
  ADD PRIMARY KEY (`id_wartawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_berita_wartawan`
--
ALTER TABLE `tb_berita_wartawan`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_dkisp`
--
ALTER TABLE `tb_dkisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pks`
--
ALTER TABLE `tb_pks`
  MODIFY `id_pks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_profile_media`
--
ALTER TABLE `tb_profile_media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_wartawan`
--
ALTER TABLE `tb_wartawan`
  MODIFY `id_wartawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_media`) REFERENCES `tb_profile_media` (`id_media`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_berita_wartawan`
--
ALTER TABLE `tb_berita_wartawan`
  ADD CONSTRAINT `tb_berita_wartawan_ibfk_1` FOREIGN KEY (`id_wartawan`) REFERENCES `tb_wartawan` (`id_wartawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD CONSTRAINT `tb_berkas_ibfk_1` FOREIGN KEY (`id_media`) REFERENCES `tb_profile_media` (`id_media`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pks`
--
ALTER TABLE `tb_pks`
  ADD CONSTRAINT `tb_pks_ibfk_1` FOREIGN KEY (`id_media`) REFERENCES `tb_profile_media` (`id_media`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_profile_media`
--
ALTER TABLE `tb_profile_media`
  ADD CONSTRAINT `tb_profile_media_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
