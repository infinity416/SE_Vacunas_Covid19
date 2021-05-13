<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <title>Informate Vacunacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php include "php/views/navs/navbar.html"?>
    <br><br>
    <div>
        <center><h1>¡Bienvenido!</h1></center>
    </div>
    <br>
    <div class="container">
        <div class="row" >
            <div class="col-md-6 offset-md-3" style="background-color: #e2e4e7">
            <center><p><b>Antes de Iniciar le pedimos que llene los siguentes datos.</b></p></center> 
            <br>
                <form action="php/controller/action_date.php" get="POST">
                <!--<div class="col-md-6 ">
                <label for="" class="form-label">Primer Apellido</label>
                    <input type="text" class="form-control" id="#" required>
                </div>
                <br>-->
                <div class="col-md-6 ">
                <label for="" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="#" required>
                </div>
                <br>
                <div class="col-md-6 ">
                <label for="" class="form-label">Municipio</label>
                    <select class="form-control" id="" require name="mun">
                        <option>Opciones...</option>
                        <option value="Aguascalientes">Aguascalientes</a> </option>
                        <option value="Asientos">Asientos</option>
                        <option value="Calvillo">Calvillo</option>
                        <option value="Cosio">Cosío</option>
                        <option value="Jesus maria">Jesús Maria</option>
                        <option value="Pabellon de arteaga">Pabellón de Arteaga</option>
                        <option value="Rincon de romos">Rincón de Romos</option>
                        <option value="San jose de gracia">San José de Gracia</option>
                        <option value="Tepezala">Tepezalá</option>
                        <option value="San francisco de los romo">San Francisco de los Romo</option>
                        <option value="El llano">El Llano</option>
                        <!--<option value="Baja California">Baja California</option>   
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option> 
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Ciudad de Mexico / Distrito Federal">Ciudad de México / Distrito Federal</option>   
                        <option value="Durango">Durango</option>
                        <option value="Estado de Mexico">Estado de México</option> 
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacan">Michoacán</option>   
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option> 
                        <option value="Nuevo Leon">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Queretaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>   
                        <option value="San Luis Potosi">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option> 
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatan">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>-->
                    </select>
                </div>
                <br>
                <center><button type="sumbit" class="btn" style="background-color: #FBFD6D"><h3>Iniciar</h3></button></center>
                <br>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>