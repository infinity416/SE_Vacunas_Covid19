<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letra del alfabeto</title>
    <link rel="stylesheet" href="../../css/bootstrap.busca.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
    <?php include "navs/navusrbusc.html"?>
    <br><br>
    <div class="container">
        <div class="row">
            <table class=" table col-md-8 offset-md-2">
                <tr>
                    <th>
                        <img src="../../img/icon/lupa_color.png" width="50">
                    </th>
                    <th>
                        <input class="form-control" type="search" id="input-search" placeholder="Buscar" >
                        <div class="content-search">
                            <div class="content-table">
                                <table id="table">
                                    <thead>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="vacunas.php" style="color:#000">cantidad de vacunas</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="lugares.php" style="color:#000">lugares de vacunacion y horarios</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="fila.php" style="color:#000">letra del alfabeto aplicacion de vacuna</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </th>
                    <th>
                        <b><figure  
                                title="Puede que te interesen estos temas:
                                *Cantidad de Vacunas
                                *Lugares de Vacunacion
                                *Letra del Alfabeto que estan aplicando" 
                                tooltip-dir="left" 
                        > 
                            <img src="../../img/icon/info2.png" width="60">
                        </figure></b>   
                    </th>
                </tr>
            </table>
        </div>
        <br>
            <div class="col-md-10 offset-md-1" style="background-color: #e2e4e7">
                <table>
                    <th>
                        <tr>
                        <center><img src="../../img/medico_Maestros.png" width="800"></center>
                        </tr>
                    </th>
                </table>
            </div>
    </div>
</body>
<script src="../../js/jquery.js"></script>
<script src="../../js/jquery.dataTables.min.js"></script>
<script src="../../js/search.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</html>