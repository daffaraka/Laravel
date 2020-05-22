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
    return view('dashboard');
});

Auth::routes();
Route::resource("/puskesmas", "PuskesmasController")->middleware("web");


// Login & Register
Route::get("/login", "LoginController@showLoginForm")->name("login");
Route::post("/puskesmas/login", "LoginController@login")->name("login.login");

Route::get("/logout","LoginController@logout")->name("logout");


// Search
Route::get('/search',"PuskesmasController@search")->name("content.search");


//
// Route::get('/profile' "")
Route::get('/pengguna', "PuskesmasController@pengguna")->name("content.pengguna");
// Route::get("/pengguna/{id}/edit", "EditProfilController@edit")->name("pengguna.edit");
// Route::post("/pengguna/update", "EditProfilController@updateprofil")->name("pengguna.update");


// Index Dashboard,CRUD
Route::get('/puskesmas-pasien',"PuskesmasController@index")->name("content.index");
Route::get('/puskesmas-pasien/create',"PuskesmasController@create")->name("content.create");
Route::post('/puskesmas-pasien',"PuskesmasController@masukkan")->name("content.masukkan");
Route::get("/puskesmas-pasien/{id}/detail", "PuskesmasController@show")->name("content.show");
Route::get("/puskesmas-pasien/{id}/edit", "PuskesmasController@edit")->name("content.edit");
Route::get("/puskesmas-pasien/{id}/tindakan", "PuskesmasController@tindakan")->
	name("content.tindakan");
Route::post("/puskesmas-pasien/{id}/update", "PuskesmasController@update")->name("content.update");
Route::post("/puskesmas-pasien/{id}/updatetindakan", "PuskesmasController@updatetindakan")->name("content.updatetindakan");
Route::get("/puskesmas-pasien/{id}/delete", "PuskesmasController@destroy")->
	name("content.destroy");
	

// Kirim Email
Route::get('/kirim-email', 'PuskesmasController@email');

Route::get('/home', 'HomeController@index')->name('home');


// Export Excel
Route::get('/puskesmas-pasien/export', 'PuskesmasController@export_excel');
