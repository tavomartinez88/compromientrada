<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teatros</title>

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
                  <li class="active">Eliminar usuario</li>
              </ol>
              <a  href="<?php echo base_url();?>index.php/welcome/outSession"><?php echo img('img/out.png');?></a>
            <br>           <br><a class="btn btn-default "  href="<?php echo base_url();?>index.php/usuario_controller/" title="ir usuarios"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " disabled="disabled" href="<?php echo base_url();?>index.php/teatro_controller"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
          <h1>Administracion <small>teatros</small></h1>
    <?php 
        if(empty($listado)){?>
            <h1><b>Sin teatros</b></h1>
        <?php }
        else{?>
            <h1><b>Tienes <?php echo count($listado)?> teatro(s)</b></h1>
            <div class="table-responsive">
              <table class="table table-hover">
                <tr>
                
                  <td>Nombre</td>
                  <td>Direccion</td>
                  <td>Telefono</td>
                  <td>Creador</td>
                  <td>Operaciones</td>    
                </tr>
                <?php  
                       foreach($listado as $teatro){ echo "<tr>"
                ?>
                  
                <?php 
                
                echo '<td>'.$teatro->nombre.'</td>';
                echo '<td>'.$teatro->direccion.'</td>';
                echo '<td>'.$teatro->telefono.'</td>';
                $this->load->model('User_model');
                $usr = new User_model();
                $a = $usr->get_by_id($this->session->userdata('id'));
                echo '<td>'.$a[0]->firstname.','.$a[0]->lastname.'</td>';
                ?>
                <td><a  class="btn btn-info" href="<?php echo base_url();?>index.php/teatro_controller/editTeatro/<?php echo $teatro->id ?>">Actualizar Teatro</a>
                <a  class="btn btn-success" href="<?php echo base_url();?>index.php/evento_controller/do_upload/<?php echo $teatro->id ?>">Crear Evento</a>    
                
                </td>
            <?php }
        }
        echo "</tr>";
    ?>
            </table>
        </div>      
           <br><a class="btn btn-default "  href="<?php echo base_url();?>index.php/usuario_controller/" title="ir usuarios"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " disabled="disabled" href="<?php echo base_url();?>index.php/teatro_controller"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
            
                
         
          <?php echo img('img/fota.jpg');?>  
      <!-- Main component for a primary marketing message or call to action -->


    </div>  

      
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
 </body>
</html>

