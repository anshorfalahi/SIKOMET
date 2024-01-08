<?php

namespace App\Controllers;
use App\Models\MProfileMedia;
use App\Models\MDaftarBerita;
use App\Models\MPengajuanKerjaSama;

class Dashboard extends BaseController
{ 
    public function index()
    {
        $id_akun = session()->get('id_akun');
        $builder = $this->db->table('tb_profile_media');
        $id_media = null;
        if (session()->get('level') == 'media') {
            $id_media = $builder->where('id_akun', $id_akun)->get()->getRow()->id_media;
        }

        $totalMedia = count((new MProfileMedia())->getAllProfileMedia());
        $totalMediaAktif = count((new MProfileMedia())->getAllProfileMediaAktif());
        $totalBeritaPerBulan = (new MDaftarBerita())->getCountBeritaByMonth();
        $totalBeritaPerTahun = (new MDaftarBerita())->getCoutBeritaByYear();
        $beritaPerMedia = (new MDaftarBerita())->getBeritaByMonth();
        $targetBeritaMedia = (new MPengajuanKerjaSama())->getNamaMediaMinimalBerita();
        $totalBeritaMediaPerTahun = (new MDaftarBerita())->getBeritaByYear();

        $totalBeritaMedia = (new MDaftarBerita())->getJumlahBeritaPerBulan($id_media);
        //ubah format bulan dari angka ke nama bulan
        foreach ($totalBeritaMedia as $key => $value) {
            $totalBeritaMedia[$key]['bulan'] = $this->bulanIndo($value['bulan']);
        }
        $totalBerita1MediaPerTahun = (new MDaftarBerita())->getJumlahBeritaPerTahun($id_media);
        $totalBerita1MediaPerBulan = (new MDaftarBerita())->getJumlahBeritaPerBulanSekarang($id_media);

        $dataAdmin = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'totalMedia' => $totalMedia,
            'totalMediaAktif' => $totalMediaAktif,
            'totalBeritaPerBulan' => $totalBeritaPerBulan,
            'totalBeritaPerTahun' => $totalBeritaPerTahun,
            'beritaPerMedia' => $beritaPerMedia,
            'targetBeritaMedia' => $targetBeritaMedia,
            'totalBeritaMediaPerTahun' => $totalBeritaMediaPerTahun,
        ];

        $dataMedia = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'totalBeritaMedia' => $totalBeritaMedia,
            'totalBerita1MediaPerTahun' => $totalBerita1MediaPerTahun,
            'totalBerita1MediaPerBulan' => $totalBerita1MediaPerBulan,
        ];

        // print("<pre>" . print_r($dataMedia, true) . "</pre>");
        if (session()->get('level') == 'admin') {
            return view('admin/dashboard', $dataAdmin);
        }else if(session()->get('level') == 'media'){
            return view('media/dashboard', $dataMedia);
        }
    }


    private function bulanIndo($bulan)
    {
        switch ($bulan) {
            case 1:
                return 'Januari';
                break;
            case 2:
                return 'Februari';
                break;
            case 3:
                return 'Maret';
                break;
            case 4:
                return 'April';
                break;
            case 5:
                return 'Mei';
                break;
            case 6:
                return 'Juni';
                break;
            case 7:
                return 'Juli';
                break;
            case 8:
                return 'Agustus';
                break;
            case 9:
                return 'September';
                break;
            case 10:
                return 'Oktober';
                break;
            case 11:
                return 'November';
                break;
            case 12:
                return 'Desember';
                break;

            default:
                return 'Bulan tidak valid';
                break;
        }
    }   
}
