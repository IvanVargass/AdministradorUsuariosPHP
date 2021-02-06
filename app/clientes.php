<?php

class Clientes {

    private $cliente_id;
    private $nombre;
    private $apellidos;
    private $dni; 
    private $correo; 
    private $distrito_id;
    private $estado;

    private $cn;
    private $datos;
     
    function __construct($nombre=false, $apellidos=false, $dni=false, $correo=false, $distrito_id=false){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->correo = $correo;
        $this->distrito_id = $distrito_id;
        $this->datos = array();
        $this->cn = new mysqli('localhost', 'id16094980_root', '%M\StB((WK_$8$}v', 'id16094980_ventas');
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getDistritoId(){
        return $this->distrito_id;
    }

    public function SetNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function SetApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function SetDni($dni){
        $this->dni = $dni;
    }

    public function SetCorreo($correo){
        $this->correo = $correo;
    }

    public function SetDistritoId($distrito_id){
        $this->distrito_id = $distrito_id;
    }

    // Métodos para interactuar con la base de datos de MySQL

    public function Registrar(){
        $nombre = $this->getNombre();
        $apellidos = $this->getApellidos();
        $dni = $this->getDni();
        $correo = $this->getCorreo();
        $distrito_id = $this->getDistritoId();

        $consulta = "INSERT INTO `clientes`(`nombre`, `apellidos`, `dni`, `correo`, `distrito_id`)";
        $consulta .= "VALUES ('$nombre','$apellidos','$dni','$correo', $distrito_id)";

        $resultado = $this->cn->query($consulta);

        return($resultado ? true : false);
    }

    public function Actualizar($cliente_id){
        $nombre = $this->getNombre();
        $apellidos = $this->getApellidos();
        $dni = $this->getDni();
        $correo = $this->getCorreo();
        $distrito_id = $this->getDistritoId();

        $consulta = "UPDATE `clientes` SET `nombre` = '$nombre', `apellidos` = '$apellidos', `dni` = '$dni', ";
        $consulta .= " `correo` = '$correo', `distrito_id` = '$distrito_id' WHERE cliente_id = '$cliente_id'";

        $resultado = $this->cn->query($consulta);

        return($resultado ? true : false);
        
    }

    public function Eliminar($cliente_id){

        $consulta = "DELETE FROM `clientes` WHERE cliente_id = '$cliente_id'";

        $resultado = $this->cn->query($consulta);

        return($resultado ? true : false);

    }

    public function Listar(){

        $consulta = "SELECT * FROM `clientes`";
        $resultado = $this->cn->query($consulta);

        while($fila = mysqli_fetch_object($resultado)){
            $this->datos[] = $fila;
        }

        return $this->datos;

    }

}