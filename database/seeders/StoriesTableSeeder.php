<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Story::create([
            'title' => 'La Maison',
            'description' => 'Tu te réveilles dans une maison, tu dois sortir et vite !',
            'available' => true
        ]);

        Story::create([
            'title' => 'Life Simulator',
            'description' => 'Vis la vie que tu as toujours voulu, gare aux choix que tu prends ...',
            'available' => false
        ]);

        Story::create([
            'title' => 'Labyrinthe des ombres',
            'description' => 'Tu te réveilles dans une maison, tu dois sortir et vite !',
            'available' => false
        ]);
    }
}
