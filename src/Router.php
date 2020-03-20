<?php

namespace GW01;

class Router implements \ArrayAccess
{
    use Colletion;

    public function handler()
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        //REMOVE A ULTIMA BARRA DA URL SE HOUVER PARA NÃO DUPLICAR ROTAS
        if (strlen($path > 1)){
            $path = rtrim($path, '/');
        }
        //VERIFICA SE A URL EXISTE
        if ($this->offsetExists($path)){
            return $this->offsetGet($path);
        }

        http_response_code(404);
        echo 'Página inexistente';
        exit;

    }
}