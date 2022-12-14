<?php

use App\Models\Laporan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelanggaranController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [SiswaController::class,'index'])->name('siswa');
// Route::get('/data-siswa', [SiswaController::class,'index'])->name('data-siswa');
// Route::get('/create-siswa',[SiswaController::class, 'create'])->name('create-siswa');
  
// Route::get('/', [SiswaController::class,'index']);

// Route::get('/', function(){
//     return view('tampilan.index');
// });

// Route::resource('/', SiswaController::class);
// Route::get('siswa/create', [SiswaController::class, 'create']);
// Route::post('/siswa',[SiswaController::class, 'index']);

//siswa
Route::get('/siswa', [SiswaController::class,'siswa'])->name('siswa');
Route::get('/tambah_siswa', [FormController::class,'form_siswa'])->name('tambah_siswa');
Route::post('/form_siswa', [FormController::class,'store'])->name('form_siswa');
Route::get('/tampilkandatasiswa/{id}', [SiswaController::class,'tampilkandatasiswa'])->name('tampilkandatasiswa');
Route::post('/updatedatasiswa/{id}', [SiswaController::class,'updatedatasiswa'])->name('updatedatasiswa');
Route::get('/deletesiswa/{id}', [SiswaController::class,'delete'])->name('deletesiswa');
Route::get('/detailsiswa/{id}', [SiswaController::class, 'formdetail'])->name('detailsiswa');

//pelanggaran
Route::get('/datapelanggaran', [PelanggaranController::class,'datapelanggaran'])->name('datapelanggaran');
Route::get('/tambah_pelanggaran', [PelanggaranController::class,'tambah_pelanggaran'])->name('tambah_pelanggaran');
Route::post('/insertpelanggaran', [PelanggaranController::class,'insertpelanggaran'])->name('insertpelanggaran');
Route::get('/tampilkandatapelanggaran/{id}', [PelanggaranController::class,'tampilkandatapelanggaran'])->name('tampilkandatapelanggaran');
Route::post('/updatedatapelanggaran/{id}', [PelanggaranController::class,'updatedatapelanggaran'])->name('updatedatapelanggaran');
Route::get('/deletepelanggaran/{id}', [PelanggaranController::class,'delete'])->name('deletepelanggaran');

//guru
Route::get('/guru', [GuruController::class,'index'])->name('guru');
Route::get('/tambah_guru', [GuruController::class,'tambah_guru'])->name('tambah_guru');
Route::post('/insertguru', [GuruController::class,'formguru'])->name('insertguru');
Route::get('/tampilkandataguru/{id}', [GuruController::class,'tampilkandataguru'])->name('tampilkandataguru');
Route::post('/updatedataguru/{id}', [GuruController::class,'updatedataguru'])->name('updatedataguru');
Route::get('/deleteguru/{id}', [GuruController::class,'delete'])->name('deleteguru');
Route::get('/detailguru/{id}', [GuruController::class,'detailguru'])->name('detailguru');

//login
Route::get('/login', function(){
    return View('tampilan.signin');
});
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

//laporan
Route::get('/getdatalaporan', [LaporanController::class, 'getlaporan'])->name('getdatalaporan');
Route::get('/tambah_laporan', [LaporanController::class, 'tambah_laporan'])->name('tambah_laporan');
Route::post('/insert_laporan', [LaporanController::class, 'insert_laporan'])->name('insert_laporan');
Route::get('/deletelaporaln/{id}', [LaporanController::class, 'deletelaporan'])->name('deletelaporan');