<?php

namespace App\Classes;

class Util
{
    static public function formatarData($data, $formato = 'd/m/Y')
    {
        $data = trim($data);

        if(substr($data, 2, 1) == '/'){
            $hora = '';
            if(strlen($data) > 10){
                $dataCompleta = explode(' ', $data);
                $data = $dataCompleta[0];
                $hora = ' ' . $dataCompleta[1];
            }
            $data= explode('/', $data);
            return "{$data[2]}-{$data[1]}-{$data[0]}{$hora}";
        } elseif(substr($data, 4, 1) == '-'){
            return date($formato, strtotime($data));
        }
        return $data;
    }

    static public function dataExtenso($dataInicio, $dataFim = null)
    {
        if($dataInicio){

            $dataInicio = trim($dataInicio);
            $dataFim = trim($dataFim);

            $data = $dataFim ? $dataFim : $dataInicio;

            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
            date_default_timezone_set('America/Sao_Paulo');
            $dataExtenso = strftime('%d de maio de %Y', strtotime($data));

            return $dataFim ? substr($dataInicio, 8, 2) . ' e ' . $dataExtenso : $dataExtenso;
        }
        return null;
    }
}
