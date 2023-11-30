<?php

namespace App\Models;

use CodeIgniter\Model;

class MProfileMedia extends Model
{
    protected $table            = 'tb_profile_media';
    protected $primaryKey       = 'id_media';
    protected $allowedFields    = ['id_akun', 'nama_media', 'nama_instansi', 'link_media', 'jenis_media', 'pimpinan_tertinggi', 'jabatan_pt' ,'penanggung_jawab', 'jabatan_pj', 'no_hp', 'alamat', 'logo_media'];

    public function insertProfileMedia($data)
    {
        $this->insert($data);
    }

    public function getAllProfileMedia()
    {
        return $this->findAll();
    }

    public function getProfileMediaById($id)
    {
        return $this->where(['id_media' => $id])->first();
    }

    public function deleteProfileMedia($id_media)
    {
        $this->delete($id_media);
    }
    
}
