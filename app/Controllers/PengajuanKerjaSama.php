<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MPengajuanKerjaSama;

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
        return view('media/pengajuan_kerjasama', $data);
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
