<?php

namespace App\Models;

use CodeIgniter\Model;

class MWartawan extends Model
{
    protected $table            = 'tb_wartawan';
    protected $primaryKey       = 'id_wartawan';
    protected $allowedFields    = ['nama_wartawan','no_hp','no_rek', 'status','berkas'];
}
