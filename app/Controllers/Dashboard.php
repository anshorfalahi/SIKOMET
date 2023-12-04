<?php

namespace App\Controllers;
use App\Models\MProfileMedia;

class Dashboard extends BaseController
{ 
    public function index()
    {
        $totalMedia = count((new MProfileMedia())->getAllProfileMedia());
        $totalMediaAktif = count((new MProfileMedia())->getAllProfileMediaAktif());

        $dataAdmin = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'totalMedia' => $totalMedia,
            'totalMediaAktif' => $totalMediaAktif,
        ];

        $dataMedia = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");
        if (session()->get('level') == 'admin') {
            return view('admin/dashboard', $dataAdmin);
        }else if(session()->get('level') == 'media'){
            return view('media/dashboard', $dataMedia);
        }
    }
}
