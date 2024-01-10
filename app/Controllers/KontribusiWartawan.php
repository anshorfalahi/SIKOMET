<?php

namespace App\Controllers;

use App\Models\MWartawan;
use App\Models\MDKISP;
use App\Controllers\BaseController;

class KontribusiWartawan extends BaseController
{
    public function index()
    {
        $model = new MWartawan();
        $wartawan = $model->findAll();

        $data=[
            'title' => 'Kontribusi Wartawan',
            'active' => 'kontribusi_wartawan',
            'wartawan' => $wartawan
        ];

        // print("<pre>" . print_r($data, true) . "</pre>");
        return view('admin/kontribusi_wartawan', $data);
    }

    public function tambah_wartawan()
    {
        $data=[
            'title' => 'Tambah Wartawan',
            'active' => 'kontribusi_wartawan'
        ];

        return view('admin/tambah_wartawan', $data);
    }

    public function addWartawan()
    {
        $validation =  \Config\Services::validation();

        $validation->setRules([
            'nama_wartawan' => 'required',
            'no_hp' => 'required',
            'no_rek' => 'required',
            'berkas' => 'uploaded[berkas]|max_size[berkas,5120]'
        ]);

        if ($validation->withRequest($this->request)->run() == FALSE) {
            session()->setFlashdata('error', 'Data gagal ditambahkan');
            return redirect()->to('/kontribusi_wartawan/tambah_wartawan')->withInput();
        } else {
            $fileBerkas = $this->request->getFile('berkas');
            $namaBerkas = $fileBerkas->getRandomName();
            $fileBerkas->move('berkas', $namaBerkas);

            $wartawan = new MWartawan();

            $wartawan->insert([
                'nama_wartawan' => $this->request->getPost('nama_wartawan'),
                'no_hp' => $this->request->getPost('no_hp'),
                'no_rek' => $this->request->getPost('no_rek'),
                'berkas' => $namaBerkas
            ]);

            session()->setFlashdata('success', 'Data berhasil ditambahkan');

            return redirect()->to('/kontribusi_wartawan');
        }
    }

    public function print_kuitansi_wartawan($id_wartawan)
    {
        $wartawan = new MWartawan();
        $dkisp = new MDKISP();

        $data = [
            'wartawan' => $wartawan->find($id_wartawan),
            'dkisp' => $dkisp->findAll()
        ];
        // print("<pre>" . print_r($data, true) . "</pre>");

        return view('admin/print_kuitansi_wartawan', $data);
    }
}
