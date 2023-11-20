<?php

namespace App\Controllers;
use App\models\MProfileMedia;

class Home extends BaseController
{
    public function index(){
        $model = new MProfileMedia();
        //select nama_media, link_media, logo_media from tb_profile_media where status = 1
        $media = $model->where(['status' => '1'])->findAll();

        return view('home', ['media' => $media]);
    }
}
