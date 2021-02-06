<?php

class Distrito {

    private $cn;
    private $datos;
     
    function __construct(){
        $this->datos = array();
        $this->cn = new mysqli('localhost', 'root', '', 'ventas');
    }


    public function ListarDistritos(){
        
        $consulta = "SELECT * FROM `distritos`";
        $resultado = $this->cn->query($consulta);

        while($fila = mysqli_fetch_object($resultado)){
            $this->datos[] = $fila;
        }

        return $this->datos;
    }
    
}