<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class WordFilter extends ApiFilter
{
    //parametros para filtrar
    protected $safeParams = [
        'word' => ['like', 'eq'],
        'id' => ['eq','ne'],
        'themes_id' => ['eq','ne']//para sacar todas las palabras de un tema
    ];
    
    // mapeo de filtrar olumnas
    protected $columnMap = [
       'word' => 'word',
       'theme' => 'theme_id'
    ];

    
    //para  especificar el tipo de filtro
    protected $operatorMap = [
        'eq' => '=',
        'like' => 'LIKE',
        'ne' => '!='

    ];

}