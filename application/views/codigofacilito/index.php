<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compra tu entrada</title>

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
                echo"<br><br>";?>
        <div class="page-header">
          <h1>Bienvenido <small>compratuentrada.com.ar</small></h1>
             <div class="row">
                 <div class="col-xs-4 col-md-3">
                     <left>    
                     <?php echo img('img/logo.png');?>    
                     </left>
                 </div>
                 <div class="col-xs-4 col-md-3" style="float:right"><right>
                     <?php
        
        echo form_open() ?>
    
        <?php echo form_label('Nombre de usuario','lbl_user') ?><br>
        <?php 
            $input_username = array(
                  'name'        => 'username',
                  'id'          => 'username',
                  'maxlength'   => '10',
                  'size'        => '30',
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
                  'size'        => '30',
                  'value'       => set_value('pass',@$datos_usuario[0]->pass),

                );
                echo form_password($input_password); 
        ?><?php echo form_error('pass')?><br><br>

        <?php echo form_submit('enviar', 'Entrar');?>

    <?php echo form_close() ?>   
                     </div></right>
            </div>
               
        </div>              
    
                
         
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

