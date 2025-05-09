<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class DefinitionFilter extends ApiFilter
{
    //parametros para filtrar
    protected $safeParams = [
        'id' => ['eq'],
        'definition' => ['eq', 'like'],
        'words_id' => ['eq'],
    ];
    
    // mapeo de filtrar olumnas
    protected $columnMap = [
        'words_id' => 'words_id',
    ];

    
    //para  especificar el tipo de filtro
    protected $operatorMap = [
        'eq' => '=',
        'like' => 'LIKE'
    ];

}