<?php

use Illuminate\Support\Facades\Route;

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
//   try {
//     DB::connection()->getPdo();
// } catch (\Exception $e) {
//     echo $e ;
// }
    return view('landingpage');
});
Route::get('/72shssfsdgearadash2828282almessage', function () {

    return view('message');
});
Route::post('/messageupload', 'App\Http\Controllers\MessageController@storeMessage')->name('message.upload');
