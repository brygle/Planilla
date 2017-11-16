<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planilla</title>
    <link rel='stylesheet' href='estilos.css'>
</head>
<body>
 <div id='planilla'>
  <h2>Planilla</h2>
   <form action="Calcular.php" method="post">
       <label>Nombre: </label>
       <input type='text' name='nombre' placeholder='Nombre' id='' class=''><br><br>
       <label>Sueldo: </label>
       <input type='text' name='sueldo' placeholder='Sueldo' id='' class=''><br><br>
       <label>Bonificaciones: </label>
       <input type='text' name='bonificaciones' placeholder='Bonificaciones' id='' class=''><br><br>
       <label>Comisiones: </label>
       <input type='text' name='comisiones' placeholder='Comisiones' id='' class=''><br><br>
       <label>Descuento: </label>
       <input type='text' name='descuento' placeholder='Descuento' id='' class=''><br><br>
       <input type='submit' value='Calcular' name='calcular'><br><br>
   </form>
   
 
    </div>
</body>
</html>