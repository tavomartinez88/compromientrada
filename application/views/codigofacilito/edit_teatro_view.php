<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>actualizar teatro</title>

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
                  <li><a href="<?php echo base_url();?>index.php/teatro_controller">Teatros</a></li>
                  <li class="active">Actualizar teatro</li>
              </ol>
              <a  href="<?php echo base_url();?>index.php/welcome/outSession"><?php echo img('img/out.png');?></a>
           <br><br><a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a usuario"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="#" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
          
          
          <h1>Teatros <small>editar teatro</small></h1><br>
             
          <center>
               <?php /*echo validation_errors(); */?>
    <?php echo form_open() ?>
    <?php echo form_label('Nombre','lbl_nombre') ?><br>
    <?php 
        $input_firstname = array(
              'name'        => 'nombre',
              'id'          => 'nombre',
              'maxlength'   => '20',
              'size'        => '100',
              'value'       => set_value('firstname',@$datos_teatro[0]->nombre),
              
            );
            echo form_input($input_firstname); 
    ?><?php echo form_error('nombre')?><br><br>
    <?php echo form_label('Direccion','lbl_apellido') ?><br>
    <?php 
        $input_lastname = array(
              'name'        => 'direccion',
              'id'          => 'direccion',
              'maxlength'   => '20',
              'size'        => '100',
              'value'       => set_value('direccion',@$datos_teatro[0]->direccion),
              
            );
            echo form_input($input_lastname); 
    ?><?php echo form_error('direccion')?><br><br>
    <?php echo form_label('Telefono','lbl_user') ?><br>
    <?php 
        $input_username = array(
              'name'        => 'telefono',
              'id'          => 'telefono',
              'maxlength'   => '13',
              'size'        => '100',
              'value'       => set_value('telefono',@$datos_teatro[0]->telefono),
              
            );
            echo form_input($input_username); 
    ?><?php echo form_error('telefono')?><br><br>
    
    <?php echo form_submit('enviar', 'Continuar');?>
    
    <?php echo form_close() ?>
          </center>
            <!--defino un campo oculto,sera oculto desde un punto grafico 
                pero no desde un punto de vista de la programacion-->
              
           <br><a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a Nuevo Usuario"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="#" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
               
            
                
         
          <?php echo img('img/fota.jpg');?>  
      <!-- Main component for a primary marketing message or call to action -->


    </div>  
  
   
      
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
 </body>
</html>
