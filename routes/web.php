<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutesController;
use App\Http\Controllers\BussController;
use App\Http\Controllers\TerminalsController;
use App\Http\Controllers\PenggunasController;
use App\Http\Controllers\PesanansController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
Route::get('/loginuser', [LoginUserController::class, 'loginuser'])->name('loginuser');
Route::post('actionlogin1', [LoginUserController::class, 'actionlogin1'])->name('actionlogin1');
Route::post('actionlogout1', [LoginUserController::class, 'actionlogout1'])->name('actionlogout1');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/process1', [RegisterController::class, 'process1'])->name('process1');


// Show registration form

Route::get('/rute', [RutesController::class, 'index'])->name('rute');
Route::get('/tambahrute', [RutesController::class, 'tambahrute'])->name('tambahrute');
Route::post('/insertdata1', [RutesController::class, 'insertdata1'])->name('insertdata1');
Route::get('/ubahrute/{id_rute}', [RutesController::class, 'ubahrute'])->name('ubahrute');
Route::post('/updatedata1/{id_rute}', [RutesController::class, 'updatedata1'])->name('updatedata1');
Route::get('/deleterute/{id_rute}', [RutesController::class, 'deleterute'])->name('deleterute');
Route::get('/deleteAll2', [RutesController::class, 'deleteAll2'])->name('deleteAll2');
Route::get('/eksporrute', [RutesController::class, 'eksporrute'])->name('eksporrute');

Route::get('/pesanan', [PesanansController::class, 'index'])->name('pesanan');
Route::get('/tambahpesanan', [PesanansController::class, 'tambahpesanan'])->name('tambahpesanan');
Route::post('/insertdata', [PesanansController::class, 'insertdata'])->name('insertdata');
Route::get('/ubahpesanan/{id_pesanan}', [PesanansController::class, 'ubahpesanan'])->name('ubahpesanan');
Route::post('/updatedata/{id_pesanan}', [PesanansController::class, 'updatedata'])->name('updatedata');
Route::get('/deletepesanan/{id_pesanan}', [PesanansController::class, 'deletepesanan'])->name('deletepesanan');
Route::get('/deleteAll4', [PesanansController::class, 'deleteAll4'])->name('deleteAll4');
Route::get('/eksporpesanan', [PesanansController::class, 'eksporpesanan'])->name('eksporpesanan');

Route::get('/pengguna', [PenggunasController::class, 'index'])->name('pengguna');
Route::get('/tambahpengguna', [PenggunasController::class, 'tambahpengguna'])->name('tambahpengguna');
Route::post('/insertdata3', [PenggunasController::class, 'insertdata3'])->name('insertdata3');
Route::get('/ubahpengguna/{id_pengguna}', [PenggunasController::class, 'ubahpengguna'])->name('ubahpengguna');
Route::post('/updatedata3/{id_pengguna}', [PenggunasController::class, 'updatedata3'])->name('updatedata3');
Route::get('/deletepengguna/{id_pengguna}', [PenggunasController::class, 'deletepengguna'])->name('deletepengguna');
Route::get('/deleteAll1', [PenggunasController::class, 'deleteAll1'])->name('deleteAll1');
Route::get('/eksporpengguna', [PenggunasController::class, 'eksporpengguna'])->name('eksporpengguna');

Route::get('/terminal', [TerminalsController::class, 'index'])->name('terminal');
Route::get('/tambahterminal', [TerminalsController::class, 'tambahterminal'])->name('tambahterminal');
Route::post('/insertdata4', [TerminalsController::class, 'insertdata4'])->name('insertdata4');
Route::get('/ubahterminal/{id_terminal}', [TerminalsController::class, 'ubahterminal'])->name('ubahterminal');
Route::post('/updatedata4/{id_terminal}', [TerminalsController::class, 'updatedata4'])->name('updatedata4');
Route::get('/deleteterminal/{id_terminal}', [TerminalsController::class, 'deleteterminal'])->name('deleteterminal');
Route::get('/deleteAll3', [TerminalsController::class, 'deleteAll3'])->name('deleteAll3');
Route::get('/eksporterminal', [TerminalsController::class, 'eksporterminal'])->name('eksporterminal');

Route::get('/bus', [BussController::class, 'index'])->name('bus');
Route::get('/tambahbus', [BussController::class, 'tambahbus'])->name('tambahbus');
Route::post('/insertdata2', [BussController::class, 'insertdata2'])->name('insertdata2');
Route::get('/ubahbus/{id_bus}', [BussController::class, 'ubahbus'])->name('ubahbus');
Route::post('/updatedata2/{id_bus}', [BussController::class, 'updatedata2'])->name('updatedata2');
Route::get('/deletebus/{id_bus}', [BussController::class, 'deletebus'])->name('deletebus');
Route::get('/deleteAll', [BussController::class, 'deleteAll'])->name('deleteAll');
Route::get('/eksporbus', [BussController::class, 'eksporbus'])->name('eksporbus');