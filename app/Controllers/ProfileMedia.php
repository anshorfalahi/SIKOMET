<?php

namespace App\Controllers;
use App\Models\MProfileMedia;


class ProfileMedia extends BaseController
{
    public function index(){
        $builder = $this->db->table('tb_profile_media');
        $query = $builder->where('id_akun', session()->get('id_akun'))->get();
        $data=[
            'title' => 'Profile Media',
            'active' => 'profile_media',
            'profile_media' => $query->getRow()
        ];

        return view('media/profile', $data);
    }

    public function update(){
        $model = new MProfileMedia();

        $id_akun = session()->get('id_akun');
        $logo_media = $this->request->getFile('logo_media');
        if($logo_media == ''){
            $data = [
                'nama_media' => $this->request->getPost('nama_media'),
                'nama_instansi' => $this->request->getPost('nama_instansi'),
                'link_media' => $this->request->getPost('link_media'),
                'jenis_media' => $this->request->getPost('jenis_media'),
                'penanggung_jawab' => $this->request->getPost('penanggung_jawab'),
                'jabatan' => $this->request->getPost('jabatan'),
                'no_hp' => $this->request->getPost('no_hp'),
                'alamat' => $this->request->getPost('alamat')
            ];
            $builder = $this->db->table('tb_profile_media');
            $builder->where('id_akun', $id_akun);
            $builder->update($data);

            return redirect()->to(site_url('profile_media'))->with('success', 'Data Berhasil Diubah');
        }

        //validation logo ratio 
        $logo_widht = getimagesize($logo_media)[0];
        $logo_height = getimagesize($logo_media)[1];

        if($logo_widht != $logo_height){
            return redirect()->to(site_url('profile_media'))->with('error', 'Logo harus berbentuk persegi (1:1)');
        }

        //validation logo pixel
        $validation_logo = $this->validate([
            'logo_media' => [
                'rules' => 'max_dims[logo_media,1024,1024]',
            ]
        ]);

        if(!$validation_logo){
            return redirect()->to(site_url('profile_media'))->with('error', 'Logo tidak boleh lebih dari 1024x1024 pixel');
        }else{
            $logo_media->move('uploads/logo_media');
        }


        //find logo old and delete
        $query = $this->db->table('tb_profile_media');
        $query->where('id_akun', $id_akun);
        $logo_old = $query->get()->getRow()->logo_media;
        if($logo_old != 'blank.png'){
            unlink('uploads/logo_media/'.$logo_old);
        }

        
        //move logo new
        $data = [
            'nama_media' => $this->request->getPost('nama_media'),
            'nama_instansi' => $this->request->getPost('nama_instansi'),
            'link_media' => $this->request->getPost('link_media'),
            'jenis_media' => $this->request->getPost('jenis_media'),
            'penanggung_jawab' => $this->request->getPost('penanggung_jawab'),
            'jabatan' => $this->request->getPost('jabatan'),
            'no_hp' => $this->request->getPost('no_hp'),
            'alamat' => $this->request->getPost('alamat'),
            'logo_media' => $logo_media->getName()
        ];
        $builder = $this->db->table('tb_profile_media');
        $builder->where('id_akun', $id_akun);
        $builder->update($data);

        return redirect()->to(site_url('profile_media'))->with('success', 'Data Berhasil Diubah');
    }
}