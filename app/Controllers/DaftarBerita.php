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

        //cek apakah sudah mengisi semua data  profile media jika belum maka redirect ke halaman profile media
        // if($data['profile_media']->nama_instansi == null || $data['profile_media']->link_media == null || $data['profile_media']->jenis_media == null || $data['profile_media']->pimpinan_tertinggi == null || $data['profile_media']->jabatan_pt == null || $data['profile_media']->penanggung_jawab == null || $data['profile_media']->jabatan_pj == null || $data['profile_media']->no_hp == null || $data['profile_media']->alamat == null || $data['profile_media']->logo_media == null ){
        //     return redirect()->to(site_url('profile_media'))->with('error', 'Silahkan Lengkapi Profile Media Terlebih Dahulu');
        // }else if ($data['berkas']->akte_pendirian == null || $data['berkas']->surat_izin_usaha_perusahaan == null || $data['berkas']->surat_izin_tempat_usaha == null || $data['berkas']->surat_keterangan_domisili_perusahaan == null || $data['berkas']->tanda_daftar_perusahaan == null || $data['berkas']->no_rek == null || $data['berkas']->npwp == null || $data['berkas']->spt_tahunan == null || $data['berkas']->surat_penawaran_kerjasama == null || $data['berkas']->surat_tugas == null || $data['berkas']->ktp_pimpinan == null || $data['berkas']->pas_photo == null || $data['berkas']->foto_kantor == null || $data['berkas']->struktur_redaksi == null || $data['berkas']->surat_izin_siaran == null){
        //     return redirect()->to(site_url('upload_berkas'))->with('error', 'Silahkan Lengkapi Berkas Terlebih Dahulu');
        // }else if($data['pks'] == null){
        //     return redirect()->to(site_url('pengajuan_kerja_sama'))->with('error', 'Silahkan Lengkapi Pengajuan Kerja Sama Terlebih Dahulu');
        // }else {
        //     return view('media/daftar_berita', $data);
        // }
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
