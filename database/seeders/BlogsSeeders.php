<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use DB;

class BlogsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 20; $i++) {
            DB::table('blogs')->insert([
                'judul' => $faker->judul,
                'deskripsi' => $faker->paragraph,
                         
                   ]);
        }
    }
}
