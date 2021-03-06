<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar Registrados</title>

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
          <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>index.php/usuario_controller">Teatros</a></li>
                  <li class="active">Eliminar teatro</li>
              </ol>
              <a  href="<?php echo base_url();?>index.php/welcome/outSession"><?php echo img('img/out.png');?></a>
          
          <h1>Teatros <small>eliminar teatro</small></h1>
          Esta seguro que quiere eliminar el teatro <b><?php echo $datos_teatro[0]->nombre; ?>?</b><br>

            <?php 
                $input_id = array(
                                    'id' => $datos_teatro[0]->id
                                 );
            ?>

            <?php echo form_open() ?>

            <!--defino un campo oculto,sera oculto desde un punto grafico 
                pero no desde un punto de vista de la programacion-->
            <?php echo form_hidden($input_id) ?><br/>
            <?php echo form_submit('btn_eliminar','Si deseo eliminarlo') ?>
            <?php echo form_close() ?>    
           <br><a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/addUser" title="ir a Nuevo Usuario"><?php echo img('img/usuario.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="#" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
           
                
         
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
