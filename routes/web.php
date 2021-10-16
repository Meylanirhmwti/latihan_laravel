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
    return view ('tentang');
});
 Route::get('profile', function (){
     $nama = "Abdul";
     return view('profile', compact('nama'));
 });

 Route::get('biodata', function(){
   $nama = "Meylani Rahmawati";
   $umur = "17 tahun";
   $alamat = "Cibaduyut";
   $sekolah = "SMK ASSALAAM BANDUNG";
   $kelas = "XI RPL 1";
   $hobi = "Membaca";
   return view('biodata', compact('nama','umur','alamat','kelas','sekolah','hobi'));
 });

 //route parameter
 Route::get('post/{id}', function($a){
     return view('post',compact('a'));
 });
 Route::get('bio/{nama}/{umur}/{alamat}', function($nama, $umur,$alamat){
    return view('bio', compact('nama','umur','alamat'));
});
Route ::get('blog',function(){
    $posts = [
        ['id'=>1,'title'=>'Lorem Ipsum 1','content'=> 'Content Pertama'],
        ['id'=>2,'title'=>'Lorem Ipsum 2','content'=> 'Content Kedua'],
        ['id'=>3,'title'=>'Lorem Ipsum 3','content'=> 'Content Ketiga'],
    ];
    return view('blog',compact('posts'));
});

//route optional parameter
Route::get('page/{page?}',function ($hal = 1){
    return "Halaman <br>$hal</br>";
});

//latihan
Route ::get('isi',function(){
    $posts =[
        ['id'=>1,'name'=>'Meylani Rahmawati', 'username'=>'Meylani_mei4','email'=>'meylani@gamil.com','alamat'=>"tarate",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],
        ['id'=>2,'name'=>'Risma Fahilah', 'username'=>'Risma_fadi1','email'=>'risma@gamil.com','alamat'=>"ciparay",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],
        ['id'=>3,'name'=>'Tiara Novitasari', 'username'=>'Tiara_novi2','email'=>'tiara@gamil.com','alamat'=>"kopo",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],
        ['id'=>4,'name'=>'Syifa Siti', 'username'=>'Syifa_siti5','email'=>'syifa@gamil.com','alamat'=>"rancamanyar",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],
        ['id'=>5,'name'=>'Riska Amelia', 'username'=>'Riska_amel3','email'=>'riska@gamil.com','alamat'=>"banjaran",'mapel'=>[
            'mapel1'=>'Bahasa Indonesia',
            'mapel2'=>'Bahasa Inggris',
            'mapel3'=>'Matematika',
        ]],

        ];
        return view('isi',compact('posts'));
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
return $pesan;
});

//Route Bagian DB seeder
//Mode Post
//menampilkan data berdasarkan id
Route::get('/post1', function () {
    $query = App\Models\Post::find(1);
    return $query;
});

//mencari data berdasarkan kalimat
Route::get('/post2', function () {
    $query = App\Models\Post::where('title', 'like', '%cepat nikah%')->get();
    return $query;
});

//mengubah data
Route::get('/post3', function () {
    $post = App\Models\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;

});

//menghapus data
Route::get('/post4', function () {
    $post = App\Models\Post::find(1);
    $post->delete();
    // check data di database
    return $post;

});

//membuat data baru
Route::get('/post5', function () {
    $post = new App\Models\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;

});

    //model latihan
    Route::get('/test-post', function(){
        $query = App/Models/Post::all();
        return view('test-post', compact('query'));
    });

    Route::get('/test-dosen', function(){
        $query = App\Models\Dosen::all();
        return view('dosen', compact('query'));
    });

    Route::get('/test-mahasiswa', function(){
        $query = App\Models\Mahasiswa::all();
        return view('mahasiswa', compact('query'));
    });








