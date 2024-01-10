<?php

namespace App\Controllers;
use App\Models\MDKISP;

use App\Controllers\BaseController;

class DKISP extends BaseController
{
    public function index()
    { 
        $dkisp = new MDKISP();
        $data = [
            'title' => 'Kelola DKISP',
            'active' => 'kelola_dkisp',
            'dkisp' => $dkisp->findAll()
        ];

        return view('admin/kelola_dkisp', $data);
    }

    public function edit_dkisp($id)
    {
        $dkisp = new MDKISP();
        $data = [
            'title' => 'Edit DKISP',
            'active' => 'kelola_dkisp',
            'dkisp' => $dkisp->find($id)
        ];

        return view('admin/edit_dkisp', $data);
    }

    public function prosesEditDkisp($id)
    {
        $dkisp = new MDKISP();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nip' => $this->request->getPost('nip'),
            'keterangan' => $this->request->getPost('keterangan')
        ];

        $dkisp->update($id, $data);
        session()->setFlashdata('success', 'Data ' . $data['nama'] . ' berhasil diubah');

        return redirect()->to(base_url('kelola_dkisp'));
    }
}
