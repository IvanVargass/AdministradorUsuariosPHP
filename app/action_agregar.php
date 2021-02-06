<?php

require 'clientes.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];
$distrito_id = $_POST['distrito_id'];

$cliente = new Clientes($nombre, $apellidos, $dni, $correo, $distrito_id);

$resultado = $cliente->Registrar();

if($resultado){
    header("location:../listado.php");
} else {
    exit(json_decode(array('estado'=>false, 'mensaje' => 'Error al registrar')));
}