<?php

namespace App\Models;

use CodeIgniter\Model;

class MWartawan extends Model
{
    protected $table            = 'tb_wartawan';
    protected $primaryKey       = 'id_wartawan';
    protected $allowedFields    = ['nama_wartawan','no_hp','no_rek', 'status','berkas'];

    public function getTotalWartawan()
    {
        return $this->countAll();
    }

    //get count all wartawan and times 500.000 gynakan titik untuk pemisah ribuan
    public function getTotalUang()
    {
        $total = $this->countAll();
        $total = $total * 500000;
        return number_format($total, 0, ',', '.');
    }
}

