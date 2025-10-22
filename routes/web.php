<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputDataController;
use Symfony\Component\Console\Input\Input;

Route::get('/input', [InputDataController::class, 'input']);
Route::post('/data', [InputDataController::class, 'data']);


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/smartflood', function () {

    return view('smartflood', ['tujuansistem' => 'u sistem IoT terintegrasi Smart City untuk memantau Anggi muka air, curah
hujan, dan kelembapan tanah di beberapa daerah rawan banjir', 'lokasisensor' => 'Kecamatan: Dayeuhkolot, Baleendah, Majalaya', 'Teknologi' => 'Sensor KeAnggian Air, Curah Hujan,
Kelembapan Tanah']);
});
