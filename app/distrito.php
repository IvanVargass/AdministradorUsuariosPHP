<?php

class Distrito {

    private $cn;
    private $datos;
     
    function __construct(){
        $this->datos = array();
        $this->cn = new mysqli('localhost', 'id16094980_root', '%M\StB((WK_$8$}v', 'id16094980_ventas');
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