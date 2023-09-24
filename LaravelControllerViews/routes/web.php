<?php

// use Illuminate\Console\View\Components\Info;
use Illuminate\Support\Facades\Route;
use App\Models\Info;
use App\Http\Controllers\InfoController;

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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Christo",
        "insta" => "@chr.adyatma",
        "image" => "WIZARD.png",
    ]);
});

Route::get('/infos', [InfoController::class, 'index']);

Route::get('/infos/{slug}', [InfoController::class, 'show']);

Route::get('/information', function () {
    return view('infos', [
        "title" => "Information",
        "infos" => Info::all()
    ]);
});