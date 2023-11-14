<?php

namespace App\Controllers;

class Upload_Berkas extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Upload Berkas',
            'active' => 'upload_berkas'
        ];
        return view('media/upload_berkas', $data);
    }
}
