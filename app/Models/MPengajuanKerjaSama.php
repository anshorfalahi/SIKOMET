<?php

namespace App\Models;

use CodeIgniter\Model;

class MPengajuanKerjaSama extends Model
{
    protected $table            = 'tb_pks';
    protected $primaryKey       = 'id_pks';
    protected $allowedFields    = ['id_media', 'masa_pks', 'masa_jangka_pks', 'tarif_pks', 'minimal_berita', 'jenis_berita', 'status_ajuan'];

    public function insertPengajuanKerjaSama($data)
    {
        $this->insert($data);
    }

    public function getPengajuanKerjaSama($id_media)
    {
        $builder = $this->db->table('tb_pks');
        $builder->select('*');
        $builder->join('tb_profile_media', 'tb_profile_media.id_media = tb_pks.id_media');
        $builder->where('tb_pks.id_media', $id_media);
        $builder->orderBy('tb_pks.id_pks', 'DESC');
        return $builder->get();
    }

    public function getPengajuanKerjaSamaJoin()
    {
        $builder = $this->db->table('tb_pks');
        $builder->select('*');
        $builder->join('tb_profile_media', 'tb_profile_media.id_media = tb_pks.id_media');
        $builder->orderBy('tb_pks.id_pks', 'DESC');
        return $builder->get();
    }

    public function printPengajuanKerjaSamaJoin($id_media)
    {
        $builder = $this->db->table('tb_pks');
        $builder = $this->db->table('tb_dkisp');
        $builder->select('*');
        $builder->join('tb_profile_media', 'tb_profile_media.id_media = tb_pks.id_media');
        $builder->where('tb_pks.id_media', $id_media);
        $builder->orderBy('tb_pks.id_pks', 'DESC');
        return $builder->get();
    }

}