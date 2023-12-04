<?php

namespace App\Models;

use CodeIgniter\Model;

class MDKISP extends Model
{
    protected $table            = 'tb_dkisp';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama_kadis','nip_kadis'];
}
