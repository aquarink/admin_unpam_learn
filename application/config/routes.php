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
$route['default_controller'] 	= 'mahasiswa_con';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

$route['api/mahasiswa']['GET'] 					= 'ulearnController/getMahasiswa';
$route['api/mahasiswa/(:num)']['GET'] 			= 'Mahasiswa_con/getMahasiswaBy/$1';
$route['api/mahasiswa/insert']['POST'] 			= 'ulearnController/insertMahasiswa';
$route['api/mahasiswa/update']['POST'] 			= 'ulearnController/updateMahasiswa';
$route['api/mahasiswa/delete/(:num)']['GET'] 	= 'ulearnController/deleteMahasiswa/$1';

$route['api/dosen']['GET'] 					= 'ulearnController/getDosen';
$route['api/dosen/(:num)']['GET'] 			= 'ulearnController/getDosenBy/$1';
$route['api/dosen/insert']['POST'] 			= 'ulearnController/insertDosen';
$route['api/dosen/update']['POST'] 			= 'ulearnController/updateDosen';
$route['api/dosen/delete/(:num)']['GET'] 	= 'ulearnController/deleteDosen/$1';

$route['api/matakuliah']['GET'] 				= 'ulearnController/getMatakuliah';
$route['api/matakuliah/(:num)']['GET'] 			= 'ulearnController/getMatakuliahBy/$1';
$route['api/matakuliah/insert']['POST'] 		= 'ulearnController/insertMatakuliah';
$route['api/matakuliah/update']['POST'] 		= 'ulearnController/updateMatakuliah';
$route['api/matakuliah/delete/(:num)']['GET'] 	= 'ulearnController/deleteMatakuliah/$1';

$route['api/kelas']['GET'] 					= 'ulearnController/getKelas';
$route['api/kelas/(:num)']['GET'] 			= 'ulearnController/getKelasBy/$1';
$route['api/kelas/insert']['POST'] 			= 'ulearnController/insertKelas';
$route['api/kelas/update']['POST'] 			= 'ulearnController/updateKelas';
$route['api/kelas/delete/(:num)']['GET'] 	= 'ulearnController/deleteKelas/$1';

$route['api/krs']['GET'] 					= 'ulearnController/getKrs';
$route['api/krs/(:num)']['GET'] 			= 'ulearnController/getKrsBy/$1';
$route['api/krs/insert']['POST'] 			= 'ulearnController/insertKrs';
$route['api/krs/update']['POST'] 			= 'ulearnController/updateKrs';
$route['api/krs/delete/(:num)']['GET'] 		= 'ulearnController/deleteKrs/$1';


// $route['api/mahasiswa/(:num)/(:num)']['GET'] = 'Mahasiswa_con/getMahasiswa/$1/$2';
// $route['api/mahasiswa']['POST'] = 'Mahasiswa_con/saveMahasiswa';
// $route['api/mahasiswa/(:any)']['PUT'] = 'Mahasiswa_con/updateMahasiswa/$1';
// $route['api/mahasiswa/(:any)']['DELETE'] = 'Mahasiswa_con/deleteMahasiswa/$1';