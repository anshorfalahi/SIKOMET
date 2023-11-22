<?php

namespace App\Models;

use CodeIgniter\Model;

class MUploadBerkas extends Model
{
    protected $table            = 'tb_berkas';
    protected $primaryKey       = 'id_berkas';
    protected $allowedFields    = [
        'id_media',
        'akte_pendirian',
        'surat_izin_usaha_perusahaan', 
        'surat_izin_tempat_usaha',
        'surat_keterangan_domisili_perusahaan',
        'tanda_daftar_perusahaan',
        'no_rek',
        'npwp',
        'spt_tahunan',
        'surat_penawaran_kerjasama',
        'surat_tugas',
        'ktp_pimpinan',
        'pas_photo',
        'foto_kantor',
        'struktur_redaksi',
        'surat_izin_siaran',
        'validasi',
        'catatan',
    ];

    public function getBerkas($id)
    {
        return $this->where(['id_media' => $id])->get()->getRowArray();
    }

}
