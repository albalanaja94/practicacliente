<?php

class db {

    private $conexion;

    function __construct()
    {
        $this->conectar();
    }

    function conectar(){
        $this->conexion = new mysqli('localhost','root','','cliente');

    }
    function ultimo_id(){
        return $this->conexion->insert_id;
    }
    function desconectar(){
        $this->conexion->close();
    }
    function lanzar_consulta($sql, $parametros = array()){


        $sentencia = $this->conexion->prepare($sql);
        if(!empty($parametros)) {
            $tipos = "";
            foreach ($parametros as $parametro){
                if(gettype($parametro) == "string"){
                    $tipos = $tipos . "s";
                }else{
                    $tipos = $tipos . "i";
                }
            }
            $sentencia->bind_param($tipos, ...$parametros);
        }

        $sentencia->execute();
        $resultado = $sentencia->get_result();
        $sentencia->close();


        return $resultado;
    }


}

