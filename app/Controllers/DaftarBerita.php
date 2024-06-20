<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MDaftarBerita;
use App\Models\MProfileMedia;

class DaftarBerita extends BaseController
{
    public function index()
    {
        $modelBerita = new MDaftarBerita();
        $modelMedia = new MProfileMedia();
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        $listBerita = $modelBerita->getBeritaByIdMedia($id_media);
        

        $data = [
            'title' => 'Daftar Berita',
            'active' => 'daftar_berita',
            'listBerita' => $listBerita,
        ];
        // print("<pre>" . print_r($data, true) . "</pre>");

        //buat query cek apakah sudah mengisi lengkap profile media
        $builder = $this->db->table('tb_profile_media');
        $query = $builder->where('id_akun', session()->get('id_akun'))->get();
        $data['profile_media'] = $query->getRow();

        //buat query cek apakah sudah mengisi lengkap berkas
        $builder = $this->db->table('tb_berkas');
        $query = $builder->where('id_media', $id_media)->get();
        $data['berkas'] = $query->getRow();

        //buat query cek apakah sudah membuat pengajuan kerja sama
        $builder = $this->db->table('tb_pks');
        $query = $builder->where('id_media', $id_media)->get();
        $data['pks'] = $query->getRow();

        return view('media/daftar_berita', $data);
    }

    public function tambah_berita()
    {
        $data = [
            'title' => 'Tambah Berita',
            'active' => 'daftar_berita',
        ];

        return view('media/tambah_berita', $data);
    }

    public function insertBerita()
    {
        $modelBerita = new MDaftarBerita();
        $modelMedia = new MProfileMedia();
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        $listBerita = $modelBerita->getBeritaByIdMedia($id_media);

        $data = [
            'id_media' => $id_media,
            'judul_berita' => $this->request->getPost('judul_berita'),
            'link_berita' => $this->request->getPost('link_berita'),
            'tanggal_berita' => $this->request->getPost('tanggal_berita'),
        ];

        $modelBerita->insert($data);
        session()->setFlashdata('success', 'Berita berhasil ditambahkan');
        return redirect()->to('/daftar_berita');
    }

    public function ubah_berita($id_berita)
    {
        $modelBerita = new MDaftarBerita();
        $modelMedia = new MProfileMedia();
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        $listBerita = $modelBerita->getBeritaByIdMedia($id_media);
        $berita = $modelBerita->find($id_berita);

        $data = [
            'title' => 'Edit Berita',
            'active' => 'daftar_berita',
            'berita' => $berita,
        ];
        // print("<pre>" . print_r($data, true) . "</pre>");

        return view('media/ubah_berita', $data);
    }

    public function updateBerita($id_berita)
    {
        $modelBerita = new MDaftarBerita();
        $modelMedia = new MProfileMedia();
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        $listBerita = $modelBerita->getBeritaByIdMedia($id_media);

        $data = [
            'id_media' => $id_media,
            'judul_berita' => $this->request->getPost('judul_berita'),
            'link_berita' => $this->request->getPost('link_berita'),
            'tanggal_berita' => $this->request->getPost('tanggal_berita'),
        ];

        $modelBerita->update($id_berita, $data);
        session()->setFlashdata('success', 'Berita berhasil diubah');
        return redirect()->to('/daftar_berita');
    }

    public function deleteBerita($id_berita)
    {
        $modelBerita = new MDaftarBerita();
        $modelMedia = new MProfileMedia();
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        $listBerita = $modelBerita->getBeritaByIdMedia($id_media);

        $modelBerita->delete($id_berita);
    
        return redirect()->to('/daftar_berita');
    }
}
