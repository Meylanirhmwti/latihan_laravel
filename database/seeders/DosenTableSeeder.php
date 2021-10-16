<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nipd'=> 12, 'nama'=> "Meylani", 'alamat' => "Cibaduyut"],
            ['nipd'=> 123, 'nama'=> "Risma", 'alamat' => "Ciaray Tengah"],
            ['nipd'=> 1234, 'nama'=> "Nabila", 'alamat' => "Bahuan"],
            ['nipd'=> 12345, 'nama'=> "Kayla", 'alamat' => "Sukamenak"],
            ['nipd'=> 123456, 'nama'=> "Seni", 'alamat' => "Sindang Palay"],


        ];
        //memasukan data ke dalam tabel "post"
        DB::table('dosens')->insert($post);
    }
}
