<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// penyakit
$route['penyakit/delete/(:any)']                 = 'penyakit/delete/$1';
$route['penyakit/(:any)/edit']                   = 'penyakit/edit/$1';
$route['penyakit/create']                        = 'penyakit/create';
// $route['penyakit/delete_penyakit_gejala/(:any)'] = 'penyakit/delete_penyakit_gejala/$1';
// $route['penyakit/relasi-gejala']                 = 'penyakit/relasi_gejala';
// $route['penyakit/create_penyakit_gejala']        = 'penyakit/create_penyakit_gejala';
$route['penyakit']                               = 'penyakit';
$route['penyakit/(:any)']                        = 'penyakit/show/$1';

// penyakit-gejala
$route['penyakit/delete_penyakit_gejala/(:any)'] = 'penyakit_gejala/delete/$1';
$route['penyakit_gejala']                        = 'penyakit_gejala';
$route['penyakit/create_penyakit_gejala']        = 'penyakit_gejala/create';

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


$route['default_controller']   = 'home/dashboard';
$route['admin/(:any)']         = 'home/view/$1';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;
