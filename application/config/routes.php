<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
	Prefix Admin URL
*/

$route['admin/main/slideshow'] = 'admin/slideshow';
$route['admin/main/events'] = 'admin/events';

$route['admin/about/history'] = 'admin/history';
$route['admin/about/pengurus'] = 'admin/pengurus';
$route['admin/about/korda_komsat'] = 'admin/korda_komsat';

$route['admin/jurnal/kategori'] = 'admin/jurnal_kategori';
$route['admin/jurnal/konten'] = 'admin/jurnal';
$route['admin/jurnal/konten/add'] = 'admin/jurnal_konten_add';
$route['admin/jurnal/konten/(:any)'] = 'admin/jurnal_konten_edit/$1';

$route['admin/jurnal/tambah_gambar'] = 'admin/jurnal_galery_tambah';
$route['admin/jurnal/hapus_gambar'] = 'admin/jurnal_galery_hapus';

$route['admin/panduanstudi/beasiswa'] = 'admin/beasiswa';

$route['admin/panduanstudi/beasiswa/add'] = 'admin/beasiswa_konten_add';
$route['admin/panduanstudi/beasiswa/(:any)'] = 'admin/beasiswa_konten_edit/$1';


$route['admin/panduanstudi/kuliahdijepang'] = 'admin/kuliahdijepang';

$route['admin/panduanstudi/kuliahdijepang/add'] = 'admin/kuliahdijepang_konten_add';
$route['admin/panduanstudi/kuliahdijepang/(:any)'] = 'admin/kuliahdijepang_konten_edit/$1';

$route['admin/kesekretariatan/adart'] = 'admin/adart';
$route['admin/kesekretariatan/kongres'] = 'admin/kongres';

$route['admin/kesekretariatan/otsukaresama'] = 'admin/otsukaresama';
$route['admin/kesekretariatan/otsukaresama/(:any)'] = 'admin/otsukaresama_konten/$1';

$route['admin/kesekretariatan/kalender'] = 'admin/kalender';
$route['admin/kesekretariatan/kalender/add'] = 'admin/kalender_ui_add';
$route['admin/kesekretariatan/kalender/(:any)'] = 'admin/kalender_ui_edit/$1';

$route['jurnal/(:any)'] = 'jurnal/kategori/$1';
$route['jurnal/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'jurnal/artikel/$1/$2/$3/$4/$5';

$route['panduanstudi/beasiswa/(:any)'] = 'panduanstudi/beasiswa_konten/$1';

$route['kesekretariatan/kalender/(:any)/(:any)/(:any)/(:any)'] = 'kesekretariatan/kegiatan/$1/$2/$3/$4';

$route['kesekretariatan/otsukaresama/(:any)'] = 'kesekretariatan/otsukaresama_konten/$1';


