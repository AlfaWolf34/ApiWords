<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Definition;
use App\Models\Word;

class DefinitionSeeder extends Seeder
{
    public function run(): void
    {
        $definitions = [
            'Astronomía' => [
                'Ciencia que estudia los cuerpos celestes y el universo.', // correcta
                'Estudio de animales marinos.',
                'Actividad artística que usa pigmentos.',
                'Método de cultivo intensivo.'
            ],
            'Galaxia' => [
                'Sistema enorme de estrellas, gas y polvo unidos por gravedad.',
                'Dispositivo para medir temperatura.',
                'Lengua originaria de Asia.',
                'Subgénero musical electrónico.'
            ],
            'Estrella' => [
                'Cuerpo celeste que emite luz por reacciones nucleares.',
                'Herramienta de carpintería.',
                'Especie vegetal común.',
                'Tipo de virus.'
            ],
            'Planeta' => [
                'Cuerpo celeste que orbita una estrella y no emite luz propia.',
                'Tipo de bacteria benigna.',
                'Nombre de una danza folclórica.',
                'Unidad de medida en física.'
            ],
            'Satelite' => [
                'Objeto que orbita un planeta, puede ser natural o artificial.',
                'Instrumento musical de viento.',
                'Elemento químico de transición.',
                'Parte del sistema digestivo.'
            ],

            'Biología' => [
                'Ciencia que estudia la vida y los organismos vivos.',
                'Sistema de escritura musical.',
                'Técnica para cocinar al vapor.',
                'Estilo de pintura abstracta.'
            ],
            'Célula' => [
                'Unidad estructural y funcional básica de los seres vivos.',
                'Pieza mecánica de relojes antiguos.',
                'Tipo de roca volcánica.',
                'Forma de energía luminosa.'
            ],
            'ADN' => [
                'Molécula que contiene la información genética de los seres vivos.',
                'Tipo de material plástico.',
                'Nombre de un dios mitológico.',
                'Técnica de tejido artesanal.'
            ],
            'Gen' => [
                'Segmento de ADN que codifica una proteína.',
                'Tipo de planta carnívora.',
                'Instrumento de navegación marítima.',
                'Género de literatura medieval.'
            ],
            'Evolución' => [
                'Cambio en las características hereditarias de una población a lo largo del tiempo.',
                'Estilo arquitectónico romano.',
                'Variedad de uva para vino.',
                'Unidad métrica de presión.'
            ],

            'Cultura POP' => [
                'Conjunto de manifestaciones culturales contemporáneas populares.',
                'Tipo de ecuación matemática.',
                'Estilo de nado sincronizado.',
                'Clasificación de insectos.'
            ],
            'Fandom' => [
                'Comunidad de fans que comparten interés por un tema.',
                'Tipo de arte textil.',
                'Lenguaje de programación funcional.',
                'Recurso natural renovable.'
            ],
            'Meme' => [
                'Elemento cultural replicado que se transmite por redes sociales.',
                'Técnica para construir puentes.',
                'Símbolo religioso antiguo.',
                'Ingrediente de cocina japonesa.'
            ],
            'Streamer' => [
                'Persona que transmite contenido en vivo por internet.',
                'Nombre de un virus digital.',
                'Herramienta agrícola antigua.',
                'Idioma nativo de Oceanía.'
            ],
            'Spoiler' => [
                'Revelación anticipada de información clave de una obra.',
                'Parte trasera de un avión.',
                'Técnica de bordado maya.',
                'Herramienta para minería.'
            ],

            'Tecnología' => [
                'Aplicación del conocimiento científico para resolver problemas.',
                'Estilo de arte renacentista.',
                'Tipo de cocina mediterránea.',
                'Juego de cartas tradicional.'
            ],
            'Inteligencia Artificial' => [
                'Simulación de procesos de inteligencia humana por máquinas.',
                'Estudio de los sueños desde lo espiritual.',
                'Instrumento de percusión andina.',
                'Figura geométrica antigua.'
            ],
            'Software' => [
                'Conjunto de programas que controlan un computador.',
                'Material de construcción ecológico.',
                'Estilo de danza folklórica.',
                'Tipo de astro gigante.'
            ],
            'Ciberseguridad' => [
                'Protección de sistemas y datos contra accesos no autorizados.',
                'Técnica vocal de canto gregoriano.',
                'Tipo de meditación budista.',
                'Componente de la fotosíntesis.'
            ],
            'Nube' => [
                'Almacenamiento y procesamiento de datos a través de internet.',
                'Herramienta para el bordado digital.',
                'Planta medicinal asiática.',
                'Método de defensa personal.'
            ],

            'Música' => [
                'Arte de combinar sonidos y silencios con ritmo y armonía.',
                'Forma de arquitectura moderna.',
                'Tipo de reptil tropical.',
                'Subgénero cinematográfico de acción.'
            ],
            'Ritmo' => [
                'Patrón de sonidos y silencios en el tiempo.',
                'Parte del aparato digestivo.',
                'Estilo de arte gótico.',
                'Clasificación botánica europea.'
            ],
            'Melodía' => [
                'Sucesión de notas musicales que forman una frase musical.',
                'Método de pesca tradicional.',
                'Tipo de célula nerviosa.',
                'Nombre de un metal noble.'
            ],
            'Armonía' => [
                'Combinación de notas que suenan bien juntas.',
                'Sistema de riego agrícola.',
                'Tipo de roca sedimentaria.',
                'Estructura social en insectos.'
            ],
            'Acorde' => [
                'Conjunto de tres o más notas que suenan simultáneamente.',
                'Técnica de escritura árabe.',
                'Clasificación de nubes.',
                'Estilo de danza africana.'
            ],

            'Arte' => [
                'Expresión creativa del ser humano a través de diversos medios.',
                'Tipo de circuito eléctrico.',
                'Unidad de medida asiática.',
                'Sistema de navegación satelital.'
            ],
            'Museo' => [
                'Institución que conserva y exhibe objetos de valor cultural.',
                'Técnica de minería sostenible.',
                'Parte del sistema nervioso central.',
                'Nombre científico de un roedor.'
            ],
            'Escultura' => [
                'Arte de moldear o tallar materiales para crear formas.',
                'Procedimiento químico industrial.',
                'Tipo de insecto tropical.',
                'Idioma antiguo de Persia.'
            ],
            'Fotografía' => [
                'Arte y técnica de obtener imágenes mediante luz.',
                'Proceso de fermentación de frutas.',
                'Técnica de tejido ancestral.',
                'Elemento del sistema solar.'
            ],
            'Dibujo' => [
                'Representación gráfica de un objeto o idea con líneas y trazos.',
                'Unidad para medir presión atmosférica.',
                'Término de biología marina.',
                'Sistema político medieval.'
            ],

            'Deportes' => [
                'Actividades físicas competitivas con reglas específicas.',
                'Lenguaje musical occidental.',
                'Sistema filosófico indio.',
                'Elemento químico radiactivo.'
            ],
            'Arbitro' => [
                'Persona que hace cumplir las reglas en una competición.',
                'Parte de una nave espacial.',
                'Herramienta para agricultura vertical.',
                'Mecanismo de relojería antigua.'
            ],
            'Fairplay' => [
                'Juego limpio y respeto por las reglas y rivales.',
                'Técnica de origami avanzado.',
                'Modo de transporte medieval.',
                'Clasificación de bacterias.'
            ],
            'Entrenamiento' => [
                'Práctica constante para mejorar habilidades físicas o técnicas.',
                'Técnica de pintura mural.',
                'Tipo de lenguaje binario.',
                'Estilo literario barroco.'
            ],
            'Atletismo' => [
                'Conjunto de disciplinas deportivas como correr, saltar y lanzar.',
                'Nombre de una corriente filosófica china.',
                'Sistema económico del siglo XIX.',
                'Planta medicinal de América.'
            ],
        ];

        foreach ($definitions as $word => $defs) {
            $wordModel = Word::where('word', $word)->first();

            if ($wordModel) {
                foreach ($defs as $index => $definition) {
                    Definition::create([
                        'words_id' => $wordModel->id,
                        'definition' => $definition,
                        'is_correct' => $index === 0 ? 1 : 0
                    ]);
                }
            }
        }
    }
}
