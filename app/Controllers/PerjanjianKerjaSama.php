<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PerjanjianKerjaSama extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Perjanjian Kerja Sama',
            'active' => 'perjanjian_kerja_sama',
        ];

        return view('media/perjanjian_kerjasama', $data);
    }
}
