<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('user.template.index');
});

Route::get('/tukar', function () {
    return view('user.template.tukar');
});

Route::get('/tentang', function () {
    return view('user.template.default');
});

Route::get('/NonOrganik', function () {
    return view('user.template.NonOrganik');
});

Route::get('/elektronik', function () {
    return view('user.template.elektronik');
});

Route::get('/Keranjang', function () {
    return view('user.template.Keranjang');
});

//route backend
Route::get('login','LoginController@login')->name('login');
Route::get('firebase', 'FirebaseController@pushSet');
Route::group(['middleware' => ['author']], function(){
    
});
Route::get('Dashboard','DashboardController@index')->name('dashboard');
Route::get('profil','ProfilController@profil')->middleware('auth')->name('profil');
Route::get('signup','SignupController@signup')->name('signup');
Route::get('logout','LogoutController@logout')->middleware('auth')->name('logout');
Route::get('admin','AdminController@index')->name('admin');
Route::get('admin/kupon','MasterKuponController@kupon')->name('kupon');
Route::get('admin/riwayatkupon','MasterKuponController@riwayatKupon')->name('riwayatkupon');
Route::get('admin/profil','AdminController@profil');
Route::get('admin/sampah','MasterSampahController@sampah')->name('sampah');

Route::post('login','LoginController@loginAuth')->name('login');
Route::post('signup','SignupController@signupAuth')->name('signup');
Route::post('admin/kupon','MasterKuponController@tambahKupon')->name('tambahKupon');
Route::post('admin/sampah','MasterSampahController@editAnorganik')->name('anorganik');
Route::post('admin/sampahelektronik','MasterSampahController@editElektronik')->name('elektronik');
Route::post('admin/profil','AdminController@editProfil')->name('adminprofil');