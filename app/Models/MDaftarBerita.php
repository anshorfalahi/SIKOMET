<?php

namespace App\Models;

use CodeIgniter\Model;

class MDaftarBerita extends Model
{
    protected $table            = 'tb_berita';
    protected $primaryKey       = 'id_berita';
    protected $allowedFields    = ['id_media', 'judul_berita', 'link_berita', 'tanggal_berita'];

    public function getBeritaByIdMedia($id_media)
    {
        return $this->where('id_media', $id_media)->findAll();
        
    }

    public function getCountBeritaByMonth()
    {
        $month = date('m');
        return $this->where('MONTH(tanggal_berita)', $month)->countAllResults();
    }

    public function getCoutBeritaByYear()
    {
        $year = date('Y');
        return $this->where('YEAR(tanggal_berita)', $year)->countAllResults();
    }

    //select nama_media, count(id_berita) as jumlah_berita from tb_berita join tb_profile_media on tb_berita.id_media = tb_profile_media.id_media group by tb_berita.id_media where month now
    public function getBeritaByMonth()
    {
        $month = date('m');
        return $this->select('nama_media, count(id_berita) as jumlah_berita')
            ->join('tb_profile_media', 'tb_berita.id_media = tb_profile_media.id_media')
            ->where('MONTH(tanggal_berita)', $month)
            ->groupBy('tb_berita.id_media')
            ->get()
            ->getResultArray();
    }

    //select nama_media, count(id_berita) as jumlah_berita from tb_berita join tb_profile_media on tb_berita.id_media = tb_profile_media.id_media group by tb_berita.id_media where year now
    public function getBeritaByYear()
    {
        $year = date('Y');
        return $this->select('nama_media, count(id_berita) as jumlah_berita')
            ->join('tb_profile_media', 'tb_berita.id_media = tb_profile_media.id_media')
            ->where('YEAR(tanggal_berita)', $year)
            ->groupBy('tb_berita.id_media')
            ->get()
            ->getResultArray();
    }

    public function getJumlahBeritaPerBulan($idMedia)
    {
        return $this->select([
            'tb_profile_media.nama_media',
            'MONTH(tb_berita.tanggal_berita) AS bulan',
            'YEAR(tb_berita.tanggal_berita) AS tahun',
            'COUNT(tb_berita.id_berita) AS jumlah_berita'
        ])
        ->join('tb_profile_media', 'tb_berita.id_media = tb_profile_media.id_media')
        ->where('tb_berita.id_media', $idMedia)
        ->where("tb_berita.tanggal_berita >= DATE_SUB(NOW(), INTERVAL 12 MONTH)")
        ->groupBy(['tb_profile_media.id_media', 'bulan', 'tahun'])
        ->orderBy('tb_profile_media.id_media, tahun, bulan')
        ->findAll();
    }

    public function getJumlahBeritaPerTahun($idMedia)
    {
        $year = date('Y');
        //count berita per tahun sekarang berdasarkan id media dengan output angka
        return $this->select('COUNT(id_berita) AS jumlah_berita')
            ->where('id_media', $idMedia)
            ->where('YEAR(tanggal_berita)', $year)
            ->get()
            ->getRowArray();
    }

    public function getJumlahBeritaPerBulanSekarang($idMedia)
    {
        $month = date('m');
        //count berita per bulan sekarang berdasarkan id media dengan output angka
        return $this->select('COUNT(id_berita) AS jumlah_berita')
            ->where('id_media', $idMedia)
            ->where('MONTH(tanggal_berita)', $month)
            ->get()
            ->getRowArray();
    }
    
}
