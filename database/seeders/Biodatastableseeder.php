<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Biodatastableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['id' => 1, 'name' => 'Meylani Rahmawati', 'bornDate' => '04 Mei 2004', 'gender' => 'Perempuan',
            'address' => 'GG.Situ Tarate','religion' => 'Islam', 'age' => 17, 'hobby' => 'Membaca'],

            ['id' => 2, 'name' => 'Nabil Khaerunnisa', 'bornDate' => '05 Januari 2004', 'gender' => 'Perempuan',
            'address' => 'Kp Bahuan','religion' => 'Islam', 'age' => 17, 'hobby' => 'Menulis'],

            ['id' => 3, 'name' => 'Lira Rahmawati', 'bornDate' => '17 February 2004', 'gender' => 'Perempuan',
            'address' => 'Jl.Ciodeng','religion' => 'Islam', 'age' => 17, 'hobby' => 'Renang'],

            ['id' => 4, 'name' => 'Maudy meilisa', 'bornDate' => '04 Mei 2004', 'gender' => 'Perempuan',
            'address' => 'Jl.Inhoftsnk','religion' => 'Islam', 'age' => 17, 'hobby' => 'Makan'],

            ['id' => 5, 'name' => 'Tiara Novitasari', 'bornDate' => '14 November 2004', 'gender' => 'Perempuan',
            'address' => 'Jl.Palasari','religion' => 'Islam', 'age' => 17, 'hobby' => 'Gosip'],
        ];
    }
}
