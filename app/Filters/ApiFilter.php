<?php
namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter
{
    //parametros para filtrar
    protected $safeParams = [];
    
    // mapeo de filtrar olumnas
    protected $columnMap = [];
    
    //para  especificar el tipo de filtro
    protected $operatorMap = [];

    public function transform(Request $request){
        $eloquery = [];
        foreach ($this->safeParams as $parm => $operators){
            $query = $request->query($parm);
            if (!isset($query)){
                continue;
            }
            $column = $this->columnMap[$parm] ?? $parm;
            foreach ($operators as $operator){
                if (isset($query[$operator])){
                    $eloquery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloquery;
    }
}