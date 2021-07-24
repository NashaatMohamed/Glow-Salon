<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ClickEvent;


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

Route::get('home2',ClickEvent::class);
//Route::get('home2', function () {
//    return view('services');
//});

