<?php

namespace App\Controllers;
use App\Models\MUploadBerkas;
use App\Models\MProfileMedia;

class UploadBerkas extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('tb_profile_media');
        $query = $builder->where('id_akun', session()->get('id_akun'))->get();
        $data = [
            'title' => 'Upload Berkas',
            'active' => 'upload_berkas',
            'profile_media' => $query->getRow(),
            'berkas' => $this->db->table('tb_berkas')->where('id_media', $query->getRow()->id_media)->get()->getRow()
        ];

        return view('media/upload_berkas', $data);
    }

    public function prosesUpdateBerkas()
    {
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        $berkasModel = new MUploadBerkas();

        if($this->request->getMethod() == 'post'){
            if($this->request->getFile('akte_pendirian') != ''){
                $this->moveAndSaveFile('akte_pendirian', $id_media);
            }
            if($this->request->getFile('surat_izin_usaha_perusahaan') != ''){
                $this->moveAndSaveFile('surat_izin_usaha_perusahaan', $id_media);
            }
            if($this->request->getFile('surat_izin_tempat_usaha') != ''){
                $this->moveAndSaveFile('surat_izin_tempat_usaha', $id_media);
            }
            if($this->request->getFile('surat_keterangan_domisili_perusahaan') != ''){
                $this->moveAndSaveFile('surat_keterangan_domisili_perusahaan', $id_media);
            }
            if($this->request->getFile('tanda_daftar_perusahaan') != ''){
                $this->moveAndSaveFile('tanda_daftar_perusahaan', $id_media);
            }
            if($this->request->getFile('no_rek') != ''){
                $this->moveAndSaveFile('no_rek', $id_media);
            }
            if($this->request->getFile('npwp') != ''){
                $this->moveAndSaveFile('npwp', $id_media);
            }
            if($this->request->getFile('spt_tahunan') != ''){
                $this->moveAndSaveFile('spt_tahunan', $id_media);
            }
            if($this->request->getFile('surat_penawaran_kerjasama') != ''){
                $this->moveAndSaveFile('surat_penawaran_kerjasama', $id_media);
            }
            if($this->request->getFile('surat_tugas') != ''){
                $this->moveAndSaveFile('surat_tugas', $id_media);
            }
            if($this->request->getFile('ktp_pimpinan') != ''){
                $this->moveAndSaveFile('ktp_pimpinan', $id_media);
            }
            if($this->request->getFile('pas_photo') != ''){
                $this->moveAndSaveFile('pas_photo', $id_media);
            }
            if($this->request->getFile('foto_kantor') != ''){
                $this->moveAndSaveFile('foto_kantor', $id_media);
            }
            if($this->request->getFile('struktur_redaksi') != ''){
                $this->moveAndSaveFile('struktur_redaksi', $id_media);
            }
            if($this->request->getFile('surat_izin_siaran') != ''){
                $this->moveAndSaveFile('surat_izin_siaran', $id_media);
            }

            return redirect()->to(site_url('upload_berkas'))->with('success', 'Berkas Berhasil Diubah');
        } else {

            return redirect()->to(site_url('upload_berkas'))->with('error', 'Berkas Gagal Diubah');
        }
    }

    private function moveAndSaveFile($fileKey, $id_media){
        $berkasModel = new MUploadBerkas();
        $file = $this->request->getFile($fileKey);

        if($file->isValid()){
            $previousFile = $berkasModel->getBerkas($id_media)->$fileKey;

            $randomName = $file->getRandomName();

            $file->move('uploads/berkas', $randomName);
            
            $data = [
                $fileKey => $randomName
            ];

            $this->db->table('tb_berkas')->where('id_media', $id_media)->update($data);

            if($previousFile && file_exists('uploads/berkas/'.$previousFile)){
                unlink('uploads/berkas/'.$previousFile);
            }
        }
    }
}