<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ListProfileMedia extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'List Profile Media',
            'active' => 'list_profile_media'
        ];
        return view('admin/list_profile_media', $data);
    }
}
