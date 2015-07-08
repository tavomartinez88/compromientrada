<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Evento</title>
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
     <div class="container">
             <?php
                echo img('img/encabezado.jpg');
                echo"<br>";?>
        <div class="page-header">
          <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>index.php/evento_controller">Eventos</a></li>
                  <li class="active">Editar evento</li>
              </ol>
              <a  href="<?php echo base_url();?>index.php/welcome/outSession"><?php echo img('img/out.png');?></a>
          <br><br><a class="btn btn-default "  href="<?php echo base_url();?>index.php/usuario_controller/"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
           <a class="btn btn-default " href="#" disabled="disabled"><?php echo img('img/newteatro.png');?></a>
          <h1>Administracion <small>Actualizacion de evento</small></h1>
            <br>

            
            
             
            <?php
                $route = 'evento_controller/editEvento/'.$datos_id;
                echo form_open_multipart($route);?>
                <?php echo form_label('Nombre','lbl_nombre') ?><br>
                <?php 
                    $input_nombre = array(
                          'name'        => 'nombre',
                          'id'          => 'nombre',
                          'maxlength'   => '50',
                          'size'        => '100',
                          'value'       => set_value('nombre',@$datos_evento[0]->nombre),

                        );
                        echo form_input($input_nombre); 
                ?><?php echo form_error('nombre')?><br><br>
                <?php echo form_label('Descripcion','lbl_descripcion') ?><br>
                <?php 
                    $input_descripcion = array(
                          'name'        => 'descripcion',
                          'id'          => 'descripcion',
                          'maxlength'   => '5000',
                          'size'        => '100',
                          'rows'        => '5',
                          'cols'        => '100',
                          'value'       => set_value('descripcion',@$datos_evento[0]->descripcion),

                        );
                        echo form_textarea($input_descripcion); 
                ?><?php echo form_error('descripcion')?><br><br>
               
                <div class="row">
                    <div class="col-md-3">
                       <?php echo form_label('Fecha','lbl_fecha') ?>
                            <input type="date" name="fecha" min="2015-01-01" max="2054-12-31" required value="<?php @$datos_evento[0]->fecha?>">
                        <?php echo form_error('fecha')?>
                  </div>    
                  <div class="col-md-4">
                    <?php echo form_label('Horario','lbl_type_user') ?>
                        <input type="time" name="hora" min="00:00" max="23:59" required>
                    <?php echo form_error('horario')?>
                  </div>
                
                  <div class="col-md-3">
                     
                  </div>
                </div>
                <?php 
                    $id_user = $this->session->userdata('id');
                    $input_id_user = array(
                                        'usuario' => $id_user,
                                     );
                ?>

                <?php echo form_hidden($input_id_user) ?><br/>
                <?php 
                    $id_teatro = 1;
                    $input_id_teatro = array(
                                        'teatro' => $id_teatro,
                                     );
                ?>

                <?php echo form_hidden($input_id_teatro) ?><br/>
                <!--<input type="file" name="userfile" size="20" />-->
                            <label>Precios de evento</label><br><br>
            <?php echo form_label('Precio 1','lbl_precio1') ?><br>
                <?php 
                    $input_precio1 = array(
                          'name'        => 'precio1',
                          'id'          => 'precio1',
                          'maxlength'   => '6',
                          'size'        => '100',
                          'value'       => set_value('precio',@$datos_evento[0]->precio1),

                        );
                        echo form_input($input_precio1); 
                ?><?php echo form_error('precio1')?><br><br>
            <?php echo form_label('Precio 2','lbl_precio2') ?><br>
                <?php 
                    $input_precio2 = array(
                          'name'        => 'precio2',
                          'id'          => 'precio2',
                          'maxlength'   => '6',
                          'size'        => '100',
                          'value'       => set_value('precio2',@$datos_evento[0]->precio2),

                        );
                        echo form_input($input_precio2); 
                ?><?php echo form_error('precio2')?><br><br>
            <?php echo form_label('Precio 3','lbl_precio3') ?><br>
                <?php 
                    $input_precio3 = array(
                          'name'        => 'precio3',
                          'id'          => 'precio3',
                          'maxlength'   => '6',
                          'size'        => '100',
                          'value'       => set_value('precio3',@$datos_evento[0]->precio3),

                        );
                        echo form_input($input_precio3); 
                ?><?php echo form_error('precio3')?><br><br>
            <?php echo form_label('Percio 4','lbl_precio4') ?><br>
                <?php 
                    $input_precio4 = array(
                          'name'        => 'precio4',
                          'id'          => 'precio4',
                          'maxlength'   => '6',
                          'size'        => '100',
                          'value'       => set_value('precio4',@$datos_evento[0]->precio4),

                        );
                        echo form_input($input_precio4); 
                ?><?php echo form_error('precio4')?><br><br>
            <?php echo form_label('Precio 5','lbl_precio5') ?><br>
                <?php 
                    $input_precio5 = array(
                          'name'        => 'precio5',
                          'id'          => 'precio5',
                          'maxlength'   => '6',
                          'size'        => '100',
                          'value'       => set_value('precio5',@$datos_evento[0]->precio5),

                        );
                        echo form_input($input_precio5); 
                ?><?php echo form_error('precio5')?><br><br>
            <?php echo form_label('Precio 6','lbl_precio6') ?><br>
                <?php 
                    $input_precio6 = array(
                          'name'        => 'precio6',
                          'id'          => 'precio6',
                          'maxlength'   => '6',
                          'size'        => '100',
                          'value'       => set_value('precio6',@$datos_evento[0]->precio6),

                        );
                        echo form_input($input_precio6); 
                ?><?php echo form_error('precio6')?><br><br>
            <?php echo form_label('Precio 7','lbl_precio7') ?><br>
                <?php 
                    $input_precio7 = array(
                          'name'        => 'precio7',
                          'id'          => 'precio7',
                          'maxlength'   => '6',
                          'size'        => '100',
                          'value'       => set_value('precio7',@$datos_evento[0]->precio7),

                        );
                        echo form_input($input_precio7); 
                ?><?php echo form_error('precio7')?><br><br>
            <?php echo form_label('Precio 8','lbl_precio8') ?><br>
                <?php 
                    $input_precio8 = array(
                          'name'        => 'precio8',
                          'id'          => 'precio8',
                          'maxlength'   => '50',
                          'size'        => '100',
                          'value'       => set_value('precio8',@$datos_evento[0]->precio8),

                        );
                        echo form_input($input_precio8); 
                ?><?php echo form_error('precio8')?><br><br>
            <?php echo form_label('Precio 9','lbl_precio9') ?><br>
                <?php 
                    $input_precio9 = array(
                          'name'        => 'precio9',
                          'id'          => 'precio9',
                          'maxlength'   => '50',
                          'size'        => '100',
                          'value'       => set_value('precio9',@$datos_evento[0]->precio9),

                        );
                        echo form_input($input_precio9); 
                ?><?php echo form_error('precio9')?><br><br>
            <?php echo form_label('Precio 10','lbl_precio10') ?><br>
                <?php 
                    $input_precio10 = array(
                          'name'        => 'precio10',
                          'id'          => 'precio10',
                          'maxlength'   => '50',
                          'size'        => '100',
                          'value'       => set_value('precio10',@$datos_evento[0]->precio10),

                        );
                        echo form_input($input_precio10); 
                ?><?php echo form_error('precio10')?><br><br>
            
          <br /><br />

                <?php echo form_submit ('enviar', 'Guardar'); ?>
            <?=form_close()?>    
            </center>
           <br><a class="btn btn-default "  href="<?php echo base_url();?>index.php/usuario_controller/"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a> 
           <a class="btn btn-default " href="#" disabled="disabled"><?php echo img('img/newteatro.png');?></a>     
           
        
         
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