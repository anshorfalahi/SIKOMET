<?php

namespace App\Models;

use CodeIgniter\Model;

class MProfileMedia extends Model
{
    protected $table            = 'tb_profile_media';
    protected $primaryKey       = 'id_media';
    protected $allowedFields    = ['id_akun', 'nama_media', 'nama_instansi', 'jenis_media', 'penanggung_jawab', 'no_hp', 'alamat', 'logo_media'];

    protected $ValidationLogo = [
        'logo_media' => [
            'rules' => 'max_size[logo_media,1024]|is_image[logo_media]|mime_in[logo_media,image/jpg,image/jpeg,image/png]|max_dims[logo,512,512]',
            'errors' => [
                'max_size' => 'Ukuran Gambar Terlalu Besar',
                'is_image' => 'Yang Anda Pilih Bukan Gambar',
                'mime_in' => 'Yang Anda Pilih Bukan Gambar'
            ]
        ]
    ];

}
