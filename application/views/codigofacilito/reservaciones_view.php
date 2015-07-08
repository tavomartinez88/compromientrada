<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entradas Vendidas</title>

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
            
          <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>index.php/evento_controller">Eventos</a></li>
                  <li class="active">Entradas vendidas</li>
          </ol>
           <br><br>
            <?php if($this->session->userdata('categoria')=='Administrador'){ ?>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a Nuevo Usuario"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a><?php }?> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a><br><br>    
          <h1>Eventos <small>entradas vendidas</small></h1>
          
      
   
    
    <?php 
        if(empty($listado)){?>
            <h1><b>Sin ventas en este evento</b></h1>
        <?php }
        else{?>
            <h1><b>Tienes <?php echo count($listado)?> ventas(s) realizadas</b></h1>
            <div class="table-responsive">
              <table class="table table-hover">
                <tr>
                  <td>N° de venta</td>
                  <td>N° de butaca</td>
                  <td>N° Fila</td>
                  <td>Forma de pago</td>
                  <td>precio</td>
                  <td>Vendedor</td>
                  <td>Tipo de operacion</td>    
                </tr>
                <?php  foreach($listado as $reserve){ echo "<tr>"?>
                   <?php echo '<td>'.$reserve->id.'</td>';
                        echo '<td>'.$reserve->id_butaca.'</td>';
                        echo '<td>'.$reserve->fila.'</td>';
                        echo '<td>'.$reserve->formaPago.'</td>';
                        echo '<td>'.$reserve->precio.'</td>';
                        $usr = new User_model();
                        $a = $usr->get_by_id($reserve->usuario);
                                                                                                     
                        echo '<td>'.$a[0]->firstname.','.$a[0]->lastname.'</td>';
                                                        
                  ?>
                
                
                
                <?php
                    if($this->session->userdata('categoria')=='Vendedor' and $reserve->usuario != $this->session->userdata('id')){ ?>
                        <td><a class="btn btn-danger" disabled="disabled" href="<?php echo base_url();?>index.php/entrada_controller/deleteEntrada/<?php echo $reserve->id ?>/<?php echo $reserve->evento ?>">Eliminar reservacion</a></td>
                   <?php }
                    else{?>
                        <td><a class="btn btn-danger" href="<?php echo base_url();?>index.php/entrada_controller/deleteEntrada/<?php echo $reserve->id ?>/<?php echo $reserve->evento ?>">Eliminar reservacion</a></td>
                <?php    }                                 
                ?>    
                
            <?php }
        }
        echo "</tr>";
    ?>
            </table>
        </div>               
        </div>              
 
            <br><br>
            <?php if($this->session->userdata('categoria')=='Administrador'){ ?>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a Nuevo Usuario"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a><?php }?> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a><br><br>
                
         
          <?php echo img('img/fota.jpg');?>  
      <!-- Main component for a primary marketing message or call to action -->


    </div>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  </body>
</html>

