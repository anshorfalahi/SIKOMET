<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MPengajuanKerjaSama;
use App\Models\MUploadBerkas;
use App\Models\MProfileMedia;

class PengajuanKerjaSama extends BaseController
{
    public function index(){
        $model = new MPengajuanKerjaSama();
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        $data['pengajuan_kerja_sama'] = $model->getPengajuanKerjaSama($id_media)->getResultArray();

        $data = [
            'title' => 'Pengajuan Kerja Sama',
            'active' => 'pengajuan_kerja_sama',
            'pengajuan_kerja_sama' => $data['pengajuan_kerja_sama'],
        ];
        // print("<pre>".print_r($data['pengajuan_kerja_sama'],true)."</pre>");

        //buat query cek apakah sudah mengisi lengkap profile media
        $builder = $this->db->table('tb_profile_media');
        $query = $builder->where('id_akun', session()->get('id_akun'))->get();
        $data['profile_media'] = $query->getRow();

        //buat query cek apakah sudah mengisi lengkap berkas
        $builder = $this->db->table('tb_berkas');
        $query = $builder->where('id_media', $id_media)->get();
        $data['berkas'] = $query->getRow();

        //cek apakah sudah mengisi semua data  profile media jika belum maka redirect ke halaman profile media
        if($data['profile_media']->nama_instansi == null || $data['profile_media']->link_media == null || $data['profile_media']->jenis_media == null || $data['profile_media']->pimpinan_tertinggi == null || $data['profile_media']->jabatan_pt == null || $data['profile_media']->penanggung_jawab == null || $data['profile_media']->jabatan_pj == null || $data['profile_media']->no_hp == null || $data['profile_media']->alamat == null || $data['profile_media']->logo_media == null ){
            return redirect()->to(site_url('profile_media'))->with('error', 'Silahkan Lengkapi Profile Media Terlebih Dahulu');
         } // }else if ($data['berkas']->akte_pendirian == null || $data['berkas']->surat_izin_usaha_perusahaan == null || $data['berkas']->surat_izin_tempat_usaha == null || $data['berkas']->surat_keterangan_domisili_perusahaan == null || $data['berkas']->tanda_daftar_perusahaan == null || $data['berkas']->no_rek == null || $data['berkas']->npwp == null || $data['berkas']->spt_tahunan == null || $data['berkas']->surat_penawaran_kerjasama == null || $data['berkas']->surat_tugas == null || $data['berkas']->ktp_pimpinan == null || $data['berkas']->pas_photo == null || $data['berkas']->foto_kantor == null || $data['berkas']->struktur_redaksi == null || $data['berkas']->surat_izin_siaran == null){
        //     return redirect()->to(site_url('upload_berkas'))->with('error', 'Silahkan Lengkapi Berkas Terlebih Dahulu');
        // }
        else {
            return view('media/pengajuan_kerjasama', $data);
        }
    }

    public function tambah_pengajuan_kerjasama(){
        $data = [
            'title' => 'Pengajuan Kerja Sama',
            'active' => 'pengajuan_kerja_sama',
        ];

        return view('media/tambah_pengajuan_kerjasama', $data);
    }

    public function insertPengajuanKerjaSama()
    {
        $model = new MPengajuanKerjaSama();
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;

        $jenis_berita = $this->request->getPost('jenis_berita');
        $jenis_berita_implode = implode("/", $jenis_berita);

        $data = [
            'id_media' => $id_media,
            'masa_pks' => $this->request->getPost('masa_kerja_sama'),
            'masa_jangka_pks' => $this->request->getPost('terhitung_pada_tanggal'),
            'tarif_pks' => $this->request->getPost('tarif_pemasangan'),
            'minimal_berita' => $this->request->getPost('output_berita_perbulan'),
            'jenis_berita' => $jenis_berita_implode,
            'status_ajuan' => 'Menunggu Validasi'
        ];

        $model->insertPengajuanKerjaSama($data);

        session()->setFlashdata('success', 'Pengajuan Kerja Sama Berhasil Dikirim');
        return redirect()->to(base_url('pengajuan_kerja_sama'));
    }

    public function ubah_pengajuan_kerjasama($id_pks){
        $model = new MPengajuanKerjaSama();
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        $pengajuan_kerja_sama= $model->getPengajuanKerjaSama($id_media)->getResultArray();

        $data = [
            'title' => 'Pengajuan Kerja Sama',
            'active' => 'pengajuan_kerja_sama',
            'pengajuan_kerja_sama' => $pengajuan_kerja_sama[0],
        ];

        // print("<pre>".print_r($data,true)."</pre>");
        return view('media/ubah_pengajuan_kerjasama', $data);
    }

    public function updatePengajuanKerjaSama($id_pks)
    {
        $id_pks = $this->request->uri->getSegment(3);
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;

        $jenis_berita = $this->request->getPost('jenis_berita');
        $jenis_berita_implode = implode("/", $jenis_berita);

        $data = [
            'id_media' => $id_media,
            'masa_pks' => $this->request->getPost('masa_kerja_sama'),
            'masa_jangka_pks' => $this->request->getPost('terhitung_pada_tanggal'),
            'tarif_pks' => $this->request->getPost('tarif_pemasangan'),
            'minimal_berita' => $this->request->getPost('output_berita_perbulan'),
            'jenis_berita' => $jenis_berita_implode,
            'status_ajuan' => 'Menunggu Validasi'
        ];

        $builder = $this->db->table('tb_pks');
        $builder->where('id_pks', $id_pks);
        $builder->update($data);

        session()->setFlashdata('success', 'Pengajuan Kerja Sama Berhasil Diubah');
        return redirect()->to(base_url('pengajuan_kerja_sama'));
    }

    public function deletePengajuanKerjaSama($id_pks)
    {
        $model = new MPengajuanKerjaSama();
        $id_pks = $this->request->uri->getSegment(3);

        $model->delete($id_pks);
        
        session()->setFlashdata('success', 'Pengajuan Kerja Sama Berhasil Dihapus');
        return redirect()->to(base_url('pengajuan_kerja_sama'));
    }
}
