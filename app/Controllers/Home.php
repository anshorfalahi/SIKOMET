<?php

namespace App\Controllers;
use App\models\MProfileMedia;

class Home extends BaseController
{
    public function index(){
        $model = new MProfileMedia();
        $media = $model->select('nama_media, link_media, logo_media')->get()->getResultArray();

        return view('home', ['media' => $media]);
    }
}
