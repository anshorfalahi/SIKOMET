<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ];
        return view('media/dashboard', $data);
    }
}
