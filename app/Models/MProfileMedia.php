<?php

namespace App\Models;

use CodeIgniter\Model;

class MProfileMedia extends Model
{
    protected $table            = 'tb_profile_media';
    protected $primaryKey       = 'id_media';
    protected $allowedFields    = ['id_akun', 'nama_media', 'nama_instansi', 'link_media', 'jenis_media', 'penanggung_jawab', 'no_hp', 'alamat', 'logo_media'];
}
