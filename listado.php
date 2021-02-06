<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Usuarios</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-xs-6 col-md-9 col-lg-10">
                <h3>Listado de Clientes</h3>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <a href="registrar.php" class="btn btn-default">Nuevo</a>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead class="black white-text">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">DNI</th>
                            <th scope="col">Correo</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    
                    require 'app/clientes.php';
                    $clientes = new Clientes();

                    $datos = $clientes->Listar();

                    foreach($datos as $value){

                    ?>
                        <tr>

                            <td> <?=$value?->cliente_id?> </td> 
                            <td> <?=$value?->nombre?> </td>
                            <td> <?=$value?->apellidos?> </td>
                            <td> <?=$value?->dni?> </td>
                            <td> <?=$value?->correo?> </td>

                            <td><a href="app/action_eliminar.php?cliente_id=<?=$value?->cliente_id?>" class="btn btn-danger btn-sm"><span
                                        class="fa fa-trash-alt fa-lg"></span></a>
                                <a href="actualizar.php?cliente_id=<?=$value?->cliente_id?>" class="btn btn-primary btn-sm"><span
                                        class="fa fa-edit fa-lg"></span></a>
                            </td>
                        </tr>

                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
</body>

</html>