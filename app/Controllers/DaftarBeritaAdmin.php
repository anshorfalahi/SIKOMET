<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\MProfileMedia;
use App\Models\MDaftarBerita;
use App\Models\MBeritaWartawan;
use App\Models\MWartawan;

class DaftarBeritaAdmin extends BaseController
{
    public function index()
    {
        $modeProfileMedia = new MProfileMedia();
        $media = $modeProfileMedia->select('id_media, nama_media, logo_media')->findAll();
        
        $data = [
            'title' => 'Daftar Berita Kontribusi',
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
            'title' => 'Daftar Berita Kontribusi',
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

    public function daftar_berita_wartawan()
    {
        $modelBerita = new MBeritaWartawan();
        $listBerita = $modelBerita->getBeritaAll();
        
        $data = [
            'title' => 'Daftar Berita Wartawan',
            'active' => 'daftar_berita',
            'listBerita' => $listBerita,
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");
        return view('admin/daftar_berita_wartawan', $data);   
    }

    public function tambah_berita_wartawan()
    {
        $modelWartawan = new MWartawan();

        //get all nama_media from tb_wartawan
        $nama_media = $modelWartawan->getAllNamaMediaID();
        
        $data = [
            'title' => 'Tambah Berita Wartawan',
            'active' => 'daftar_berita',
            'nama_media' => $nama_media
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");
        return view('admin/tambah_berita_wartawan', $data);   
    }

    public function insertBerita()
    {
        $modelBerita = new MBeritaWartawan();
        $modelWartawan = new MWartawan();
        
        $data = [
            'id_wartawan' => $this->request->getPost('id_wartawan'),
            'judul_berita' => $this->request->getPost('judul_berita'),
            'jenis_berita' => $this->request->getPost('jenis_berita'),
            'link_berita' => $this->request->getPost('link_berita'),
            'tanggal_berita' => $this->request->getPost('tanggal_berita'),
        ];
        
        $modelBerita->insert($data);
        session()->setFlashdata('success', 'Berita berhasil ditambahkan');
        return redirect()->to('/daftar_berita_wartawan');
    }
    
    public function ubah_berita_wartawan($id_berita)
    {
        $modelBerita = new MBeritaWartawan();
        $modelWartawan = new MWartawan();

        //get all nama_media from tb_wartawan
        $nama_media = $modelWartawan->getAllNamaMediaID();
        $berita = $modelBerita->find($id_berita);
        
        $data = [
            'title' => 'Ubah Berita Wartawan',
            'active' => 'daftar_berita',
            'nama_media' => $nama_media,
            'berita' => $berita
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");
        return view('admin/ubah_berita_wartawan', $data);   
    }

    public function updateBerita($id_berita)
    {
        $modelBerita = new MBeritaWartawan();
        $modelWartawan = new MWartawan();
        
        $data = [
            'id_wartawan' => $this->request->getPost('id_wartawan'),
            'judul_berita' => $this->request->getPost('judul_berita'),
            'jenis_berita' => $this->request->getPost('jenis_berita'),
            'link_berita' => $this->request->getPost('link_berita'),
            'tanggal_berita' => $this->request->getPost('tanggal_berita'),
        ];
        
        $modelBerita->update($id_berita, $data);
        session()->setFlashdata('success', 'Berita berhasil diubah');
        return redirect()->to('/daftar_berita_wartawan');
    }

    public function deleteBerita($id_berita)
    {
        $modelBerita = new MBeritaWartawan();
        $modelBerita->delete($id_berita);
        session()->setFlashdata('success', 'Berita berhasil dihapus');
        return redirect()->to('/daftar_berita_wartawan');
    }
}