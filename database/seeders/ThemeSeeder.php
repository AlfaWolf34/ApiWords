<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Theme::insert([
            ['theme' => 'Astronomia', 'description' => 'Definiciones relacionadas con la astronomia'],
            ['theme' => 'Biologia', 'description' => 'Definiciones relacionadas con la biologia'],
            ['theme' => 'Cultura POP', 'description' => 'Definiciones relacionadas con la cultura POP'],
            ['theme' => 'Tecnologia', 'description' => 'Definiciones relacionadas con la tecnologia'],
            ['theme' => 'Arte', 'description' => 'Definiciones relacionadas con el arte'],
            ['theme' => 'Musica', 'description' => 'Definiciones relacionadas con la musica'],
            ['theme' => 'Deportes', 'description' => 'Definiciones relacionadas con los deportes']
        ]);
    }
}
