<?php

require 'clientes.php';

$cliente_id = $_POST['cliente_id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];
$distrito_id = $_POST['distrito_id'];

$cliente = new Clientes();

$cliente = new Clientes($nombre, $apellidos, $dni, $correo, $distrito_id);

$resultado = $cliente->Actualizar($cliente_id);

if($resultado){
    header("location:../index.php");
} else {
    exit(json_decode(array('estado'=>false, 'mensaje' => 'Error al registrar')));
}

