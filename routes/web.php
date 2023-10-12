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
    return view('welcome');
});

Route::get('/coba',function() {
   return view('latihan.coba',['nama' =>'wisnu']); 
});

Route::get('/haha',function(){
    $data=[
        'mapel' => 'pemrograman web',
        'tahun' => 2023,
        'kelas' => 'XI'
    ];
    return view('latihan.hari',$data);
});

Route::get('kelas/rpl',function(){
    return 'INI WISNU EGA PRATAMA';
});
Route::get('pelajaran',function(){
    return 'INI PELAJARAN WEB';
});

// Route dengan parameter
Route::get('mapel/{id}',function($id){
    switch ($id) {
        case 1:
            $mapel = 'Pemrograman Web';
            break;
        case 2:
            $mapel = 'Pemrograman Berorientasi Object';
            break;
        case 3:
            $mapel = 'Bahasa Indonesia';
            break;
        case 4:
            $mapel = 'Bahasa Inggris';
            break;
        
        default:
            $mapel = 'Tidur di rumah';
            break;
    }
    return 'Sekarang Pelajaran '.$mapel;
});

Route::get('pushup/{id}',function($id){
    $x = 1;
    while ($x <= $id) {
        echo 'Pushup '.$x.'</br>';
        $x++;
    }
    return;
});


// Route soal web

// soal 1
Route::get('welcome',function(){
    return view('selamat');
});

// soal 2
Route::get('latihan',function(){
    return view('latihan.identitas',[
        'nama' => 'Selamet widy',
        'usia' => 15,
        'alamat' => 'jalan taman makam pahlawan'
    ]);
});

// soal 3
Route::get('latihan/identitas',function(){
    $nama = 'Selamet widy';
    $usia = 17;
    $alamat = 'Jalan karimun';
    return view('latihan.identitas2',['nama' => $nama,'usia' => $usia,'alamat' => $alamat]);
});

// soal 4
Route::get('latihan/diskon',function(){
    $bayar = 1000000;
    $diskon = 0.2 * $bayar;
    $total_bayar = $bayar - $diskon;

    return view('latihan.diskon',['bayar' => $bayar,'diskon' => $diskon, 'total_bayar' => $total_bayar]);
});