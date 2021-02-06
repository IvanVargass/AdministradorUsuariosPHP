<?php

require 'clientes.php';

$cliente_id = $_GET['cliente_id'];

$cliente = new Clientes();

$resultado = $cliente->Eliminar($cliente_id);

if($resultado){
    header("location:../listado.php");
} else {
    exit(json_decode(array('estado'=>false, 'mensaje' => 'Error al registrar')));
}
