<?php

namespace App\Controllers;

class Dashboard extends BaseController
{ 
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ];
        if (session()->get('level') == 'admin') {
            return view('admin/dashboard', $data);
        }else if(session()->get('level') == 'media'){
            return view('media/dashboard', $data);
        }
    }
}
