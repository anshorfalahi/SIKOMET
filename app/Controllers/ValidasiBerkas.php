<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MProfileMedia;
use App\Models\MUploadBerkas;

class ValidasiBerkas extends BaseController
{
    public function index()
    {
        $modelProfileMedia = new MProfileMedia();
        $modelUploadBerkas = new MUploadBerkas();

        $id_akun = session()->get('id_akun');
        $data['profile_media'] = $modelProfileMedia->getProfileMediaById($id_akun);
        $id_media = $data['profile_media']['id_media'];
        $data['berkas'] = $modelUploadBerkas->getBerkas($id_media);
        //get profile media join berkas hanya ambil nama_media, nama_instansi, id_berkas, validasi
        $profile_media = $this->db->table('tb_profile_media')
            ->join('tb_berkas', 'tb_berkas.id_media = tb_profile_media.id_media')
            ->select('tb_profile_media.nama_media, tb_profile_media.nama_instansi, tb_berkas.id_berkas, tb_berkas.id_media, tb_berkas.validasi')
            ->get()->getResultArray();

        $data = [
            'title' => 'Validasi Berkas',
            'active' => 'validasi_berkas',
            'profile_media' => $profile_media,
            'berkas' => $modelUploadBerkas->getBerkas($id_media)
        ];

        // print("<pre>".print_r($data['profile_media'],true)."</pre>");
        return view('admin/validasi_berkas', $data);
    }

    public function detailBerkas($id_berkas)
    {
        $modelProfileMedia = new MProfileMedia();
        $modelUploadBerkas = new MUploadBerkas();

        $id_berkas = $this->request->uri->getSegment(3);

        $data = [
            'title' => 'Detail Berkas',
            'active' => 'validasi_berkas',
            'berkas' => $modelUploadBerkas->getBerkas($id_berkas)

        ];

        // print("<pre>".print_r($data['berkas'],true)."</pre>");
        return view('admin/detail_berkas', $data);
    }

    public function prosesValidasi($id_berkas)
    {
        $modelUploadBerkas = new MUploadBerkas();

        $id_berkas = $this->request->uri->getSegment(3);

        $data = [
            'validasi' => $this->request->getPost('validasi'),
            'catatan' => $this->request->getPost('catatan')
        ];

        $modelUploadBerkas->update($id_berkas, $data);

        session()->setFlashdata('success', 'Berkas berhasil divalidasi');
        return redirect()->to(site_url('validasi_berkas'));
    }
}
