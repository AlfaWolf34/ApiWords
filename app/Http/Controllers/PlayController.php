<?php
namespace App\Http\Controllers;

use App\Models\Definition;
use Illuminate\Http\Request;
use App\Models\Word;

class PlayController extends Controller
{
    public function getQuiz()
    {
        // ramdomizar palabra
        $word = Word::inRandomOrder()->first();

        if (!$word) {
            return response()->json(['message' => 'No hay palabras disponibles'], 404);
        }

        // Obtener una definición correcta
        $correct = Definition::where('words_id', $word->id)
            ->where('is_correct', true)
            ->inRandomOrder()
            ->first();

        if (!$correct) {
            return response()->json(['message' => 'No hay definición correcta para esta palabra'], 404);
        }

        // las 3 incorrectas
        $incorrects = Definition::where('words_id', '!=', $word->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        // mezclar opciones
        $options = collect([$correct])->merge($incorrects)->shuffle();

        return response()->json([
            'word' => $word->word,
            'word_id' => $word->id,
            'correct_definition_id' => $correct->id, // Aquí está el definition_id correcto
            'options' => $options->map(function ($item) {
                return [
                    'definition_id' => $item->id,
                    'definition' => $item->definition,
                ];
            }),
        ]);
    }
}
