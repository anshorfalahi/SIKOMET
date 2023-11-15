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
}
