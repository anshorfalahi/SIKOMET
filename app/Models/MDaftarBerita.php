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
}
