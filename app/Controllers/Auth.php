<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MAuth;
use App\Models\MProfileMedia;
use App\Models\MUploadBerkas;

class Auth extends BaseController
{
    public function login(){
        // if (session()->get('logged_in') == TRUE) {
        //     return redirect()->to('dashboard');
        // }
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function loginProccess(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new MAuth();
        $data = $model->validateUser($username, $password);

        if ($data) {
            $session = session();
            $session->set([
                'id_akun' => $data['id_akun'],
                'username' => $data['username'],
                'level' => $data['level'],
                'logged_in' => TRUE
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('auth/login')->with('error', 'Invalid username or password');
        }
    }

    public function registerProccess(){
        $nama_media = $this->request->getPost('nama_media');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $jenis_media = $this->request->getPost('jenis_media');
        $level = 'media';

        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'level' => $level
        ];
        $model = new MAuth();
        $model->registerUser($data);

        $id_akun = $model->getIdAkunInRegister($username);
        $model2 = new MProfileMedia();
        $data2 = [
            'id_akun' => $id_akun['id_akun'],
            'nama_media' => $nama_media,
            'jenis_media' => $jenis_media,
            'logo_media' => 'blank.png'
        ];
        $model2->insertProfileMedia($data2);

        $modelBerkas = new MUploadBerkas();
        $id_media = $this->db->table('tb_profile_media')->where('id_akun', $id_akun['id_akun'])->get()->getRow()->id_media;
        $dataBerkas = [
            'id_media' => $id_media,
        ];
        $modelBerkas->insert($dataBerkas);

        return redirect()->to('auth/login')->with('success', 'Register success, please login');
    
    }

}
