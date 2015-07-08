<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eventos</title>

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
                  <li>
                      <?php  if($this->session->userdata('categoria')=='Administrador'){ ?>
                        <a href="<?php echo base_url();?>index.php/teatro_controller">
                            <?php echo"Teatros"; }?>
                        </a>
                      
                 </li>
                  <li class="active">eventos</li>
              </ol>
              <a  href="<?php echo base_url();?>index.php/welcome/outSession"><?php echo img('img/out.png');?></a>
              <br><br><?php if($this->session->userdata('categoria')=='Administrador'){?>
            <br><a class="btn btn-default "  href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a Usuario">
                    <?php echo img('img/manager.png');?>
                </a>
            <a class="btn btn-default "  href="<?php echo base_url();?>index.php/teatro_controller"><?php echo img('img/starting.png');?></a><?php } ?> 
            <a class="btn btn-default " href="#" disabled="disabled" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
            
              <h1>
                  <?php 
                    if($this->session->userdata('categoria')=='administrador'){
                        echo"Administracion";}else{echo"Ventas";} ?> <small>eventos</small>
              </h1>
              <?php 
                if(empty($lista)){?>
                    <h1><b>Sin Eventos</b></h1>
                <?php }
                else{?>
                    
                    <?php  
                       foreach($lista as $evento){ echo "<tr>";
                       if($evento->fecha>=date("Y-m-d")){
                
                    ?>
                    <!--<td><img src="/CodeIgniter/img/uploads/images1.png" ></td>  -->
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-xs-12 col-md-3">
                                    <a href="#" class="thumbnail">
                                        <?php echo '<td><img src="/admin/img/uploads/'.$evento->imagen.'"width="250" height="250"></td>';?>
                                    </a>
                                    <td>
                                        <?php if($this->session->userdata('categoria')=='Administrador'){?>
                                        <a  class="btn btn-info" href="<?php echo base_url();?>index.php/evento_controller/editEvento/<?php echo $evento->id;?>">Actualizar</a>
                                        <a  class="btn btn-danger" href="<?php echo base_url();?>index.php/evento_controller/deleteEvento/<?php echo $evento->id;?>">Eliminar evento</a>
                                        </td><?php } ?>
                                        <br><br><td><a  class="btn btn-success" href="<?php echo base_url();?>index.php/entrada_controller/addIn/<?php echo $evento->id;?>">Vender</a>
                                    <a  class="btn btn-primary" href="<?php echo base_url();?>index.php/entrada_controller/reservaciones/<?php echo $evento->id;?>">Entradas vendidas</a></td>
                                </div>
                                <div class="col-xs-4 col-md-3">          
                                <?php                      
                                  echo '<b>Nombre :</b> '.$evento->nombre.'<br>';
                                  echo '<b>Descripcion : </b>'.$evento->descripcion.'<br>'?>
                                      
                                  
                                    <?php echo '<b>Fecha :</b> '.$evento->fecha.'<br>';                                                  
                                        echo '<b>Horario :</b>'.$evento->hora.'<br>';
                                        $a = new Teatro_model();
                                        $a = $this->Teatro_model->get_by_id($evento->teatro);
                                        echo "<b>Teatro :</b> ".$a[0]->nombre;
                                    ?>
                                </div>    
                            </div>
                        </div>
                  </div>
            <?php }
                    }       
                    echo "</tr>";
            }?>
            <?php if($this->session->userdata('categoria')=='Administrador'){?>
            <br><a class="btn btn-default "  href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a Usuario">
                    <?php echo img('img/manager.png');?>
                </a>
            <a class="btn btn-default "  href="<?php echo base_url();?>index.php/teatro_controller"><?php echo img('img/starting.png');?></a> 
            <a class="btn btn-default " href="#" disabled="disabled" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
            <?php } ?>
            <?php echo img('img/fota.jpg');?>  
      <!-- Main component for a primary marketing message or call to action -->
         </div><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
 </body>
</html>


