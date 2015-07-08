<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios Registrados</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="container">
             <?php
                echo img('img/encabezado.jpg');
                echo"<br>";?>
        <div class="page-header">
          <div align="right"><a  href="<?php echo base_url();?>index.php/welcome/outSession"><?php echo img('img/out.png');?></a></div>
          
                <a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/addUser" title="ir a Nuevo Usuario"><?php echo img('img/usuario.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a>
            
    <h1>Administracion <small>usuarios</small></h1>
          
 
   
    
    <?php 
        if(empty($listado)){?>
            <h1><b>Sin contactos</b></h1>
        <?php }
        else{?>
            <h1><b>Tienes <?php echo count($listado)?> contacto(s)</b></h1>
            <div class="table-responsive">
              <table class="table table-hover">
                <tr>
                 
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Nombre de Usuario</td>
                  <td>Clave</td>
                  <td>Tipo de Usuario</td>
                  <td>Tipo de operacion</td>    
                </tr>
                <?php  foreach($listado as $user){ echo "<tr>"?>
                   <?php echo '<td>'.$user->firstname.'</td>';
                echo '<td>'.$user->lastname.'</td>';
                echo '<td>'.$user->username.'</td>';
                echo '<td>'.$user->pass.'</td>';
                echo '<td>'.$user->tipoUsuario.'</td>';?>
                <td><a  class="btn btn-info" href="<?php echo base_url();?>index.php/usuario_controller/editUser/<?php echo $user->id ?>">Actualizar Usuario</a>
                <a class="btn btn-danger" href="<?php echo base_url();?>index.php/usuario_controller/deleteUser/<?php echo $user->id ?>">Eliminar Usuario</a></td>
            <?php }
        }
        echo "</tr>";
    ?>
            </table>
        </div>               
        </div>              
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/addUser" title="ir a Nuevo Usuario"><?php echo img('img/usuario.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
           
                
         
          <?php echo img('img/fota.jpg');?>  
      <!-- Main component for a primary marketing message or call to action -->


    </div>  
  
    <?php
        
           /* echo heading('hola',3);
            echo img('img/algo.jpg');*/
        
    ?>  
      
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  </body>
</html>

