<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vacunas disponibles</title>
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
                        <center><img src="../../img/aguascalientes_est.png" width="500"></center>
                        </tr>
                    </th>
                    <br>
                    <th>
                    <tr>
                    <center>
                        <form action="">
                        <select>
                        <option  selected>01 Aguascalientes</option>
                        <option value="">38,780 Disponibles</option>
                        </select>
                        <select>
                        <option  selected>02 Asientos</option>
                        <option value="">   5,000 Disponibles</option>
                        </select>
                        <select>
                        <option  selected>03 Calvillo</option>
                        <option value="">   5,000 Disponibles</option>
                        </select>
                        <!--<select>
                        <option  selected>04 Cos??o</option>
                        <option value="">Sin Resultados</option>
                        </select>
                        <select>
                        <option  selected>05 Jes??s Mar??a</option>
                        <option value="">   1500 Disponibles</option>
                        </select>-->
                        <select>
                        <option  selected>06 Pabell??n de Arteaga</option>
                        <option value="">   15,000 Disponibles</option>
                        </select>
                        <!--<select>
                        <option  selected>07 Rinc??n de Romos</option>
                        <option value="">   1500 Disponibles</option>
                        </select>
                        <select>
                        <option  selected>08 San Jos?? de Gracia</option>
                        <option value="">   1500 Disponibles</option>
                        </select>
                        <select>
                        <option  selected>09 Tepezal??</option>
                        <option value="">   500 Disponibles</option>
                        </select>
                        <select>
                        <option  selected>10 El Llano</option>
                        <option value="">   500 Disponibles</option>
                        </select>
                        <select>
                        <option  selected>11 San Francisco de los Romo</option>
                        <option value="">  1500 Disponibles</option> -->
                        </select>
                        </form>
                        </center>
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