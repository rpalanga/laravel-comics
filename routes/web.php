<?php

use Illuminate\Support\Facades\Route;

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

    $section = ['CHARCTHER','COMIC','MOVIE','TV','GAMES','COLLECTIBLES','VIDEO','FAN','NEW','SHOP'];
    $comics = config('db');
    $listOne = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $listTwo = ['Shop DC','Shop DC Collectibles'];
    $listThree = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $listFour = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    

    return view('home' , compact('section','comics', 'listOne', 'listTwo','listThree','listFour'));

})->name('home');


