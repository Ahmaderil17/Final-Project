<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$route['blog'] = 'blog'; // daftar blog
$route['blog/post'] = 'blog/post'; // halaman penulisan blog
$route['blog/submit'] = 'blog/submit'; // proses penyimpanan blog
$route['blog/delete/(:any)'] = 'blog/delete/$1'; //proses menghapus blog
$route['blog/edit/(:any)'] = 'blog/edit/$1'; //proses mengedit blog
$route['blog/subedit/(:any)'] = 'blog/subedit/$1';
$route['blog/(:any)'] = 'blog/index/$1'; // baca blog dengan blog_id $1



$route['signin'] = 'user/signin'; // proses login user
$route['signout'] = 'user/signout'; // proses logout user
$route['user/reg'] = 'user/register'; // halaman form registrasi user
$route['user/reg_submit'] = 'user/regsubmit'; // proses registrasi user
$route['login'] = 'user/login'; //login baru
$route['user/(:any)'] = 'user/profil/$1'; // halaman profil user denganuser_id $1



$route ['welcome'] = 'welcome/index';
$route['galeri'] = 'blog/galeri'; //galeri
$route['team'] = 'blog/team'; //team

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
