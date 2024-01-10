<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MPengajuanKerjaSama;
use App\Models\MDKISP;

class PerjanjianKerjaSama extends BaseController
{
    public function index()
    {
        $model = new MPengajuanKerjaSama();

        $data = [
            'title' => 'Perjanjian Kerja Sama',
            'active' => 'perjanjian_kerja_sama',
            'pks' => $model->getPengajuanKerjaSamaJoin()->getResultArray(),
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");
        return view('admin/perjanjian_kerjasama', $data);
    }

    public function printPerjanjianKerjaSama($id_media)
    {
        $model = new MPengajuanKerjaSama();
        $builder = $this->db->table('tb_dkisp');
        $builder->select('*');

        $data = [
            'title' => 'Perjanjian Kerja Sama',
            'active' => 'perjanjian_kerja_sama',
            'pks' => $model->getPengajuanKerjaSama($id_media)->getResultArray(),
            'dkisp' => $builder->get()->getResultArray(),
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");
        return view('pks', $data);
    }
}
