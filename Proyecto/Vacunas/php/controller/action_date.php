<?php
if( isset($_GET["mun"]) ){
    $municipio=($_GET['mun']);
    $Aguascaliente="Aguascalientes";
    $as="Asientos";
    $ca="Calvillo";
    $co="Cosio";
    $jm="Jesus maria";
    $pa="Pabellon de arteaga";
    $rr="Rincon de romos";
    $jg="San jose de gracia";
    $te="Tepezala";
    $fr="San francisco de los romo";
    $el="El llano";
		if($municipio == $Aguascaliente){
            print"<script>window.location='../views/l_a.php';</script>";
        }
        else{
           if($municipio == $jm) {
                print"<script>window.location='../views/l_a.php';</script>";
           }else{
               if($municipio == $pa) {
                    print"<script>window.location='../views/l_p.php';</script>";
                }else{
                    if($municipio == $rr) {
                        print"<script>window.location='../views/l_p.php';</script>";
                    }else{
                        if($municipio == $co) {
                            print"<script>window.location='../views/l_p.php';</script>";
                        }else{
                            if($municipio == $jg) {
                                print"<script>window.location='../views/l_p.php';</script>";
                            }else{
                                if($municipio == $fr) {
                                    print"<script>window.location='../views/l_p.php';</script>";
                                }else{
                                    if($municipio == $as) {
                                        print"<script>window.location='../views/l_t.php';</script>";
                                    }else{
                                        if($municipio == $el) {
                                            print"<script>window.location='../views/l_t.php';</script>";
                                        }else{
                                            if($municipio == $te) {
                                                print"<script>window.location='../views/l_t.php';</script>";
                                            }else{
                                                if($municipio == $ca) {
                                                    print"<script>window.location='../views/l_c.php';</script>";
                                                }else{
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
           }
        }
}else{
    echo 'No se han recibido datos';
}
?>
