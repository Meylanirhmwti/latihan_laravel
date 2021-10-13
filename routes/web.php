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
    return view('welcome');
});

Route::get('about', function () {
    return '<h1>Hello</h1>'
    . '<br>Selamat datang di webapp saya'
    . '<br>Laravel, emang keren';
});
 Route::get('profile', function (){
     $nama = "Abdul";
     return "Nama Saya Adalah <b>$nama</b>";
 });

 //route parameter
 Route::get('post/{id}', function($a){
     return "Halaman Post ke - $a";
 });
 Route::get('bio/{nama}/{umur}/{alamat}', function($nama, $umur,$alamat){
    return "Biodata Saya<br>"."Nama : $nama". "<br>Umur : $umur". "<br>Alamat : $alamat";
});

//route optional parameter
Route::get('page/{page?}',function ($hal = 1){
    return "Halaman <br>$hal</br>";
});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}',function ($a = null, $b = null, $c = null){
    if($a = null && $b = null && $c = null){
        $pesan = "Anda Tidak Pesan.Silahkan Pulang";
    }
if ($a != null) {
    $pesan = "Anda Memesan"
    . "<br>Makan : <b>$a</b>";
}
if ($a != null && $b != null){
    $pesan = "Anda Memesan"
    ."<br>Makan : <b>$a</b>"
    ."<br>Minum : <b>$b</b>";
}
if ($a != null && $b != null && $c != null){
    $pesan = "Anda Memesan"
    ."<br>Makan : <b>$a</b>"
    ."<br>Minum : <b>$b</b>"
    ."<br>Cemilan : <b>$c</b>";
}




