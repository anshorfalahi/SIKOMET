<?php

namespace App\Controllers;
use App\Models\MProfileMedia;
use App\Models\MDaftarBerita;
use App\Models\MPengajuanKerjaSama;

class Dashboard extends BaseController
{ 
    public function index()
    {
        $totalMedia = count((new MProfileMedia())->getAllProfileMedia());
        $totalMediaAktif = count((new MProfileMedia())->getAllProfileMediaAktif());
        $totalBeritaPerBulan = (new MDaftarBerita())->getCountBeritaByMonth();
        $totalBeritaPerTahun = (new MDaftarBerita())->getCoutBeritaByYear();
        $beritaPerMedia = (new MDaftarBerita())->getBeritaByMonth();
        $targetBeritaMedia = (new MPengajuanKerjaSama())->getNamaMediaMinimalBerita();
        $totalBeritaMediaPerTahun = (new MDaftarBerita())->getBeritaByYear();


        $dataAdmin = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'totalMedia' => $totalMedia,
            'totalMediaAktif' => $totalMediaAktif,
            'totalBeritaPerBulan' => $totalBeritaPerBulan,
            'totalBeritaPerTahun' => $totalBeritaPerTahun,
            'beritaPerMedia' => $beritaPerMedia,
            'targetBeritaMedia' => $targetBeritaMedia,
            'totalBeritaMediaPerTahun' => $totalBeritaMediaPerTahun,
        ];

        $dataMedia = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
        ];

        // print("<pre>" . print_r($dataAdmin, true) . "</pre>");
        if (session()->get('level') == 'admin') {
            return view('admin/dashboard', $dataAdmin);
        }else if(session()->get('level') == 'media'){
            return view('media/dashboard', $dataMedia);
        }
    }
}
