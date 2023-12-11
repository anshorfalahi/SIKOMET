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
}
