<?php

namespace App\Models;

use CodeIgniter\Model;

class MBeritaWartawan extends Model
{
    protected $table            = 'tb_berita_wartawan';
    protected $primaryKey       = 'id_berita';
    protected $allowedFields    = ['id_wartawan', 'judul_berita', 'link_berita', 'jenis_berita', 'tanggal_berita'];

    public function getBeritaAll(){
        $builder = $this->db->table('tb_berita_wartawan');
        $builder->select('tb_berita_wartawan.id_berita, tb_berita_wartawan.judul_berita, tb_berita_wartawan.link_berita, tb_berita_wartawan.jenis_berita, tb_berita_wartawan.tanggal_berita, tb_wartawan.nama_media, tb_wartawan.nama_wartawan');
        $builder->join('tb_wartawan', 'tb_berita_wartawan.id_wartawan = tb_wartawan.id_wartawan');
        $builder->orderBy('tb_berita_wartawan.tanggal_berita', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
