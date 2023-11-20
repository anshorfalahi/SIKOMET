<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MProfileMedia;
use App\Models\MAuth;

class ListProfileMedia extends BaseController
{
    public function index()
    {
        $model = new MProfileMedia();
        $data = [
            'title' => 'List Profile Media',
            'active' => 'list_profile_media',
            'profile_media' => $model->getAllProfileMedia()
        ];  
        
        return view('admin/list_profile_media', $data);
    }

    public function detail($id)
    {
        $model = new MProfileMedia();
        $data = [
            'title' => 'Detail Profile Media',
            'active' => 'list_profile_media',
            'profile_media' => $model->getProfileMediaById($id)
        ];  
        
        // print_r($data['profile_media']);
        return view('admin/detail_profile_media', $data);
    }

    public function active($id)
    {
        $builder = $this->db->table('tb_profile_media');
        $status = $builder->getWhere(['id_media' => $id])->getRowArray();
        if($status['status'] == '1'){
            $builder->update(['status' => '0'], ['id_media' => $id]);
        }else{
            $builder->update(['status' => '1'], ['id_media' => $id]);
        }
        return redirect()->to(site_url('list_profile_media'));
    }

    public function deleteAkun($id_media){
        $model = new MProfileMedia();
        $id_akun = $model->getProfileMediaById($id_media)['id_akun'];
        $model->deleteProfileMedia($id_media);
        $model = new MAuth();
        $model->deleteAkun($id_akun);

        return redirect()->to(site_url('list_profile_media'));
    }
}
