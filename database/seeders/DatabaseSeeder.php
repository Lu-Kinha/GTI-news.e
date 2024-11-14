<?php

namespace Database\Seeders;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
         User::factory()->create([
        'name' => 'lucas',
        'email' => 'lucas@gmail.com',
        'cargo' => 'Alguém do curso de GTI',
        'password' => Hash::make ('messi'),
         ]);

         User::factory(10)->create();


      Noticia::factory(100)-> create();
    }
}
