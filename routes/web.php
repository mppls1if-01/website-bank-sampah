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

Route::get('/', function () {
    return view('user.template.index');
});

// Route::get('/tukar', function () {
//     return view('user.template.tukar');
// });

Route::get('/tentang', function () {
    return view('user.template.default');
});

Route::get('/NonOrganik', function () {
    return view('user.template.NonOrganik');
});

Route::get('/elektronik', function () {
    return view('user.template.elektronik');
});

Route::get('/RKupon', function () {
    return view('user.template.RiwayatKupon');
});
Route::get('firebase', 'FirebaseController@pushSet');
Route::get('Dashboard','DashboardController@index')->name('dashboard');
Route::get('login','LoginController@login')->name('login');
Route::get('profil','ProfilController@profil')->name('profil');
Route::get('signup','SignupController@signup')->name('signup');
Route::get('logout','LogoutController@logout')->name('logout');
Route::post('login','LoginController@loginAuth')->name('login');
Route::post('signup','SignupController@signupAuth')->name('signup');