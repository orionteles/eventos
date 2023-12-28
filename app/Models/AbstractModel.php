<?php

namespace App\Models;

use App\Classes\Util;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AbstractModel extends Model
{
    Use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $floats = [];

    public function fill(array $attributes)
    {
        foreach ($attributes as $campo => $valor){
            // Formatando Datas para banco
            if($valor && in_array($campo, $this->dates)){
                $attributes[$campo] = Util::formatarData($valor);
            // Formatando Floats para banco
            } elseif($valor && in_array($campo, $this->floats)){
                $attributes[$campo] = str_replace(['.', ','], ['', '.'], $valor);
            }
        }
        parent::fill($attributes);
    }

    static public function allArray($where = [], $value = 'nome', $key = 'id')
    {

        $dados = self::where($where)->get();

        $resultado = [];
        foreach ($dados as $dado) {
            $resultado[$dado->{$key}] = $dado->{$value};
        }
        return $resultado;
    }

}
