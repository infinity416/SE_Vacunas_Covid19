<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>citios de vacunacion</title>
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
                        <option value="">Salón de Locomotoras Dias 27,28,29,30 de abril y 1 de mayo Horario 8:00 A.M a 2:00 P.M</option>
                        <option value="">UAA Dias 28,29,30 de abril y 1 de mayo Horario 8:00 A.M a 2:00 P.M</option>
                        <option value="">Foro de las Estrellas Dias 28,29,30 de abril y 1 de mayo Horario 8:00 A.M a 2:00 P.M</option>
                        <option value="">IV Cntenario Dias 28,29,30 de abril y 1 de mayo Horario 8:00 A.M a 2:00 P.M</option>
                        </select>
                        <br>
                        <select>
                        <option  selected>02 Asientos</option>
                        <option value="">CECYTEA de Asientos Dias -- Horario 8:00 A.M a 2:00 P.M</option>
                        <option value="">Centro de Bachillerato Tecnologico Agropecuario 40 "CBTA40" Dias -- Horario 8:00 A.M a 2:00 P.M</option>
                        </select>
                        <br>
                        <select>
                        <option  selected>03 Calvillo</option>
                        <option value="">Parque Infantil Dias -- Horario 8:00 A.M a 2:00 P.M</option>
                        <option value="">CECATI 186 DGCFT Dias -- Horario 8:00 A.M a 2:00 P.M</option>
                        </select>
                        <br>
                        <!--<select>
                        <option  selected>04 Cosío</option>
                        <option value="">Sin Resultados                                      </option>
                        </select>
                        <br>
                        <select>
                        <option  selected>05 Jesús María</option>
                        <option value="">Sin Resultados                                      </option>
                        </select>
                        <br>-->
                        <select>
                        <option  selected>06 Pabellón de Arteaga</option>
                        <option value="">Secundaria Técnica Número 3 José Ángel Ceniceros Dias-- Horarios 8:00 A.M a 2:00 P.M</option>
                        </select>
                       <!-- <br>
                        <select>
                        <option  selected>07 Rincón de Romos</option>
                        <option value="">Sin Resultados                                      </option>
                        </select>
                        <br>
                        <select>
                        <option  selected>08 San José de Gracia</option>
                        <option value="">Sin Resultados                                      </option>
                        </select>
                        <br>
                        <select>
                        <option  selected>09 Tepezalá</option>
                        <option value="">Sin Resultados                                      </option>
                        </select>
                        <br>
                        <select>
                        <option  selected>10 El Llano</option>
                        <option value="">Sin Resultados                                      </option>
                        </select>
                        <br>
                        <select>
                        <option  selected>11 San Francisco de los Romo</option>
                        <option value="">Sin Resultados                                      </option>
                        </select>-->
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