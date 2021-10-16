<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title'=>"Tajwid Menyengkan",'content'=>'lorem ipsum'],
            ['title'=>"Bacaan Sholat",'content'=>'lorem ipsum'],
            ['title'=>"Juz Amma",'content'=>'lorem ipsum'],

        ];
        //memasukan data ke dalam tabel "post"
        DB::table('posts')->insert($post);
    }
}
