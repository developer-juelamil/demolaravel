<?php

namespace Database\Seeders;
use App\Models\Curso;
use App\Models\User;

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
        User::factory(10)->create();// video 14
        Curso::factory(50)->create();



    }
}
