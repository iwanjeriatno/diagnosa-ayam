<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// login
$route['logout']         = 'login/logout';
$route['login']          = 'login';
$route['login/login']    = 'login/login';

// ==============================================================================================
// pakar
// ==============================================================================================
$route['dashboard'] = 'pakar/dashboard';
$route['home']      = 'pengguna/home';

// diagnosis
$route['diagnosis']               = 'diagnosis/diagnosa';
$route['diagnosis/hasil']         = 'diagnosis/hasil_diagnosa';
$route['diagnosis/laporan']       = 'diagnosis/laporan';
$route['diagnosis/gejala/(:any)'] = 'diagnosis/diagnosa_gejala';

$route['diagnosis/cek-penyakit']         = 'diagnosis/cekPenyakit';
$route['diagnosis/gejala/(:any)/(:any)'] = 'diagnosis/diagnosa_gejala';
$route['diagnosis/cek-gejala']           = 'diagnosis/cekGejala';

// penyakit
$route['penyakit/delete/(:any)']                 = 'penyakit/delete/$1';
$route['penyakit/(:any)/edit']                   = 'penyakit/edit/$1';
$route['penyakit/create']                        = 'penyakit/create';
$route['penyakit/delete_penyakit_gejala/(:any)'] = 'penyakit/delete_penyakit_gejala/$1';
$route['penyakit/relasi-gejala']                 = 'penyakit/relasi_gejala';
$route['penyakit/create_penyakit_gejala']        = 'penyakit/create_penyakit_gejala';
$route['penyakit']                               = 'penyakit';
$route['penyakit/(:any)']                        = 'penyakit/show/$1';

// gejala
$route['gejala/delete/(:any)'] = 'gejala/delete/$1';
$route['gejala/(:any)/edit']   = 'gejala/edit/$1';
$route['gejala/create']        = 'gejala/create';
$route['gejala/relasi-solusi'] = 'gejala/relasi_solusi';
$route['gejala']               = 'gejala';
$route['gejala/(:any)']        = 'gejala/show/$1';

// solusi
$route['solusi/delete/(:any)'] = 'solusi/delete/$1';
$route['solusi/(:any)/edit']   = 'solusi/edit/$1';
$route['solusi/create']        = 'solusi/create';
$route['solusi']               = 'solusi';
$route['solusi/(:any)']        = 'solusi/show/$1';

// base-pengetahuan
$route['rule/delete/(:any)'] = 'rule/delete/$1';
$route['rule/(:any)/edit']   = 'rule/edit/$1';
$route['rule/create']        = 'rule/create';
$route['rule']               = 'rule';
$route['rule/(:any)']        = 'rule/show/$1';

// users
$route['users/delete/(:any)'] = 'users/delete/$1';
$route['users/(:any)/edit']   = 'users/edit/$1';
$route['users/create']        = 'users/create';
$route['users']               = 'users';
$route['users/(:any)']        = 'users/show/$1';

// laporan
$route['laporan/delete/(:any)'] = 'laporan/delete/$1';
$route['laporan/(:any)/edit']   = 'laporan/edit/$1';
$route['laporan/create']        = 'laporan/create';
$route['laporan']               = 'laporan';
$route['laporan/(:any)']        = 'laporan/show/$1';


$route['default_controller']   = 'login';
$route['admin/(:any)']         = 'home/view/$1';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;
