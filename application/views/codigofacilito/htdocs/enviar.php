<?php
session_start();
//1. Crear conexión a la Base de Datos
$conexion = mysql_connect("sql310.byetcluster.com","mipc_13637964","33833434");
if (!$conexion) {
    die("Fallo la conexión a la Base de Datos: " . mysql_error());
}
//2. Seleccionar la Base de Datos a utilizar
$seleccionar_bd = mysql_select_db("mipc_13637964_mail", $conexion);
if (!$seleccionar_bd) {
    die("Fallo la selección de la Base de Datos: " . mysql_error());
}
//3. Tomar los campos provenientes del Formulario
$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido'];
$email = $_POST['mail'];
$mensaje = $_POST['mensaje'];








//4. Insertar campos en la Base de Datos (No inserto el id_empleado ya que se genera automaticamente)

$con = mysql_query("INSERT INTO correos (nombre , apellido , email , descripcion ) 
                       VALUES ('$nombre' , '$apellido' ,'$email' ,'$mensaje')", $conexion);
if ($con) {
      
      
   echo"<script type=\"text/javascript\">alert('Felicitaciones se enviado con exito'); window.location='index.html';</script>";
      
      # code...
}
else{
      echo"<script type=\"text/javascript\">alert('Lo sentimos no pudo ser enviuado el mensaje'); window.location='index.html';</script>";  
}




//4. Cerrar conexión a la Base de Datos


?>
