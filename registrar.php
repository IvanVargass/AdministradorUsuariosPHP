<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Usuarios</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="main" style="padding-top: 3em; max-width: 600px; margin: 0 auto;">
            <div class="row">
                <div class="col-md-12">
                    <!-- Material form contact -->
                    <div class="card">

                        <h5 class="card-header blue-gradient white-text text-center py-4">
                            <strong>Datos del Cliente</strong>
                        </h5>

                        <br>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="app/action_agregar.php" method="POST" role="form">

                                <!-- Name -->

                                <div class="md-form mt-3">
                                    <input type="text" id="materialContactFormName" class="form-control" required="" name="nombre">
                                    <label for="materialContactFormName">Nombres</label>
                                </div>

                                <!-- Apellidos -->
                                <div class="md-form">
                                    <input type="text" id="materialContactFormEmail" class="form-control" required="" name="apellidos">
                                    <label for="materialContactFormEmail">Apellidos</label>
                                </div>

                                <!-- DNI -->
                                <div class="md-form">
                                    <input type="number" id="materialContactFormEmail" class="form-control" required="" name="dni">
                                    <label for="materialContactFormEmail">DNI</label>
                                </div>

                                <!-- E-mail -->
                                <div class="md-form">
                                    <input type="email" id="materialContactFormEmail" class="form-control" required="" name="correo">
                                    <label for="materialContactFormEmail">Correo</label>
                                </div>

                                <!-- Distrito -->
                                <div class="md-form">
                                    <label for="materialContactFormEmail">Distrito</label>
                                    <br>
                                    <br>

                                    <?php

                                    require 'app/distrito.php';
                                    $distrito = new Distrito();
                                    $lista = $distrito->ListarDistritos();

                                    ?>

                                    <select name="distrito_id" class="browser-default custom-select" required="">
                                        <option selected>--SELECCIONAR--</option>

                                        <?php 
                                        foreach($lista as $value){

                                        ?>

                                        <option value="<?=$value->distrito_id?>"><?=$value->nombre?></option>

                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>


                                <br>
                                <!-- Send button -->
                                <button class="btn blue-gradient btn-block" style="max-width:160px; margin: 0 auto;"
                                    type="submit"><span class="fa fa-paper-plane fa-lg"
                                        style="padding-right:17px;"></span>Enviar</button>

                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                    <!-- Material form contact -->
                </div>
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