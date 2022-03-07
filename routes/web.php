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
    $data=array(
        "title" => "Home"
    );
    return view('urwelcome',$data);
});
Route::get('/urwelcome', function () {
    $data=array(
        "title" => "Home"
    );
    return view('urwelcome',$data);
});
Route::get('/aboutme', function () {
    $data=array(
        'title' => 'About Me',
        'nama' => 'Iqshan Bagus Prasetyo',
        'nickname' => 'Iqshan',
        'longname' => 'Bagus Prasetyo',
        'job' => 'College Student',
        'ttl' => '29 Februari 2202',
        'negara' => 'Indonesia',
        'agama' => 'Islam',
        'alamat' => 'Sudimoro Street',
        'telp' => '0896303037xx',
        'email' => 'bagusiqshan81@gmail.com'
    );
    return view('aboutme',$data);
});
Route::get('/comingsoon', function () {
    $data=array(
        'title' => 'Coming Soon'
    );
    return view('comingsoon',$data);
});
Route::get('/comment', function () {
    $data=array(
        'title' => 'Comment'
    );
    return view('comment',$data);
});
