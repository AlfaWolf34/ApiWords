<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Word;
use App\Models\Theme;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id para cada tema
        $astronomyThemeId = Theme::where('theme', 'Astronomia')->first()->id;
        $biologyId = Theme::where('theme', 'Biologia')->first()->id;
        $cultureThemeId = Theme::where('theme', 'Cultura POP')->first()->id;
        $technologyThemeId = Theme::where('theme', 'Tecnologia')->first()->id;
        $musicThemeId = Theme::where('theme', 'Musica')->first()->id;
        $artThemeId = Theme::where('theme', 'Arte')->first()->id;
        $deportThemeId = Theme::where('theme', 'Deportes')->first()->id;

        Word::insert([
            //Astronomia
            ['themes_id' => $astronomyThemeId, 'word' => 'Astronomía'],
            ['themes_id' => $astronomyThemeId, 'word' => 'Galaxia'],
            ['themes_id' => $astronomyThemeId, 'word' => 'Estrella'],
            ['themes_id' => $astronomyThemeId, 'word' => 'Planeta'],
            ['themes_id' => $astronomyThemeId, 'word' => 'Satelite'],
            //biologia
            ['themes_id' => $biologyId, 'word' => 'Biología'],
            ['themes_id' => $biologyId, 'word' => 'Célula'],
            ['themes_id' => $biologyId, 'word' => 'ADN'],
            ['themes_id' => $biologyId, 'word' => 'Gen'],
            ['themes_id' => $biologyId, 'word' => 'Evolución'],
            //Cultura POP
            ['themes_id' => $cultureThemeId, 'word' => 'Cultura POP'],
            ['themes_id' => $cultureThemeId, 'word' => 'Fandom'],
            ['themes_id' => $cultureThemeId, 'word' => 'Meme'],
            ['themes_id' => $cultureThemeId, 'word' => 'Streamer'],
            ['themes_id' => $cultureThemeId, 'word' => 'Spoiler'],
            //Tecnologia
            ['themes_id' => $technologyThemeId, 'word' => 'Tecnología'],
            ['themes_id' => $technologyThemeId, 'word' => 'Inteligencia Artificial'],
            ['themes_id' => $technologyThemeId, 'word' => 'Software'],
            ['themes_id' => $technologyThemeId, 'word' => 'Ciberseguridad'],
            ['themes_id' => $technologyThemeId, 'word' => 'Nube'],
            //Musica
            ['themes_id' => $musicThemeId, 'word' => 'Música'],
            ['themes_id' => $musicThemeId, 'word' => 'Ritmo'],
            ['themes_id' => $musicThemeId, 'word' => 'Melodía'],
            ['themes_id' => $musicThemeId, 'word' => 'Armonía'],
            ['themes_id' => $musicThemeId, 'word' => 'Acorde'],
            //Arte
            ['themes_id' => $artThemeId, 'word' => 'Arte'],
            ['themes_id' => $artThemeId, 'word' => 'Museo'],
            ['themes_id' => $artThemeId, 'word' => 'Escultura'],
            ['themes_id' => $artThemeId, 'word' => 'Fotografía'],
            ['themes_id' => $artThemeId, 'word' => 'Dibujo'],
            //Deportes
            ['themes_id' => $deportThemeId, 'word' => 'Deportes'],
            ['themes_id' => $deportThemeId, 'word' => 'Arbitro'],
            ['themes_id' => $deportThemeId, 'word' => 'Fairplay'],
            ['themes_id' => $deportThemeId, 'word' => 'Entrenamiento'],
            ['themes_id' => $deportThemeId, 'word' => 'Atletismo'],
            
        ]);
    }
}
