<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\MProfileMedia;
use App\Models\MDaftarBerita;

class DaftarBeritaAdmin extends BaseController
{
    public function index()
    {
        $modeProfileMedia = new MProfileMedia();
        $media = $modeProfileMedia->select('id_media, nama_media, logo_media')->findAll();
        

        $data = [
            'title' => 'Daftar Berita',
            'active' => 'daftar_berita',
            'media' => $media,
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");

        return view('admin/daftar_berita', $data);
    }

    public function list_berita($id_media)
    {
        $modelBerita = new MDaftarBerita();
        $listBerita = $modelBerita->getBeritaByIdMedia($id_media);
        $nama_media = $modelBerita->select('nama_media')->join('tb_profile_media', 'tb_berita.id_media = tb_profile_media.id_media')->where('tb_berita.id_media', $id_media)->get()->getRow()->nama_media;
        
        $data = [
            'title' => 'Daftar Berita',
            'active' => 'daftar_berita',
            'nama_media' => $nama_media,
            'listBerita' => $listBerita,
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");

        return view('admin/list_berita_media', $data);
    }

    public function list_berita_all()
    {
        $modelBerita = new MDaftarBerita();
        //get all berita join with tb_profile_media nama_media ascending by date
        $listBerita = $modelBerita->select('tb_berita.id_berita, tb_berita.id_media, tb_berita.judul_berita, tb_berita.link_berita, tb_berita.tanggal_berita, tb_profile_media.nama_media')->join('tb_profile_media', 'tb_berita.id_media = tb_profile_media.id_media')->orderBy('tb_berita.tanggal_berita', 'DESC')->findAll();
        
        $data = [
            'title' => 'Daftar Semua Berita',
            'active' => 'daftar_berita',
            'listBerita' => $listBerita,
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");

        return view('admin/list_berita_all', $data);   
    }
}