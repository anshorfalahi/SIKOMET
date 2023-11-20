<?php

namespace App\Models;

use CodeIgniter\Model;

class MAuth extends Model
{
    protected $table            = 'tb_akun';
    protected $primaryKey       = 'id_akun';
    protected $allowedFields    = [ 'username','password','level'];

    public function validateUser($username, $password)
    {
        $user = $this->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }

    public function registerUser($data)
    {
        $this->insert($data);
    }

    public function getIdAkunInRegister($username)
    {
        $query = $this->select('id_akun')->where('username', $username)->get();
        return $query->getRowArray();
    }

    public function deleteAkun($id_akun)
    {
        $this->delete($id_akun);
    }
}
