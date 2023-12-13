<?php

use App\Http\Controllers\AuthController;
use App\Models\Topi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PantController;
use App\Http\Controllers\TopiController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BajuFashionController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CelanaFashionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LifestyleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('admin.dashboard_admin');
// });

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class,'register'])->name('register');
    Route::post('/register', [AuthController::class,'registerPost'])->name('register.store');
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login', [AuthController::class,'loginPost'])->name('loginPost');
});

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/dashboard_admin', [DashboardController::class,'dashboard_admin'])->name('dashboard_admin');
    Route::delete('/logout', [AuthController::class,'logout'])->name('logout');




Route::get('/baju',[BajuController::class,'baju'])->name('baju');
Route::post('/insertbaju',[BajuController::class,'insertbaju'])->name('insertbaju');
Route::get('/lihat/{id}',[BajuController::class,'lihat'])->name('lihat');
Route::get('/deletebaju/{id}',[BajuController::class,'deletebaju'])->name('deletebaju');
Route::put('/update-baju/{id}',[BajuController::class,'updateBaju'])->name('update-baju');

Route::get('/celana',[PantController::class,'celana'])->name('celana');
Route::post('/insertcelana',[PantController::class,'insertcelana'])->name('insertcelana');
Route::get('/lihatcelana/{id}',[PantController::class,'lihatcelana'])->name('lihatcelana');
Route::get('/deletecelana/{id}',[PantController::class,'deletecelana'])->name('deletecelana');
Route::put('/update-celana/{id}',[PantController::class,'updateCelana'])->name('update-celana');

Route::get('/topi',[TopiController::class,'topi'])->name('topi');
Route::post('/inserttopi',[TopiController::class,'inserttopi'])->name('inserttopi');
Route::get('/lihattopi/{id}',[TopiController::class,'lihattopi'])->name('lihattopi');
Route::get('/deletetopi/{id}',[TopiController::class,'deletetopi'])->name('deletetopi');
Route::put('/update-topi/{id}',[TopiController::class,'updateTopi'])->name('update-topi');

Route::get('/sepatu',[SepatuController::class,'sepatu'])->name('sepatu');
Route::post('/insertsepatu',[SepatuController::class,'insertsepatu'])->name('insertsepatu');
Route::get('/lihatsepatu/{id}',[SepatuController::class,'lihatsepatu'])->name('lihatsepatu');
Route::get('/deletesepatu/{id}',[SepatuController::class,'deletesepatu'])->name('deletesepatu');
Route::put('/update-sepatu/{id}',[SepatuController::class,'updateSepatu'])->name('update-sepatu');

Route::get('/tas',[TasController::class,'tas'])->name('tas');
Route::post('/inserttas',[TasController::class,'inserttas'])->name('inserttas');
Route::get('/lihattas/{id}',[TasController::class,'lihattas'])->name('lihattas');
Route::get('/deletetas/{id}',[TasController::class,'deletetas'])->name('deletetas');
Route::put('/update-tas/{id}',[TasController::class,'updateTas'])->name('update-tas');

Route::get('/berita',[BeritaController::class,'berita'])->name('berita');
Route::post('/insertberita',[BeritaController::class,'insertberita'])->name('insertberita');
Route::get('/lihatberita/{id}',[BeritaController::class,'lihatberita'])->name('lihatberita');
Route::get('/deleteberita/{id}',[BeritaController::class,'deleteberita'])->name('deleteberita');
Route::put('/update-berita/{id}',[BeritaController::class,'updateBerita'])->name('update-berita');

Route::get('/event',[EventsController::class,'event'])->name('event');
Route::post('/insertevent',[EventsController::class,'insertevent'])->name('insertevent');
Route::get('/lihatevent/{id}',[EventsController::class,'lihatevent'])->name('lihatevent');
Route::get('/deleteEvent/{id}',[EventsController::class,'deleteEvent'])->name('deleteEvent');
Route::put('/update-event/{id}',[EventsController::class,'updateEvent'])->name('update-event');

Route::get('/lifestyle',[LifestyleController::class,'style'])->name('style');
Route::post('/insertStyle',[LifestyleController::class,'insertStyle'])->name('insertStyle');
Route::get('/lihatStyle/{id}',[LifestyleController::class,'lihatStyle'])->name('lihatStyle');
Route::get('/deleteStyle/{id}',[LifestyleController::class,'deleteStyle'])->name('deleteStyle');
Route::put('/update-style/{id}',[LifestyleController::class,'updateStyle'])->name('update-style');
});


// user

Route::get('/guru', function(){
    $title = 'GURU';
    return view('guru', compact('title'));
});
Route::get('/siswa', function(){
    $title = 'SISWA';
    return view('siswa', compact('title'));
});

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/clothes',[BajuFashionController::class,'clothes'])->name('clothes');
Route::get('/lihatbaju/{id}', [BajuFashionController::class,'lihatbaju'])->name('lihatbaju');
Route::get('/clothes/search', [BajuFashionController::class, 'search'])->name('search');

Route::get('/hat',[TopiController::class,'hat'])->name('hat');
Route::get('/lihattopii/{id}', [TopiController::class,'lihattopii'])->name('lihattopii');
Route::get('/hat/searchtopi', [TopiController::class, 'searchtopi'])->name('searchtopi');

Route::get('/bag',[TasController::class,'bag'])->name('bag');
Route::get('/lihattas/{id}', [TasController::class,'lihattas'])->name('lihattas');
Route::get('/bag/searchtas', [TasController::class, 'searchtas'])->name('searchtas');

Route::get('/shoe',[SepatuController::class,'shoe'])->name('shoe');
Route::get('/lihatsepatu/{id}', [SepatuController::class,'lihatsepatu'])->name('lihatsepatu');
Route::get('/shoe/searchsepatu', [SepatuController::class, 'searchsepatu'])->name('searchsepatu');

Route::get('/pants',[CelanaFashionController::class,'pants'])->name('pants');
Route::get('/lihatcelana/{id}', [CelanaFashionController::class,'lihatcelana'])->name('lihatcelana');
Route::get('/pants/searchpants', [CelanaFashionController::class, 'searchpants'])->name('searchpants');

Route::get('/news',[BeritaController::class,'news'])->name('news');
Route::get('/lihatberitaa/{id}', [BeritaController::class,'lihatberitaa'])->name('lihatberitaa');
Route::get('/news/searchnews', [BeritaController::class, 'searchnews'])->name('searchnews');

Route::get('/events',[EventsController::class,'events'])->name('events');
Route::get('/lihatevents/{id}', [EventsController::class,'lihatevents'])->name('lihatevents');
Route::get('/events/searchevents', [EventsController::class, 'searchevents'])->name('searchevents');

Route::get('/lifestylee',[LifestyleController::class,'lifestylee'])->name('lifestylee');
Route::get('/lihatstylee/{id}', [LifestyleController::class,'lihatstylee'])->name('lihatstylee');
Route::get('/lifestylee/searchstyle', [LifestyleController::class, 'searchstyle'])->name('searchstyle');
