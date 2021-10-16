<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsSeeder::class);
        $this->call(MahasiswaTableSeeder::class);
        $this->call(DosenTableSeeder::class);
        $this->command->info("Sample Data Sudah Terisi");
    }
    }

