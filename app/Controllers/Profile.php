<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Profile',
            'active' => 'profile'
        ];
        return view('media/profile', $data);
    }
}
