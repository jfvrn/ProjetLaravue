<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StoriesTableSeeder::class);
        $this->call(PassagesTableSeeder::class);
        $this->call(ChoixTableSeeder::class);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.ch',
            'password' => 'admin',
            'admin' => 1
        ]);

        User::factory()->create([
            'name' => 'joé',
            'email' => 'joe@gmail.com',
            'password' => '12345678',
            'admin' => 0
        ]);

        


    }
}
