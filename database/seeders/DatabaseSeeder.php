<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\players;
use App\Models\positions;
use App\Models\sports;
use App\Models\teams;
use App\Models\trainers;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(2)->create();
        sports::factory(10)->create();
        positions::factory(10)->create();
        trainers::factory(10)->create();
        teams::factory(10)->create();
        players::factory(10)->create();        
    }
}