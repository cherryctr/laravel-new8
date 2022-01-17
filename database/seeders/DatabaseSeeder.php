<?php

namespace Database\Seeders;

use Database\Factories\BlogFactory;
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
        // \App\Models\User::factory(10)->create();
        BlogFactory::factory(20)->create();
    }
}
