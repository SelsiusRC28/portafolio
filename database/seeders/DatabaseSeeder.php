<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Proyect;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/proyects');
        Storage::makeDirectory('public/proyects');

        
        
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        \App\Models\User::factory(10)->create();

        Proyect::factory(5)->create();

        Comment::factory(20)->create();
    }
}
