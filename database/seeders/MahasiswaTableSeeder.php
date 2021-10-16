<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
        ['nim'=> "1", 'nama'=> "Najwan", 'jurusan' => "Rpl", 'wali' => "Dewi"],
        ['nim'=> "12", 'nama'=> "Rehan", 'jurusan' => "Tkro", 'wali' => "Angung"],
        ['nim'=> "123", 'nama'=> "Sandi", 'jurusan' => "Tbsm", 'wali' => "Herna"],
        ['nim'=> "1234", 'nama'=> "Albi", 'jurusan' => "Farmasi", 'wali' => "Chandra"],
        ['nim'=> "123456", 'nama'=> "Palah", 'jurusan' => "Parawisata", 'wali' => "Wildan"]

        ];
    //memasukan data ke dalam tabel "post"
    DB::table('mahasiswas')->insert($post);
    }
}
