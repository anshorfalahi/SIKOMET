<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MAuth;

class Auth extends BaseController
{
    public function login(){
        if (session()->get('logged_in') == TRUE) {
            return redirect()->to('dashboard');
        }
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
                'username' => $data['username'],
                'level' => $data['level'],
                'logged_in' => TRUE
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->to('auth/login')->with('error', 'Invalid username or password');
        }
    }

}
