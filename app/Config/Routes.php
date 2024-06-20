<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->get('/auth/logout', 'Auth::logout');
$routes->post('/auth/loginProccess', 'Auth::loginProccess');
$routes->post('/auth/registerProccess', 'Auth::registerProccess');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/profile_media', 'ProfileMedia::index');
$routes->post('/profile_media/update', 'ProfileMedia::update');

$routes->get('/list_profile_media', 'ListProfileMedia::index');
$routes->get('/list_profile_media/detail/(:num)', 'ListProfileMedia::detail/$1');
$routes->post('/list_profile_media/active/(:num)', 'ListProfileMedia::active/$1');
$routes->post('/list_profile_media/delete/(:num)', 'ListProfileMedia::deleteAkun/$1'); 

$routes->get('/upload_berkas', 'UploadBerkas::index');
$routes->post('/upload_berkas/prosesUpdateBerkas', 'UploadBerkas::prosesUpdateBerkas');

$routes->get('/validasi_berkas', 'ValidasiBerkas::index');
$routes->get('/validasi_berkas/detail/(:num)', 'ValidasiBerkas::detailBerkas/$1');
$routes->post('/validasi_berkas/prosesValidasi/(:num)', 'ValidasiBerkas::prosesValidasi/$1');

$routes->get('/pengajuan_kerja_sama', 'PengajuanKerjaSama::index');
$routes->get('/pengajuan_kerja_sama/tambah_pengajuan_kerjasama', 'PengajuanKerjaSama::tambah_pengajuan_kerjasama');
$routes->post('/pengajuan_kerja_sama/insertPengajuanKerjaSama', 'PengajuanKerjaSama::insertPengajuanKerjaSama');
$routes->get('/pengajuan_kerja_sama/ubah_pengajuan_kerjasama/(:num)', 'PengajuanKerjaSama::ubah_pengajuan_kerjasama/$1');
$routes->post('/pengajuan_kerja_sama/updatePengajuanKerjaSama/(:num)', 'PengajuanKerjaSama::updatePengajuanKerjaSama/$1');
$routes->post('/pengajuan_kerja_sama/deletePengajuanKerjaSama/(:num)', 'PengajuanKerjaSama::deletePengajuanKerjaSama/$1');

$routes->get('/perjanjian_kerja_sama', 'PerjanjianKerjaSama::index');
$routes->get('/perjanjian_kerja_sama/printPerjanjianKerjaSama/(:num)', 'PerjanjianKerjaSama::printPerjanjianKerjaSama/$1');
$routes->get('/perjanjian_kerja_sama/printKuitansiPKS/(:num)', 'PerjanjianKerjaSama::printKuitansiPKS/$1');

$routes->get('/daftar_berita', 'DaftarBerita::index');
$routes->get('/daftar_berita/tambah_berita', 'DaftarBerita::tambah_berita');
$routes->post('/daftar_berita/insertBerita', 'DaftarBerita::insertBerita');
$routes->get('/daftar_berita/ubah_berita/(:num)', 'DaftarBerita::ubah_berita/$1');
$routes->post('/daftar_berita/updateBerita/(:num)', 'DaftarBerita::updateBerita/$1');
$routes->post('/daftar_berita/deleteBerita/(:num)', 'DaftarBerita::deleteBerita/$1');

$routes->get('/daftar_berita_kontribusi', 'DaftarBeritaAdmin::index');
$routes->get('/daftar_berita_kontribusi/(:num)', 'DaftarBeritaAdmin::list_berita/$1');
$routes->get('/daftar_berita_kontribusi/all', 'DaftarBeritaAdmin::list_berita_all');

$routes->get('/daftar_berita_wartawan', 'DaftarBeritaAdmin::daftar_berita_wartawan');
$routes->get('/daftar_berita_wartawan/tambah_berita_wartawan', 'DaftarBeritaAdmin::tambah_berita_wartawan');
$routes->post('/daftar_berita_wartawan/insertBerita', 'DaftarBeritaAdmin::insertBerita');
$routes->get('/daftar_berita_wartawan/ubah_berita/(:num)', 'DaftarBeritaAdmin::ubah_berita_wartawan/$1');
$routes->post('/daftar_berita_wartawan/updateBerita/(:num)', 'DaftarBeritaAdmin::updateBerita/$1');
$routes->post('/daftar_berita_wartawan/deleteBerita/(:num)', 'DaftarBeritaAdmin::deleteBerita/$1');

$routes->get('/kontribusi_wartawan', 'KontribusiWartawan::index');
$routes->get('/kontribusi_wartawan/tambah_wartawan', 'KontribusiWartawan::tambah_wartawan');
$routes->post('/kontribusi_wartawan/addWartawan', 'KontribusiWartawan::addWartawan');
$routes->get('/kontribusi_wartawan/ubah_wartawan/(:num)', 'KontribusiWartawan::ubahWartawan/$1');
$routes->post('/kontribusi_wartawan/updateWartawan/(:num)', 'KontribusiWartawan::updateWartawan/$1');
$routes->post('/kontribusi_wartawan/deleteWartawan/(:num)', 'KontribusiWartawan::deleteWartawan/$1');
$routes->get('/kontribusi_wartawan/print_kuitansi_wartawan/(:num)', 'KontribusiWartawan::print_kuitansi_wartawan/$1');
$routes->get('/kontribusi_wartawan/print_kuitansi_bulanan', 'KontribusiWartawan::print_kuitansi_bulanan');

$routes->get('/kelola_dkisp', 'DKISP::index');
$routes->get('/kelola_dkisp/edit_dkisp/(:num)', 'DKISP::edit_dkisp/$1');
$routes->post('/kelola_dkisp/prosesEditDkisp/(:num)', 'DKISP::prosesEditDkisp/$1');