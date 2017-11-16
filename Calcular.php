<?php
    $nombre = $_POST['nombre'];
    $sueldo = $_POST['sueldo'];
    $bonificaciones = $_POST['bonificaciones'];
    $comisiones = $_POST['comisiones'];
    $devengado = sueldoDevengado($sueldo, $bonificaciones, $comisiones);
    $descuento = $_POST['descuento'];
    $igss = dimeIgss($devengado);
    $totalDescontado = totalDescontado($descuento,$igss);
    $total = sueldoTotal($devengado, $totalDescontado);
    $concatena = concatenaTodo($nombre, $sueldo, $bonificaciones, $comisiones, $devengado, $descuento, $igss, $totalDescontado, $total);
    
   function sueldoDevengado($sueldo, $bonificaciones, $comisiones){
        return $sueldo + $bonificaciones + $comisiones;
    }
    function dimeIgss($devengado){
        return ($devengado * (4.83/100));
    }
    function totalDescontado($descuento, $igss){
        return $descuento + $igss;
    }
    function sueldoTotal($devengado, $totalDescontado){
        return $devengado - $totalDescontado;
    }
    function concatenaTodo($nombre, $sueldo, $bonificaciones, $comisiones, $devengado, $descuento, $igss, $totalDescontado, $sueldoTotal){
        return "Nombre: $nombre <br><br> Sueldo: $sueldo <br><br> Bonificaciones: $bonificaciones <br><br> Comisiones: $comisiones <br><br> Devengado: $devengado <br><br> Descuento: $descuento <br><br> 
        IGSS: $igss <br><br> Total Descontado: $totalDescontado <br><br> SueldoTotal: $sueldoTotal ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos</title>
    <link rel='stylesheet' href='estilos.css'>
</head>
<body>
   <?php
    
    echo "<p id='concatena'>$concatena</p>";
    ?>
    
</body>
</html>