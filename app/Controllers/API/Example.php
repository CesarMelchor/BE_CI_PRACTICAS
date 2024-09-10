<?php 
namespace App\Controllers\API;
use CodeIgniter\RESTful\ResourceController;

class Example extends ResourceController{

    public function ejercicio1()
    {
        $palabra = $this->request->getGet('palabra');
        $palabra = strval($palabra);
        $cadena = str_split($palabra);
        $valores = array_count_values($cadena);
        $repetido = 0;
        $repetidos = 0;
        $valido = true;
        foreach ($valores as $indice => $valor){
            if ($valor == 3) {
                $repetidos = 1;
                $valido = false;
            }else{
            if ($valor == 2) {
                $repetido++;
            }
        }
          }
        if ($repetido < 2 && $repetidos < 1) {
            $valido = true;
        }else{
        $valido = false;
        }

        if ($valido == true) {
        return $this->respond(['mensaje' => 'contraseña válida']);
        }else{
            return $this->respond(['mensaje' => 'contraseña inválida']);

        }

    }

    public function ejercicio2()
    {
        $num = $this->request->getGet('num_casas');
        $casa = $this->request->getGet('casa');
        $casa = strval($casa);
        $casa = intval($casa);
        $x = strval($num);
        $x = intval($x);
        $inicio = 1;
        $final = $x * 2;
        $pares = array();
        $impares = array();


        for ($inicio; $inicio <= $final; $inicio++) {
 
    if (($inicio % 2) == 0) {
        array_push($pares, $inicio);
    }else{
        
        array_push($impares, $inicio);
    }
}


$pares = array_reverse($pares);
$posicion = 0;

if (($casa % 2) == 0) {
$posicion = array_search($casa,$pares);
$resultado = $impares[$posicion];
return $this->respond($resultado);
}
else
{
$posicion = array_search($casa,$impares);
$resultado = $pares[$posicion];
return $this->respond($resultado);
}



    }

    
}