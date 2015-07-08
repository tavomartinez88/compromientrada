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
                  <li><a href="<?php echo base_url();?>index.php/usuario_controller">Administracion</a></li>
                  <li class="active">Nuevo usuario</li>
              </ol>
              <a  href="<?php echo base_url();?>index.php/welcome/outSession"><?php echo img('img/out.png');?></a>
            <br><br>
            <a class="btn btn-default " disabled="disabled" href="<?php echo base_url();?>index.php/usuario_controller/addUser"><?php echo img('img/usuario.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
        <a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a usuarios"><?php echo img('img/manager.png');?></a>    
           
          
          <h1>Usuarios <small>Nuevo usuario</small></h1>
            <br>
            <center>
                <?php echo form_open() ?>
    <?php echo form_label('Nombre','lbl_nombre') ?><br>
    <?php 
        $input_firstname = array(
              'name'        => 'firstname',
              'id'          => 'firstname',
              'maxlength'   => '20',
              'size'        => '100',
              'value'       => set_value('firstname',@$datos_usuario[0]->firstname),
              
            );
            echo form_input($input_firstname); 
    ?><?php echo form_error('firstname')?><br><br>
    <?php echo form_label('Apellido','lbl_apellido') ?><br>
    <?php 
        $input_lastname = array(
              'name'        => 'lastname',
              'id'          => 'lastname',
              'maxlength'   => '20',
              'size'        => '100',
              'value'       => set_value('lastname',@$datos_usuario[0]->lastname),
              
            );
            echo form_input($input_lastname); 
    ?><?php echo form_error('lastname')?><br><br>
    <?php echo form_label('Nombre de usuario','lbl_user') ?><br>
    <?php 
        $input_username = array(
              'name'        => 'username',
              'id'          => 'username',
              'maxlength'   => '10',
              'size'        => '100',
              'value'       => set_value('username',@$datos_usuario[0]->username),
              
            );
            echo form_input($input_username); 
    ?><?php echo form_error('username')?><br><br>
    <?php echo form_label('Clave','lbl_pass') ?><br>
    <?php 
        $input_password = array(
              'name'        => 'pass',
              'id'          => 'pass',
              'maxlength'   => '10',
              'size'        => '100',
              'value'       => set_value('pass',@$datos_usuario[0]->pass),
              
            );
            echo form_password($input_password); 
    ?><?php echo form_error('pass')?><br><br>
    <?php echo form_label('Tipo de usuario','lbl_type_user') ?><br>
    <?php  
        $options = array('Vendedor'  => 'Vendedor','Administrador' => 'Administrador');
        echo form_dropdown('tipoUsuario', $options, set_value('tipoUsuario',@$datos_usuario[0]->tipoUsuario));
    
    ?><?php echo form_error('tipoUsuario')?><br><br>
    <?php echo form_submit('enviar', 'guardar');?>
    
    <?php echo form_close() ?>
            </center>
            
           <br><a class="btn btn-default " disabled="disabled" href="<?php echo base_url();?>index.php/usuario_controller/addUser"><?php echo img('img/usuario.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a usuarios"><?php echo img('img/manager.png');?></a>    
           
                
         
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
