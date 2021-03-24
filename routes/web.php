<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);
Route::get('/', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('web.index');

/*Exemplo de Mailabel */
Route::get('/bemvindos', function(){
    $email = new WelcomeMailable;
    Mail::to('noreply@galpha.co')->send($email);
});
