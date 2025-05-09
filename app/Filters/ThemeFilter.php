<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class ThemeFilter extends ApiFilter
{
    //parametros para filtrar
    protected $safeParams = [
        'id' => ['eq','ne'],
        'name' => ['eq', 'like','ne'],
        'description' => ['eq', 'like']
    ];
    
    // mapeo de filtrar olumnas
    protected $columnMap = [
        'name' => 'theme', 
        'description' => 'description',
    ];

    
    //para  especificar el tipo de filtro
    protected $operatorMap = [
        'eq' => '=',
        'like' => 'LIKE',
        'ne' => '!='
    ];

}