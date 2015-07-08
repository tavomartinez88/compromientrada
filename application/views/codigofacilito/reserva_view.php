
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entradas</title>

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
                  <li><a href="<?php echo base_url();?>index.php/evento_controller">Eventos</a></li>
                  <li class="active">entradas</li>
              </ol>
              <a  href="<?php echo base_url();?>index.php/welcome/outSession"><?php echo img('img/out.png');?></a>
              <br><br>
            <?php if($this->session->userdata('categoria')=='Administrador'){ ?>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a Nuevo Usuario"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a><?php }?> 
           <a class="btn btn-default " href="<?php echo base_url();?>index.php/evento_controller" title="ir a Eventos"><?php echo img('img/evento.png');?></a><br><br>
                        <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-xs-8 col-md-3">
                                    <a href="#" class="thumbnail">
                                    <?php 
                                    $evento = new Evento_model();
                                    $evento = $this->Evento_model->get_by_id($numero);
                                    
                                    echo '<td><img src="/admin/img/uploads/'.$evento[0]->imagen.'"width="250" height="250"></td>';?>
                                        
                                    </a>
                                    

                                </div>
                                <div class="col-xs-4 col-md-3">          
                                    <?php echo "<b>Nombre : </b>".$evento[0]->nombre;?><br>
                                    <?php echo "<b>Descripcion : </b>".$evento[0]->descripcion;?><br>
                                    <?php echo "<b>Fecha : </b>".$evento[0]->fecha;?><br>
                                    <?php echo "<b>Hora : </b>".$evento[0]->hora;?><br>
                                </div>    
                            </div>
                        </div>
                  </div>
             
              <?php echo form_open() ?>
              <?php echo form_label('seleccione las butaca(s)') ?><br>
              <table CELLSPACING="5" ALIGN="CENTER">
                  <tr bgcolor="LightGrey">
                      <td>#</td>
                      <td>01|</td>
                      <td>02|</td>
                      <td>03|</td>
                      <td>04|</td>
                      <td>05|</td>
                      <td>06|</td>
                      <td>07|</td>
                      <td>08|</td>
                      <td>09|</td>
                      <td>Pasillo|</td>
                      <td>10|</td>
                      <td>11|</td>
                      <td>12|</td>
                      <td>13|</td>
                      <td>14|</td>
                      <td>15|</td>
                      <td>16|</td>
                      <td>17|</td>
                      <td>18|</td>
                      <td>19|</td>
                      <td>20|</td>
                      <td>21|</td>
                      <td>22|</td>
                      <td>23|</td>
                      <td>24|</td>
                      <td>25|</td>
                      <td>26|</td>
                      <td>27|</td>
                      <td>28|</td>
                      <td>29|</td>
                      <td>30|</td>
                      <td>31|</td>
                      <td>Pasillo|</td>
                      <td>32|</td>
                      <td>33|</td>
                      <td>34|</td>
                      <td>35|</td>
                      <td>36|</td>
                      <td>37|</td>
                      <td>38|</td>
                      <td>39|</td>
                      <td>40|</td>
                      
                      
                  </tr>
           
                  <tr bgcolor="gray">
                      <td>01</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_1 = 1;
                        if($this->Entrada_model->existReserve($id_1,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='1' name='butacas[]'></td>";
                        }
                        $id_2 = 2;
                        if($this->Entrada_model->existReserve($id_2,$evento[0]->id)>0){
                            echo"<td bgcolor='gray'><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td bgcolor='gray'><input type='checkbox' value='2' name='butacas[]'></td>";
                        }
                        $id_3 = 3;
                        if($this->Entrada_model->existReserve($id_3,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='3' name='butacas[]'></td>";
                        }
                        $id_4 = 4;
                        if($this->Entrada_model->existReserve($id_4,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='4' name='butacas[]'><//td>";
                        }
                        $id_5 = 5;
                        if($this->Entrada_model->existReserve($id_5,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='5' name='butacas[]'></td>";
                        }
                        $id_6 = 6;
                        if($this->Entrada_model->existReserve($id_6,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='6' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_7 = 7;
                        if($this->Entrada_model->existReserve($id_7,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='7' name='butacas[]'></td>";
                        }
                        $id_8 = 8;
                        if($this->Entrada_model->existReserve($id_8,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='8' name='butacas[]'></td>";
                        }
                        $id_9 = 9;
                        if($this->Entrada_model->existReserve($id_9,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='9' name='butacas[]'></td>";
                        }
                        $id_10 = 10;
                        if($this->Entrada_model->existReserve($id_10,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='10' name='butacas[]'></td>";
                        }
                        $id_11 = 11;
                        if($this->Entrada_model->existReserve($id_11,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='11' name='butacas[]'></td>";
                        }
                        $id_12 = 12;
                        if($this->Entrada_model->existReserve($id_12,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='12' name='butacas[]'></td>";
                        }
                        $id_13 = 13;
                        if($this->Entrada_model->existReserve($id_13,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='13' name='butacas[]'></td>";
                        }
                        $id_14 = 14;
                        if($this->Entrada_model->existReserve($id_14,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='14' name='butacas[]'></td>";
                        }
                        $id_15 = 15;
                        if($this->Entrada_model->existReserve($id_15,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='15' name='butacas[]'></td>";
                        }
                        $id_16 = 16;
                        if($this->Entrada_model->existReserve($id_16,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='16' name='butacas[]'></td>";
                        }
                        $id_17 = 17;
                        if($this->Entrada_model->existReserve($id_17,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='17' name='butacas[]'></td>";
                        }
                        $id_18 = 18;
                        if($this->Entrada_model->existReserve($id_18,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='18' name='butacas[]'></td>";
                        }
                        $id_19 = 19;
                        if($this->Entrada_model->existReserve($id_19,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='19' name='butacas[]'></td>";
                        }
                        $id_20 = 20;
                        if($this->Entrada_model->existReserve($id_20,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='20' name='butacas[]'></td>";
                        }
                        $id_21 = 21;
                        if($this->Entrada_model->existReserve($id_21,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='21' name='butacas[]'></td>";
                        }
                       $id_22 = 22;
                        if($this->Entrada_model->existReserve($id_22,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='22' name='butacas[]'></td>";
                        }$id_23 = 23;
                        if($this->Entrada_model->existReserve($id_23,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='23' name='butacas[]'></td>";
                        }$id_24 = 24;
                        if($this->Entrada_model->existReserve($id_24,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='24' name='butacas[]'></td>";
                        }$id_25 = 25;
                        if($this->Entrada_model->existReserve($id_25,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='25' name='butacas[]'></td>";
                        }$id_26 = 26;
                        if($this->Entrada_model->existReserve($id_26,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='26' name='butacas[]'></td>";
                        }$id_27 = 27;
                        if($this->Entrada_model->existReserve($id_27,$evento[0]->id)>0){
                            echo"<td ><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td ><input type='checkbox' value='27' name='butacas[]'></td>";
                        }$id_28 = 28;
                        if($this->Entrada_model->existReserve($id_28,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='28' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";echo"<td></td>";echo"<td></td>";
                        echo"<td></td>";echo"<td></td>";
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                        
                      ?>
                  </tr >
                  <tr bgcolor="LightGrey">
                      <td>02</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_29 = 29;
                        if($this->Entrada_model->existReserve($id_29,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='29' name='butacas[]'></td>";
                        }
                        $id_30 = 30;
                        if($this->Entrada_model->existReserve($id_30,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='30' name='butacas[]'></td>";
                        }
                        $id_31 = 31;
                        if($this->Entrada_model->existReserve($id_31,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='31' name='butacas[]'></td>";
                        }
                        $id_32 = 32;
                        if($this->Entrada_model->existReserve($id_32,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='32' name='butacas[]'><//td>";
                        }
                        $id_33 = 33;
                        if($this->Entrada_model->existReserve($id_33,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='33' name='butacas[]'></td>";
                        }
                        $id_34 = 34;
                        if($this->Entrada_model->existReserve($id_34,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='34' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_35 = 35;
                        if($this->Entrada_model->existReserve($id_35,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='35' name='butacas[]'></td>";
                        }
                        $id_36 = 36;
                        if($this->Entrada_model->existReserve($id_36,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='36' name='butacas[]'></td>";
                        }
                        $id_37 = 37;
                        if($this->Entrada_model->existReserve($id_37,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='37' name='butacas[]'></td>";
                        }
                        $id_38 = 38;
                        if($this->Entrada_model->existReserve($id_38,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='38' name='butacas[]'></td>";
                        }
                        $id_39 = 39;
                        if($this->Entrada_model->existReserve($id_39,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='39' name='butacas[]'></td>";
                        }
                        $id_40 = 40;
                        if($this->Entrada_model->existReserve($id_40,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='40' name='butacas[]'></td>";
                        }
                        $id_41 = 41;
                        if($this->Entrada_model->existReserve($id_41,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='41' name='butacas[]'></td>";
                        }
                        $id_42 = 42;
                        if($this->Entrada_model->existReserve($id_42,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='42' name='butacas[]'></td>";
                        }
                        $id_43 = 43;
                        if($this->Entrada_model->existReserve($id_43,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='43' name='butacas[]'></td>";
                        }
                        $id_44 = 44;
                        if($this->Entrada_model->existReserve($id_44,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='44' name='butacas[]'></td>";
                        }
                        $id_45 = 45;
                        if($this->Entrada_model->existReserve($id_45,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='45' name='butacas[]'></td>";
                        }
                        $id_46 = 46;
                        if($this->Entrada_model->existReserve($id_46,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='46' name='butacas[]'></td>";
                        }
                        $id_47 = 47;
                        if($this->Entrada_model->existReserve($id_47,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='47' name='butacas[]'></td>";
                        }
                        $id_48 = 48;
                        if($this->Entrada_model->existReserve($id_48,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='48' name='butacas[]'></td>";
                        }
                        $id_49 = 49;
                        if($this->Entrada_model->existReserve($id_49,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='49' name='butacas[]'></td>";
                        }
                       $id_50 = 50;
                        if($this->Entrada_model->existReserve($id_50,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='50' name='butacas[]'></td>";
                        }$id_51 = 51;
                        if($this->Entrada_model->existReserve($id_51,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='51' name='butacas[]'></td>";
                        }$id_52 = 52;
                        if($this->Entrada_model->existReserve($id_52,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='52' name='butacas[]'></td>";
                        }$id_53 = 53;
                        if($this->Entrada_model->existReserve($id_53,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='53' name='butacas[]'></td>";
                        }$id_54 = 54;
                        if($this->Entrada_model->existReserve($id_54,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='54' name='butacas[]'></td>";
                        }$id_55 = 55;
                        if($this->Entrada_model->existReserve($id_55,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='55' name='butacas[]'></td>";
                        }$id_56 = 56;
                        if($this->Entrada_model->existReserve($id_56,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='56' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_57 = 57;
                        if($this->Entrada_model->existReserve($id_57,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='57' name='butacas[]'></td>";
                        }
                        $id_58 = 58;
                        if($this->Entrada_model->existReserve($id_58,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='58' name='butacas[]'></td>";
                        }$id_59 = 59;
                        if($this->Entrada_model->existReserve($id_59,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='59' name='butacas[]'></td>";
                        }$id_60 = 60;
                        if($this->Entrada_model->existReserve($id_60,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='60' name='butacas[]'></td>";
                        }
                        $id_61 = 61;
                        if($this->Entrada_model->existReserve($id_61,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='61' name='butacas[]'></td>";
                        }$id_62 = 62;
                        if($this->Entrada_model->existReserve($id_62,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='62' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>                           
                  <tr bgcolor="gray">
                      <td>03</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_63 = 63;
                        if($this->Entrada_model->existReserve($id_63,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='63' name='butacas[]'></td>";
                        }
                        $id_64 = 64;
                        if($this->Entrada_model->existReserve($id_64,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='64' name='butacas[]'></td>";
                        }
                        $id_65 = 65;
                        if($this->Entrada_model->existReserve($id_65,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='65' name='butacas[]'></td>";
                        }
                        $id_66 = 66;
                        if($this->Entrada_model->existReserve($id_66,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='66' name='butacas[]'><//td>";
                        }
                        $id_67 = 67;
                        if($this->Entrada_model->existReserve($id_67,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='67' name='butacas[]'></td>";
                        }
                        $id_68 = 68;
                        if($this->Entrada_model->existReserve($id_68,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='68' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_69 = 69;
                        if($this->Entrada_model->existReserve($id_69,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='69' name='butacas[]'></td>";
                        }
                        $id_70 = 70;
                        if($this->Entrada_model->existReserve($id_70,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='70' name='butacas[]'></td>";
                        }
                        $id_71 = 71;
                        if($this->Entrada_model->existReserve($id_71,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='71' name='butacas[]'></td>";
                        }
                        $id_72 = 72;
                        if($this->Entrada_model->existReserve($id_72,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='72' name='butacas[]'></td>";
                        }
                        $id_73 = 73;
                        if($this->Entrada_model->existReserve($id_73,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='73' name='butacas[]'></td>";
                        }
                        $id_74 = 74;
                        if($this->Entrada_model->existReserve($id_74,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='74' name='butacas[]'></td>";
                        }
                        $id_75 = 75;
                        if($this->Entrada_model->existReserve($id_75,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='75' name='butacas[]'></td>";
                        }
                        $id_76 = 76;
                        if($this->Entrada_model->existReserve($id_76,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='76' name='butacas[]'></td>";
                        }
                        $id_77 = 77;
                        if($this->Entrada_model->existReserve($id_77,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='77' name='butacas[]'></td>";
                        }
                        $id_78 = 78;
                        if($this->Entrada_model->existReserve($id_78,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='78' name='butacas[]'></td>";
                        }
                        $id_79 = 79;
                        if($this->Entrada_model->existReserve($id_79,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='79' name='butacas[]'></td>";
                        }
                        $id_80 = 80;
                        if($this->Entrada_model->existReserve($id_80,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='80' name='butacas[]'></td>";
                        }
                        $id_81 = 81;
                        if($this->Entrada_model->existReserve($id_81,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='81' name='butacas[]'></td>";
                        }
                        $id_82 = 82;
                        if($this->Entrada_model->existReserve($id_82,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='82' name='butacas[]'></td>";
                        }
                        $id_83 = 83;
                        if($this->Entrada_model->existReserve($id_83,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='83' name='butacas[]'></td>";
                        }
                       $id_84 = 84;
                        if($this->Entrada_model->existReserve($id_84,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='84' name='butacas[]'></td>";
                        }$id_85 = 85;
                        if($this->Entrada_model->existReserve($id_85,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='85' name='butacas[]'></td>";
                        }$id_86 = 86;
                        if($this->Entrada_model->existReserve($id_86,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='86' name='butacas[]'></td>";
                        }$id_87 = 87;
                        if($this->Entrada_model->existReserve($id_87,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='87' name='butacas[]'></td>";
                        }$id_88 = 88;
                        if($this->Entrada_model->existReserve($id_88,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='88' name='butacas[]'></td>";
                        }$id_89 = 89;
                        if($this->Entrada_model->existReserve($id_89,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='89' name='butacas[]'></td>";
                        }$id_90 = 90;
                        if($this->Entrada_model->existReserve($id_90,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='90' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_91 = 91;
                        if($this->Entrada_model->existReserve($id_91,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='91' name='butacas[]'></td>";
                        }
                        $id_92 = 92;
                        if($this->Entrada_model->existReserve($id_92,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='92' name='butacas[]'></td>";
                        }$id_93 = 93;
                        if($this->Entrada_model->existReserve($id_93,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='93' name='butacas[]'></td>";
                        }$id_94 = 94;
                        if($this->Entrada_model->existReserve($id_94,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='94' name='butacas[]'></td>";
                        }
                        $id_95 = 95;
                        if($this->Entrada_model->existReserve($id_95,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='95' name='butacas[]'></td>";
                        }$id_96 = 96;
                        if($this->Entrada_model->existReserve($id_96,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='96' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>         
                  <tr bgcolor="LightGrey">
                      <td>04</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_97 =97;
                        if($this->Entrada_model->existReserve($id_97,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='97' name='butacas[]'></td>";
                        }
                        $id_98 = 98;
                        if($this->Entrada_model->existReserve($id_98,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='98' name='butacas[]'></td>";
                        }
                        $id_99 = 99;
                        if($this->Entrada_model->existReserve($id_99,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='99' name='butacas[]'></td>";
                        }
                        $id_100 = 100;
                        if($this->Entrada_model->existReserve($id_100,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='100' name='butacas[]'><//td>";
                        }
                        $id_101 = 101;
                        if($this->Entrada_model->existReserve($id_101,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='101' name='butacas[]'></td>";
                        }
                        $id_102 = 102;
                        if($this->Entrada_model->existReserve($id_102,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='102' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_103 = 103;
                        if($this->Entrada_model->existReserve($id_103,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='103' name='butacas[]'></td>";
                        }
                        $id_104 = 104;
                        if($this->Entrada_model->existReserve($id_104,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='104' name='butacas[]'></td>";
                        }
                        $id_105 = 105;
                        if($this->Entrada_model->existReserve($id_105,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='105' name='butacas[]'></td>";
                        }
                        $id_106 = 106;
                        if($this->Entrada_model->existReserve($id_106,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='106' name='butacas[]'></td>";
                        }
                        $id_107 = 107;
                        if($this->Entrada_model->existReserve($id_107,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='107' name='butacas[]'></td>";
                        }
                        $id_108 = 108;
                        if($this->Entrada_model->existReserve($id_108,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='108' name='butacas[]'></td>";
                        }
                        $id_109 = 109;
                        if($this->Entrada_model->existReserve($id_109,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='109' name='butacas[]'></td>";
                        }
                        $id_110 = 110;
                        if($this->Entrada_model->existReserve($id_110,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='110' name='butacas[]'></td>";
                        }
                        $id_111 = 111;
                        if($this->Entrada_model->existReserve($id_111,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='111' name='butacas[]'></td>";
                        }
                        $id_112 = 112;
                        if($this->Entrada_model->existReserve($id_112,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='112' name='butacas[]'></td>";
                        }
                        $id_113 = 113;
                        if($this->Entrada_model->existReserve($id_113,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='113' name='butacas[]'></td>";
                        }
                        $id_114 = 114;
                        if($this->Entrada_model->existReserve($id_114,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='114' name='butacas[]'></td>";
                        }
                        $id_115 = 115;
                        if($this->Entrada_model->existReserve($id_115,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='115' name='butacas[]'></td>";
                        }
                        $id_116 = 116;
                        if($this->Entrada_model->existReserve($id_116,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='116' name='butacas[]'></td>";
                        }
                        $id_117 = 117;
                        if($this->Entrada_model->existReserve($id_117,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='117' name='butacas[]'></td>";
                        }
                       $id_118 = 118;
                        if($this->Entrada_model->existReserve($id_118,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='118' name='butacas[]'></td>";
                        }$id_119 = 119;
                        if($this->Entrada_model->existReserve($id_119,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='119' name='butacas[]'></td>";
                        }$id_120 = 120;
                        if($this->Entrada_model->existReserve($id_120,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='120' name='butacas[]'></td>";
                        }$id_121 = 121;
                        if($this->Entrada_model->existReserve($id_121,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='121' name='butacas[]'></td>";
                        }$id_122 = 122;
                        if($this->Entrada_model->existReserve($id_122,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='122' name='butacas[]'></td>";
                        }$id_123 = 123;
                        if($this->Entrada_model->existReserve($id_123,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='123' name='butacas[]'></td>";
                        }$id_124 = 124;
                        if($this->Entrada_model->existReserve($id_124,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='124' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_125 = 125;
                        if($this->Entrada_model->existReserve($id_125,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='125' name='butacas[]'></td>";
                        }
                        $id_126 = 126;
                        if($this->Entrada_model->existReserve($id_126,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='126' name='butacas[]'></td>";
                        }$id_127 = 127;
                        if($this->Entrada_model->existReserve($id_127,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='127' name='butacas[]'></td>";
                        }$id_128 = 128;
                        if($this->Entrada_model->existReserve($id_128,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='128' name='butacas[]'></td>";
                        }
                        $id_129 = 129;
                        if($this->Entrada_model->existReserve($id_129,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='129' name='butacas[]'></td>";
                        }$id_130 = 130;
                        if($this->Entrada_model->existReserve($id_130,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='130' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>                           
                  <tr bgcolor="gray">
                      <td>05</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_131 = 131;
                        if($this->Entrada_model->existReserve($id_131,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='131' name='butacas[]'></td>";
                        }
                        $id_132 = 132;
                        if($this->Entrada_model->existReserve($id_132,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='132' name='butacas[]'></td>";
                        }
                        $id_133 = 133;
                        if($this->Entrada_model->existReserve($id_133,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='133' name='butacas[]'></td>";
                        }
                        $id_134 = 134;
                        if($this->Entrada_model->existReserve($id_134,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='134' name='butacas[]'><//td>";
                        }
                        $id_135 = 135;
                        if($this->Entrada_model->existReserve($id_135,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='135' name='butacas[]'></td>";
                        }
                        $id_136 = 136;
                        if($this->Entrada_model->existReserve($id_136,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='136' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_137 = 137;
                        if($this->Entrada_model->existReserve($id_137,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='137' name='butacas[]'></td>";
                        }
                        $id_138 = 138;
                        if($this->Entrada_model->existReserve($id_138,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='138' name='butacas[]'></td>";
                        }
                        $id_139 = 139;
                        if($this->Entrada_model->existReserve($id_139,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='139' name='butacas[]'></td>";
                        }
                        $id_140 = 140;
                        if($this->Entrada_model->existReserve($id_140,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='140' name='butacas[]'></td>";
                        }
                        $id_141 = 141;
                        if($this->Entrada_model->existReserve($id_141,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='141' name='butacas[]'></td>";
                        }
                        $id_142 = 142;
                        if($this->Entrada_model->existReserve($id_142,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='142' name='butacas[]'></td>";
                        }
                        $id_143 = 143;
                        if($this->Entrada_model->existReserve($id_143,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='143' name='butacas[]'></td>";
                        }
                        $id_144 = 144;
                        if($this->Entrada_model->existReserve($id_144,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='144' name='butacas[]'></td>";
                        }
                        $id_145 = 145;
                        if($this->Entrada_model->existReserve($id_145,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='145' name='butacas[]'></td>";
                        }
                        $id_146 = 146;
                        if($this->Entrada_model->existReserve($id_146,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='146' name='butacas[]'></td>";
                        }
                        $id_147 = 147;
                        if($this->Entrada_model->existReserve($id_147,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='147' name='butacas[]'></td>";
                        }
                        $id_148 = 148;
                        if($this->Entrada_model->existReserve($id_148,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='148' name='butacas[]'></td>";
                        }
                        $id_149 = 149;
                        if($this->Entrada_model->existReserve($id_149,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='149' name='butacas[]'></td>";
                        }
                        $id_150 = 150;
                        if($this->Entrada_model->existReserve($id_150,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='150' name='butacas[]'></td>";
                        }
                        $id_151 = 151;
                        if($this->Entrada_model->existReserve($id_151,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='151' name='butacas[]'></td>";
                        }
                       $id_152 = 152;
                        if($this->Entrada_model->existReserve($id_152,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='152' name='butacas[]'></td>";
                        }$id_153 = 153;
                        if($this->Entrada_model->existReserve($id_153,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='153' name='butacas[]'></td>";
                        }$id_154 = 154;
                        if($this->Entrada_model->existReserve($id_154,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='154' name='butacas[]'></td>";
                        }$id_155 = 155;
                        if($this->Entrada_model->existReserve($id_155,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='155' name='butacas[]'></td>";
                        }$id_156 = 156;
                        if($this->Entrada_model->existReserve($id_156,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='156' name='butacas[]'></td>";
                        }$id_157 = 157;
                        if($this->Entrada_model->existReserve($id_157,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='157' name='butacas[]'></td>";
                        }$id_158 = 158;
                        if($this->Entrada_model->existReserve($id_158,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='158' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_159 = 159;
                        if($this->Entrada_model->existReserve($id_159,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='159' name='butacas[]'></td>";
                        }
                        $id_160 = 160;
                        if($this->Entrada_model->existReserve($id_160,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='160' name='butacas[]'></td>";
                        }$id_161 = 161;
                        if($this->Entrada_model->existReserve($id_161,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='161' name='butacas[]'></td>";
                        }$id_162 = 162;
                        if($this->Entrada_model->existReserve($id_162,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='162' name='butacas[]'></td>";
                        }
                        $id_163 = 163;
                        if($this->Entrada_model->existReserve($id_163,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='163' name='butacas[]'></td>";
                        }$id_164 = 164;
                        if($this->Entrada_model->existReserve($id_164,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='164' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr> 
                  <tr bgcolor="LightGrey">
                      <td>06</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_165 = 165;
                        if($this->Entrada_model->existReserve($id_165,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='165' name='butacas[]'></td>";
                        }
                        $id_166 = 166;
                        if($this->Entrada_model->existReserve($id_166,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='166' name='butacas[]'></td>";
                        }
                        $id_167 = 167;
                        if($this->Entrada_model->existReserve($id_167,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='167' name='butacas[]'></td>";
                        }
                        $id_168 = 168;
                        if($this->Entrada_model->existReserve($id_168,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='168' name='butacas[]'><//td>";
                        }
                        $id_169 = 169;
                        if($this->Entrada_model->existReserve($id_169,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='169' name='butacas[]'></td>";
                        }
                        $id_170 = 170;
                        if($this->Entrada_model->existReserve($id_170,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='170' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_171 = 171;
                        if($this->Entrada_model->existReserve($id_171,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='171' name='butacas[]'></td>";
                        }
                        $id_172 = 172;
                        if($this->Entrada_model->existReserve($id_172,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='172' name='butacas[]'></td>";
                        }
                        $id_173 = 173;
                        if($this->Entrada_model->existReserve($id_173,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='173' name='butacas[]'></td>";
                        }
                        $id_174 = 174;
                        if($this->Entrada_model->existReserve($id_174,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='174' name='butacas[]'></td>";
                        }
                        $id_175 = 175;
                        if($this->Entrada_model->existReserve($id_175,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='175' name='butacas[]'></td>";
                        }
                        $id_176 = 176;
                        if($this->Entrada_model->existReserve($id_176,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='176' name='butacas[]'></td>";
                        }
                        $id_177 = 177;
                        if($this->Entrada_model->existReserve($id_177,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='177' name='butacas[]'></td>";
                        }
                        $id_178 = 178;
                        if($this->Entrada_model->existReserve($id_178,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='178' name='butacas[]'></td>";
                        }
                        $id_179 = 179;
                        if($this->Entrada_model->existReserve($id_179,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='179' name='butacas[]'></td>";
                        }
                        $id_180 = 180;
                        if($this->Entrada_model->existReserve($id_180,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='180' name='butacas[]'></td>";
                        }
                        $id_181 = 181;
                        if($this->Entrada_model->existReserve($id_181,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='181' name='butacas[]'></td>";
                        }
                        $id_182 = 182;
                        if($this->Entrada_model->existReserve($id_182,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='182' name='butacas[]'></td>";
                        }
                        $id_183 = 183;
                        if($this->Entrada_model->existReserve($id_183,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='183' name='butacas[]'></td>";
                        }
                        $id_184 = 184;
                        if($this->Entrada_model->existReserve($id_184,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='184' name='butacas[]'></td>";
                        }
                        $id_185 = 185;
                        if($this->Entrada_model->existReserve($id_185,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='185' name='butacas[]'></td>";
                        }
                       $id_186 = 186;
                        if($this->Entrada_model->existReserve($id_186,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='186' name='butacas[]'></td>";
                        }$id_187 = 187;
                        if($this->Entrada_model->existReserve($id_187,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='187' name='butacas[]'></td>";
                        }$id_188 = 188;
                        if($this->Entrada_model->existReserve($id_188,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='188' name='butacas[]'></td>";
                        }$id_189 = 189;
                        if($this->Entrada_model->existReserve($id_189,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='189' name='butacas[]'></td>";
                        }$id_190 = 190;
                        if($this->Entrada_model->existReserve($id_190,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='190' name='butacas[]'></td>";
                        }$id_191 = 191;
                        if($this->Entrada_model->existReserve($id_191,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='191' name='butacas[]'></td>";
                        }$id_192 = 192;
                        if($this->Entrada_model->existReserve($id_192,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='192' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_193 = 193;
                        if($this->Entrada_model->existReserve($id_193,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='193' name='butacas[]'></td>";
                        }
                        $id_194 = 194;
                        if($this->Entrada_model->existReserve($id_194,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='194' name='butacas[]'></td>";
                        }$id_195 = 195;
                        if($this->Entrada_model->existReserve($id_195,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='195' name='butacas[]'></td>";
                        }$id_196 = 196;
                        if($this->Entrada_model->existReserve($id_196,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='196' name='butacas[]'></td>";
                        }
                        $id_197 = 197;
                        if($this->Entrada_model->existReserve($id_197,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='197' name='butacas[]'></td>";
                        }$id_198 = 198;
                        if($this->Entrada_model->existReserve($id_198,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='198' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr> 
                  <tr bgcolor="gray">
                      <td>07</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_199 = 199;
                        if($this->Entrada_model->existReserve($id_199,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='199' name='butacas[]'></td>";
                        }
                        $id_200 = 200;
                        if($this->Entrada_model->existReserve($id_200,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='200' name='butacas[]'></td>";
                        }
                        $id_201 = 201;
                        if($this->Entrada_model->existReserve($id_201,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='201' name='butacas[]'></td>";
                        }
                        $id_202 = 202;
                        if($this->Entrada_model->existReserve($id_202,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='202' name='butacas[]'><//td>";
                        }
                        $id_203 = 203;
                        if($this->Entrada_model->existReserve($id_203,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='203' name='butacas[]'></td>";
                        }
                        $id_204 = 204;
                        if($this->Entrada_model->existReserve($id_204,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='204' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_205 = 205;
                        if($this->Entrada_model->existReserve($id_205,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='205' name='butacas[]'></td>";
                        }
                        $id_206 = 206;
                        if($this->Entrada_model->existReserve($id_206,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='206' name='butacas[]'></td>";
                        }
                        $id_207 = 207;
                        if($this->Entrada_model->existReserve($id_207,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='207' name='butacas[]'></td>";
                        }
                        $id_208 = 208;
                        if($this->Entrada_model->existReserve($id_208,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='208' name='butacas[]'></td>";
                        }
                        $id_209 = 209;
                        if($this->Entrada_model->existReserve($id_209,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='209' name='butacas[]'></td>";
                        }
                        $id_210 = 210;
                        if($this->Entrada_model->existReserve($id_210,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='210' name='butacas[]'></td>";
                        }
                        $id_211 = 211;
                        if($this->Entrada_model->existReserve($id_211,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='211' name='butacas[]'></td>";
                        }
                        $id_212 = 212;
                        if($this->Entrada_model->existReserve($id_212,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='212' name='butacas[]'></td>";
                        }
                        $id_213 = 213;
                        if($this->Entrada_model->existReserve($id_213,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='213' name='butacas[]'></td>";
                        }
                        $id_214 = 214;
                        if($this->Entrada_model->existReserve($id_214,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='214' name='butacas[]'></td>";
                        }
                        $id_215 = 215;
                        if($this->Entrada_model->existReserve($id_215,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='215' name='butacas[]'></td>";
                        }
                        $id_216 = 216;
                        if($this->Entrada_model->existReserve($id_216,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='216' name='butacas[]'></td>";
                        }
                        $id_217 = 217;
                        if($this->Entrada_model->existReserve($id_217,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='217' name='butacas[]'></td>";
                        }
                        $id_218 = 218;
                        if($this->Entrada_model->existReserve($id_218,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='218' name='butacas[]'></td>";
                        }
                        $id_219 = 219;
                        if($this->Entrada_model->existReserve($id_219,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='219' name='butacas[]'></td>";
                        }
                       $id_220 = 220;
                        if($this->Entrada_model->existReserve($id_220,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='220' name='butacas[]'></td>";
                        }$id_221 = 221;
                        if($this->Entrada_model->existReserve($id_221,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='221' name='butacas[]'></td>";
                        }$id_222 = 222;
                        if($this->Entrada_model->existReserve($id_222,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='222' name='butacas[]'></td>";
                        }$id_223 = 223;
                        if($this->Entrada_model->existReserve($id_223,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='223' name='butacas[]'></td>";
                        }$id_224 = 224;
                        if($this->Entrada_model->existReserve($id_224,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='224' name='butacas[]'></td>";
                        }$id_225 = 225;
                        if($this->Entrada_model->existReserve($id_225,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='225' name='butacas[]'></td>";
                        }$id_226 = 226;
                        if($this->Entrada_model->existReserve($id_226,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='226' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_227 = 227;
                        if($this->Entrada_model->existReserve($id_227,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='227' name='butacas[]'></td>";
                        }
                        $id_228 = 228;
                        if($this->Entrada_model->existReserve($id_228,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='228' name='butacas[]'></td>";
                        }$id_229 = 229;
                        if($this->Entrada_model->existReserve($id_229,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='229' name='butacas[]'></td>";
                        }$id_230 = 230;
                        if($this->Entrada_model->existReserve($id_230,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='230' name='butacas[]'></td>";
                        }
                        $id_231 = 231;
                        if($this->Entrada_model->existReserve($id_231,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='231' name='butacas[]'></td>";
                        }$id_232 = 232;
                        if($this->Entrada_model->existReserve($id_232,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='232' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr> 
                  <tr bgcolor="LightGrey">
                      <td>08</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_233 = 233;
                        if($this->Entrada_model->existReserve($id_233,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='233' name='butacas[]'></td>";
                        }
                        $id_234 = 234;
                        if($this->Entrada_model->existReserve($id_234,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='234' name='butacas[]'></td>";
                        }
                        $id_235 = 235;
                        if($this->Entrada_model->existReserve($id_235,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='235' name='butacas[]'></td>";
                        }
                        $id_236 = 236;
                        if($this->Entrada_model->existReserve($id_236,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='236' name='butacas[]'><//td>";
                        }
                        $id_237 = 237;
                        if($this->Entrada_model->existReserve($id_237,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='237' name='butacas[]'></td>";
                        }
                        $id_238 = 238;
                        if($this->Entrada_model->existReserve($id_238,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='238' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_239 = 239;
                        if($this->Entrada_model->existReserve($id_239,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='239' name='butacas[]'></td>";
                        }
                        $id_240 = 240;
                        if($this->Entrada_model->existReserve($id_240,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='240' name='butacas[]'></td>";
                        }
                        $id_241 = 241;
                        if($this->Entrada_model->existReserve($id_241,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='241' name='butacas[]'></td>";
                        }
                        $id_242 = 242;
                        if($this->Entrada_model->existReserve($id_242,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='242' name='butacas[]'></td>";
                        }
                        $id_243 = 243;
                        if($this->Entrada_model->existReserve($id_243,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='243' name='butacas[]'></td>";
                        }
                        $id_244 = 244;
                        if($this->Entrada_model->existReserve($id_244,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='244' name='butacas[]'></td>";
                        }
                        $id_245 = 245;
                        if($this->Entrada_model->existReserve($id_245,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='245' name='butacas[]'></td>";
                        }
                        $id_246 = 246;
                        if($this->Entrada_model->existReserve($id_246,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='246' name='butacas[]'></td>";
                        }
                        $id_247 = 247;
                        if($this->Entrada_model->existReserve($id_247,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='247' name='butacas[]'></td>";
                        }
                        $id_248 = 248;
                        if($this->Entrada_model->existReserve($id_248,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='248' name='butacas[]'></td>";
                        }
                        $id_249 = 249;
                        if($this->Entrada_model->existReserve($id_249,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='249' name='butacas[]'></td>";
                        }
                        $id_250 = 250;
                        if($this->Entrada_model->existReserve($id_250,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='250' name='butacas[]'></td>";
                        }
                        $id_251 = 251;
                        if($this->Entrada_model->existReserve($id_251,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='251' name='butacas[]'></td>";
                        }
                        $id_252 = 252;
                        if($this->Entrada_model->existReserve($id_252,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='252' name='butacas[]'></td>";
                        }
                        $id_253 = 253;
                        if($this->Entrada_model->existReserve($id_253,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='253' name='butacas[]'></td>";
                        }
                       $id_254 = 254;
                        if($this->Entrada_model->existReserve($id_254,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='254' name='butacas[]'></td>";
                        }$id_255 = 255;
                        if($this->Entrada_model->existReserve($id_255,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='255' name='butacas[]'></td>";
                        }$id_256 = 256;
                        if($this->Entrada_model->existReserve($id_256,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='256' name='butacas[]'></td>";
                        }$id_257 = 257;
                        if($this->Entrada_model->existReserve($id_257,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='257' name='butacas[]'></td>";
                        }$id_258 = 258;
                        if($this->Entrada_model->existReserve($id_258,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='258' name='butacas[]'></td>";
                        }$id_259 = 259;
                        if($this->Entrada_model->existReserve($id_259,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='259' name='butacas[]'></td>";
                        }$id_260 = 260;
                        if($this->Entrada_model->existReserve($id_260,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='260' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_261 = 261;
                        if($this->Entrada_model->existReserve($id_261,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='261' name='butacas[]'></td>";
                        }
                        $id_262 = 262;
                        if($this->Entrada_model->existReserve($id_262,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='262' name='butacas[]'></td>";
                        }$id_263 = 263;
                        if($this->Entrada_model->existReserve($id_263,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='263' name='butacas[]'></td>";
                        }$id_264 = 264;
                        if($this->Entrada_model->existReserve($id_264,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='264' name='butacas[]'></td>";
                        }
                        $id_265 = 265;
                        if($this->Entrada_model->existReserve($id_265,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='265' name='butacas[]'></td>";
                        }$id_266 = 266;
                        if($this->Entrada_model->existReserve($id_266,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='266' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr > 
                                    <tr bgcolor="gray">
                      <td>09</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_267 = 267;
                        if($this->Entrada_model->existReserve($id_267,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='267' name='butacas[]'></td>";
                        }
                        $id_268 = 268;
                        if($this->Entrada_model->existReserve($id_268,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='268' name='butacas[]'></td>";
                        }
                        $id_269 = 269;
                        if($this->Entrada_model->existReserve($id_269,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='269' name='butacas[]'></td>";
                        }
                        $id_270 = 270;
                        if($this->Entrada_model->existReserve($id_270,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='270' name='butacas[]'><//td>";
                        }
                        $id_271 = 271;
                        if($this->Entrada_model->existReserve($id_271,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='271' name='butacas[]'></td>";
                        }
                        $id_272 = 272;
                        if($this->Entrada_model->existReserve($id_272,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='272' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_273 = 273;
                        if($this->Entrada_model->existReserve($id_273,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='273' name='butacas[]'></td>";
                        }
                        $id_274 = 274;
                        if($this->Entrada_model->existReserve($id_274,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='274' name='butacas[]'></td>";
                        }
                        $id_275 = 275;
                        if($this->Entrada_model->existReserve($id_275,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='275' name='butacas[]'></td>";
                        }
                        $id_276 = 276;
                        if($this->Entrada_model->existReserve($id_276,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='276' name='butacas[]'></td>";
                        }
                        $id_277 = 277;
                        if($this->Entrada_model->existReserve($id_277,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='277' name='butacas[]'></td>";
                        }
                        $id_278 = 278;
                        if($this->Entrada_model->existReserve($id_278,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='278' name='butacas[]'></td>";
                        }
                        $id_279 = 279;
                        if($this->Entrada_model->existReserve($id_279,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='279' name='butacas[]'></td>";
                        }
                        $id_280 = 280;
                        if($this->Entrada_model->existReserve($id_280,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='280' name='butacas[]'></td>";
                        }
                        $id_281 = 281;
                        if($this->Entrada_model->existReserve($id_281,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='281' name='butacas[]'></td>";
                        }
                        $id_282 = 282;
                        if($this->Entrada_model->existReserve($id_282,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='282' name='butacas[]'></td>";
                        }
                        $id_283 = 283;
                        if($this->Entrada_model->existReserve($id_283,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='283' name='butacas[]'></td>";
                        }
                        $id_284 = 284;
                        if($this->Entrada_model->existReserve($id_284,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='284' name='butacas[]'></td>";
                        }
                        $id_285 = 285;
                        if($this->Entrada_model->existReserve($id_285,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='285' name='butacas[]'></td>";
                        }
                        $id_286 = 286;
                        if($this->Entrada_model->existReserve($id_286,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='286' name='butacas[]'></td>";
                        }
                        $id_287 = 287;
                        if($this->Entrada_model->existReserve($id_287,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='287' name='butacas[]'></td>";
                        }
                       $id_288 = 288;
                        if($this->Entrada_model->existReserve($id_288,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='288' name='butacas[]'></td>";
                        }$id_289 = 289;
                        if($this->Entrada_model->existReserve($id_289,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='289' name='butacas[]'></td>";
                        }$id_290 = 290;
                        if($this->Entrada_model->existReserve($id_290,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='290' name='butacas[]'></td>";
                        }$id_291 = 291;
                        if($this->Entrada_model->existReserve($id_291,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='291' name='butacas[]'></td>";
                        }$id_292 = 292;
                        if($this->Entrada_model->existReserve($id_292,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='292' name='butacas[]'></td>";
                        }$id_293 = 293;
                        if($this->Entrada_model->existReserve($id_293,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='293' name='butacas[]'></td>";
                        }$id_294 = 294;
                        if($this->Entrada_model->existReserve($id_294,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='294' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_295 = 295;
                        if($this->Entrada_model->existReserve($id_295,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='295' name='butacas[]'></td>";
                        }
                        $id_296 = 296;
                        if($this->Entrada_model->existReserve($id_296,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='296' name='butacas[]'></td>";
                        }$id_297 = 297;
                        if($this->Entrada_model->existReserve($id_297,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='297' name='butacas[]'></td>";
                        }$id_298 = 298;
                        if($this->Entrada_model->existReserve($id_298,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='298' name='butacas[]'></td>";
                        }
                        $id_299 = 299;
                        if($this->Entrada_model->existReserve($id_299,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='299' name='butacas[]'></td>";
                        }$id_300 = 300;
                        if($this->Entrada_model->existReserve($id_300,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='300' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>10</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_301 = 301;
                        if($this->Entrada_model->existReserve($id_301,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='301' name='butacas[]'></td>";
                        }
                        $id_302 = 302;
                        if($this->Entrada_model->existReserve($id_302,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='302' name='butacas[]'></td>";
                        }
                        $id_303 = 303;
                        if($this->Entrada_model->existReserve($id_303,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='303' name='butacas[]'></td>";
                        }
                        $id_304 = 304;
                        if($this->Entrada_model->existReserve($id_304,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='304' name='butacas[]'><//td>";
                        }
                        $id_305 = 305;
                        if($this->Entrada_model->existReserve($id_305,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='305' name='butacas[]'></td>";
                        }
                        $id_306 = 306;
                        if($this->Entrada_model->existReserve($id_306,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='306' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_307 = 307;
                        if($this->Entrada_model->existReserve($id_307,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='307' name='butacas[]'></td>";
                        }
                        $id_308 = 308;
                        if($this->Entrada_model->existReserve($id_308,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='308' name='butacas[]'></td>";
                        }
                        $id_309 = 309;
                        if($this->Entrada_model->existReserve($id_309,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='309' name='butacas[]'></td>";
                        }
                        $id_310 = 310;
                        if($this->Entrada_model->existReserve($id_310,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='310' name='butacas[]'></td>";
                        }
                        $id_311 = 311;
                        if($this->Entrada_model->existReserve($id_311,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='311' name='butacas[]'></td>";
                        }
                        $id_312 = 312;
                        if($this->Entrada_model->existReserve($id_312,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='312' name='butacas[]'></td>";
                        }
                        $id_313 = 313;
                        if($this->Entrada_model->existReserve($id_313,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='313' name='butacas[]'></td>";
                        }
                        $id_314 = 314;
                        if($this->Entrada_model->existReserve($id_314,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='314' name='butacas[]'></td>";
                        }
                        $id_315 = 315;
                        if($this->Entrada_model->existReserve($id_315,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='315' name='butacas[]'></td>";
                        }
                        $id_316 = 316;
                        if($this->Entrada_model->existReserve($id_316,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='316' name='butacas[]'></td>";
                        }
                        $id_317 = 317;
                        if($this->Entrada_model->existReserve($id_317,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='317' name='butacas[]'></td>";
                        }
                        $id_318 = 318;
                        if($this->Entrada_model->existReserve($id_318,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='318' name='butacas[]'></td>";
                        }
                        $id_319 = 319;
                        if($this->Entrada_model->existReserve($id_319,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='319' name='butacas[]'></td>";
                        }
                        $id_320 = 320;
                        if($this->Entrada_model->existReserve($id_320,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='320' name='butacas[]'></td>";
                        }
                        $id_321 = 321;
                        if($this->Entrada_model->existReserve($id_321,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='321' name='butacas[]'></td>";
                        }
                       $id_322 = 322;
                        if($this->Entrada_model->existReserve($id_322,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='322' name='butacas[]'></td>";
                        }$id_323 = 323;
                        if($this->Entrada_model->existReserve($id_323,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='323' name='butacas[]'></td>";
                        }$id_324 = 324;
                        if($this->Entrada_model->existReserve($id_324,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='324' name='butacas[]'></td>";
                        }$id_325 = 325;
                        if($this->Entrada_model->existReserve($id_325,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='325' name='butacas[]'></td>";
                        }$id_326 = 326;
                        if($this->Entrada_model->existReserve($id_326,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='326' name='butacas[]'></td>";
                        }$id_327 = 327;
                        if($this->Entrada_model->existReserve($id_327,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='327' name='butacas[]'></td>";
                        }$id_328 = 328;
                        if($this->Entrada_model->existReserve($id_328,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='328' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_329 = 329;
                        if($this->Entrada_model->existReserve($id_329,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='329' name='butacas[]'></td>";
                        }
                        $id_330 = 330;
                        if($this->Entrada_model->existReserve($id_330,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='330' name='butacas[]'></td>";
                        }$id_331 = 331;
                        if($this->Entrada_model->existReserve($id_331,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='331' name='butacas[]'></td>";
                        }$id_332 = 332;
                        if($this->Entrada_model->existReserve($id_332,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='332' name='butacas[]'></td>";
                        }
                        $id_333 = 333;
                        if($this->Entrada_model->existReserve($id_333,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='333' name='butacas[]'></td>";
                        }$id_334 = 334;
                        if($this->Entrada_model->existReserve($id_334,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='334' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr> 
                  <tr bgcolor="gray">
                      <td>11</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_335 = 335;
                        if($this->Entrada_model->existReserve($id_335,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='335' name='butacas[]'></td>";
                        }
                        $id_336 = 336;
                        if($this->Entrada_model->existReserve($id_336,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='336' name='butacas[]'></td>";
                        }
                        $id_337 = 337;
                        if($this->Entrada_model->existReserve($id_337,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='337' name='butacas[]'></td>";
                        }
                        $id_338 = 338;
                        if($this->Entrada_model->existReserve($id_338,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='338' name='butacas[]'><//td>";
                        }
                        $id_339 = 339;
                        if($this->Entrada_model->existReserve($id_339,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='339' name='butacas[]'></td>";
                        }
                        $id_340 = 340;
                        if($this->Entrada_model->existReserve($id_340,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='340' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_341 = 341;
                        if($this->Entrada_model->existReserve($id_341,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='341' name='butacas[]'></td>";
                        }
                        $id_342 = 342;
                        if($this->Entrada_model->existReserve($id_342,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='342' name='butacas[]'></td>";
                        }
                        $id_343 = 343;
                        if($this->Entrada_model->existReserve($id_343,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='343' name='butacas[]'></td>";
                        }
                        $id_344 = 344;
                        if($this->Entrada_model->existReserve($id_344,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='344' name='butacas[]'></td>";
                        }
                        $id_345 = 345;
                        if($this->Entrada_model->existReserve($id_345,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='345' name='butacas[]'></td>";
                        }
                        $id_346 = 346;
                        if($this->Entrada_model->existReserve($id_346,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='346' name='butacas[]'></td>";
                        }
                        $id_347 = 347;
                        if($this->Entrada_model->existReserve($id_347,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='347' name='butacas[]'></td>";
                        }
                        $id_348 = 348;
                        if($this->Entrada_model->existReserve($id_348,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='348' name='butacas[]'></td>";
                        }
                        $id_349 = 349;
                        if($this->Entrada_model->existReserve($id_349,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='349' name='butacas[]'></td>";
                        }
                        $id_350 = 350;
                        if($this->Entrada_model->existReserve($id_350,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='350' name='butacas[]'></td>";
                        }
                        $id_351 = 351;
                        if($this->Entrada_model->existReserve($id_351,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='351' name='butacas[]'></td>";
                        }
                        $id_352 = 352;
                        if($this->Entrada_model->existReserve($id_352,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='352' name='butacas[]'></td>";
                        }
                        $id_353 = 353;
                        if($this->Entrada_model->existReserve($id_353,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='353' name='butacas[]'></td>";
                        }
                        $id_354 = 354;
                        if($this->Entrada_model->existReserve($id_354,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='354' name='butacas[]'></td>";
                        }
                        $id_355 = 355;
                        if($this->Entrada_model->existReserve($id_355,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='355' name='butacas[]'></td>";
                        }
                       $id_356 = 356;
                        if($this->Entrada_model->existReserve($id_356,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='356' name='butacas[]'></td>";
                        }$id_357 = 357;
                        if($this->Entrada_model->existReserve($id_357,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='357' name='butacas[]'></td>";
                        }$id_358 = 358;
                        if($this->Entrada_model->existReserve($id_358,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='358' name='butacas[]'></td>";
                        }$id_359 = 359;
                        if($this->Entrada_model->existReserve($id_359,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='359' name='butacas[]'></td>";
                        }$id_360 = 360;
                        if($this->Entrada_model->existReserve($id_360,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='360' name='butacas[]'></td>";
                        }$id_361 = 361;
                        if($this->Entrada_model->existReserve($id_361,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='361' name='butacas[]'></td>";
                        }$id_362 = 362;
                        if($this->Entrada_model->existReserve($id_362,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='362' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_363 = 363;
                        if($this->Entrada_model->existReserve($id_363,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='363' name='butacas[]'></td>";
                        }
                        $id_364 = 364;
                        if($this->Entrada_model->existReserve($id_364,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='364' name='butacas[]'></td>";
                        }$id_365 = 365;
                        if($this->Entrada_model->existReserve($id_365,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='365' name='butacas[]'></td>";
                        }$id_366 = 366;
                        if($this->Entrada_model->existReserve($id_366,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='366' name='butacas[]'></td>";
                        }
                        $id_367 = 367;
                        if($this->Entrada_model->existReserve($id_367,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='367' name='butacas[]'></td>";
                        }$id_368 = 368;
                        if($this->Entrada_model->existReserve($id_368,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='368' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>12</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_369 = 369;
                        if($this->Entrada_model->existReserve($id_369,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='369' name='butacas[]'></td>";
                        }
                        $id_370 = 370;
                        if($this->Entrada_model->existReserve($id_370,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='370' name='butacas[]'></td>";
                        }
                        $id_371 = 371;
                        if($this->Entrada_model->existReserve($id_371,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='371' name='butacas[]'></td>";
                        }
                        $id_372 = 372;
                        if($this->Entrada_model->existReserve($id_372,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='372' name='butacas[]'><//td>";
                        }
                        $id_373 = 373;
                        if($this->Entrada_model->existReserve($id_373,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='373' name='butacas[]'></td>";
                        }
                        $id_374 = 374;
                        if($this->Entrada_model->existReserve($id_374,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='374' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_375 = 375;
                        if($this->Entrada_model->existReserve($id_375,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='375' name='butacas[]'></td>";
                        }
                        $id_376 = 376;
                        if($this->Entrada_model->existReserve($id_376,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='376' name='butacas[]'></td>";
                        }
                        $id_377 = 377;
                        if($this->Entrada_model->existReserve($id_377,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='377' name='butacas[]'></td>";
                        }
                        $id_378 = 378;
                        if($this->Entrada_model->existReserve($id_378,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='378' name='butacas[]'></td>";
                        }
                        $id_379 = 379;
                        if($this->Entrada_model->existReserve($id_379,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='379' name='butacas[]'></td>";
                        }
                        $id_380 = 380;
                        if($this->Entrada_model->existReserve($id_380,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='380' name='butacas[]'></td>";
                        }
                        $id_381 = 381;
                        if($this->Entrada_model->existReserve($id_381,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='381' name='butacas[]'></td>";
                        }
                        $id_382 = 382;
                        if($this->Entrada_model->existReserve($id_382,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='382' name='butacas[]'></td>";
                        }
                        $id_383 = 383;
                        if($this->Entrada_model->existReserve($id_383,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='383' name='butacas[]'></td>";
                        }
                        $id_384 = 384;
                        if($this->Entrada_model->existReserve($id_384,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='384' name='butacas[]'></td>";
                        }
                        $id_385 = 385;
                        if($this->Entrada_model->existReserve($id_385,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='385' name='butacas[]'></td>";
                        }
                        $id_386 = 386;
                        if($this->Entrada_model->existReserve($id_386,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='386' name='butacas[]'></td>";
                        }
                        $id_387 = 387;
                        if($this->Entrada_model->existReserve($id_387,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='387' name='butacas[]'></td>";
                        }
                        $id_388 = 388;
                        if($this->Entrada_model->existReserve($id_388,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='388' name='butacas[]'></td>";
                        }
                        $id_389 = 389;
                        if($this->Entrada_model->existReserve($id_389,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='389' name='butacas[]'></td>";
                        }
                       $id_390 = 390;
                        if($this->Entrada_model->existReserve($id_390,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='390' name='butacas[]'></td>";
                        }$id_391 = 391;
                        if($this->Entrada_model->existReserve($id_391,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='391' name='butacas[]'></td>";
                        }$id_392 = 392;
                        if($this->Entrada_model->existReserve($id_392,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='392' name='butacas[]'></td>";
                        }$id_393 = 393;
                        if($this->Entrada_model->existReserve($id_393,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='393' name='butacas[]'></td>";
                        }$id_394 = 394;
                        if($this->Entrada_model->existReserve($id_394,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='394' name='butacas[]'></td>";
                        }$id_395 = 395;
                        if($this->Entrada_model->existReserve($id_395,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='395' name='butacas[]'></td>";
                        }$id_396 = 396;
                        if($this->Entrada_model->existReserve($id_396,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='396' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_397 = 397;
                        if($this->Entrada_model->existReserve($id_397,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='397' name='butacas[]'></td>";
                        }
                        $id_398 = 398;
                        if($this->Entrada_model->existReserve($id_398,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='398' name='butacas[]'></td>";
                        }$id_399 = 399;
                        if($this->Entrada_model->existReserve($id_399,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='399' name='butacas[]'></td>";
                        }$id_400 = 400;
                        if($this->Entrada_model->existReserve($id_400,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='400' name='butacas[]'></td>";
                        }
                        $id_401 = 401;
                        if($this->Entrada_model->existReserve($id_401,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='401' name='butacas[]'></td>";
                        }$id_402 = 402;
                        if($this->Entrada_model->existReserve($id_402,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='402' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="gray">
                      <td>13</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_403 = 403;
                        if($this->Entrada_model->existReserve($id_403,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='403' name='butacas[]'></td>";
                        }
                        $id_404 = 404;
                        if($this->Entrada_model->existReserve($id_404,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='404' name='butacas[]'></td>";
                        }
                        $id_405 = 405;
                        if($this->Entrada_model->existReserve($id_405,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='405' name='butacas[]'></td>";
                        }
                        $id_406 = 406;
                        if($this->Entrada_model->existReserve($id_406,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='406' name='butacas[]'><//td>";
                        }
                        $id_407 = 407;
                        if($this->Entrada_model->existReserve($id_407,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='407' name='butacas[]'></td>";
                        }
                        $id_408 = 408;
                        if($this->Entrada_model->existReserve($id_408,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='408' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_409 = 409;
                        if($this->Entrada_model->existReserve($id_409,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='409' name='butacas[]'></td>";
                        }
                        $id_410 = 410;
                        if($this->Entrada_model->existReserve($id_410,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='410' name='butacas[]'></td>";
                        }
                        $id_411 = 411;
                        if($this->Entrada_model->existReserve($id_411,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='411' name='butacas[]'></td>";
                        }
                        $id_412 = 412;
                        if($this->Entrada_model->existReserve($id_412,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='412' name='butacas[]'></td>";
                        }
                        $id_413 = 413;
                        if($this->Entrada_model->existReserve($id_413,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='413' name='butacas[]'></td>";
                        }
                        $id_414 = 414;
                        if($this->Entrada_model->existReserve($id_414,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='414' name='butacas[]'></td>";
                        }
                        $id_415 = 415;
                        if($this->Entrada_model->existReserve($id_415,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='415' name='butacas[]'></td>";
                        }
                        $id_416 = 416;
                        if($this->Entrada_model->existReserve($id_416,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='416' name='butacas[]'></td>";
                        }
                        $id_417 = 417;
                        if($this->Entrada_model->existReserve($id_417,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='417' name='butacas[]'></td>";
                        }
                        $id_418 = 418;
                        if($this->Entrada_model->existReserve($id_418,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='418' name='butacas[]'></td>";
                        }
                        $id_419 = 419;
                        if($this->Entrada_model->existReserve($id_419,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='419' name='butacas[]'></td>";
                        }
                        $id_420 = 420;
                        if($this->Entrada_model->existReserve($id_420,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='420' name='butacas[]'></td>";
                        }
                        $id_421 = 421;
                        if($this->Entrada_model->existReserve($id_421,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='421' name='butacas[]'></td>";
                        }
                        $id_422 = 422;
                        if($this->Entrada_model->existReserve($id_422,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='422' name='butacas[]'></td>";
                        }
                        $id_423 = 423;
                        if($this->Entrada_model->existReserve($id_423,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='423' name='butacas[]'></td>";
                        }
                       $id_424 = 424;
                        if($this->Entrada_model->existReserve($id_424,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='424' name='butacas[]'></td>";
                        }$id_425 = 425;
                        if($this->Entrada_model->existReserve($id_425,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='425' name='butacas[]'></td>";
                        }$id_426 = 426;
                        if($this->Entrada_model->existReserve($id_426,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='426' name='butacas[]'></td>";
                        }$id_427 = 427;
                        if($this->Entrada_model->existReserve($id_427,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='427' name='butacas[]'></td>";
                        }$id_428 = 428;
                        if($this->Entrada_model->existReserve($id_428,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='428' name='butacas[]'></td>";
                        }$id_429 = 429;
                        if($this->Entrada_model->existReserve($id_429,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='429' name='butacas[]'></td>";
                        }$id_430 = 430;
                        if($this->Entrada_model->existReserve($id_430,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='430' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_431 = 431;
                        if($this->Entrada_model->existReserve($id_431,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='431' name='butacas[]'></td>";
                        }
                        $id_432 = 432;
                        if($this->Entrada_model->existReserve($id_432,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='432' name='butacas[]'></td>";
                        }$id_433 = 433;
                        if($this->Entrada_model->existReserve($id_433,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='433' name='butacas[]'></td>";
                        }$id_434 = 434;
                        if($this->Entrada_model->existReserve($id_434,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='434' name='butacas[]'></td>";
                        }
                        $id_435 = 435;
                        if($this->Entrada_model->existReserve($id_435,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='435' name='butacas[]'></td>";
                        }$id_436 = 436;
                        if($this->Entrada_model->existReserve($id_436,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='436' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>14</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_437 = 437;
                        if($this->Entrada_model->existReserve($id_437,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='437' name='butacas[]'></td>";
                        }
                        $id_438 = 438;
                        if($this->Entrada_model->existReserve($id_438,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='438' name='butacas[]'></td>";
                        }
                        $id_439 = 439;
                        if($this->Entrada_model->existReserve($id_439,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='439' name='butacas[]'></td>";
                        }
                        $id_440 = 440;
                        if($this->Entrada_model->existReserve($id_440,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='440' name='butacas[]'><//td>";
                        }
                        $id_441 = 441;
                        if($this->Entrada_model->existReserve($id_441,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='441' name='butacas[]'></td>";
                        }
                        $id_442 = 442;
                        if($this->Entrada_model->existReserve($id_442,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='442' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_443 = 443;
                        if($this->Entrada_model->existReserve($id_443,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='443' name='butacas[]'></td>";
                        }
                        $id_444 = 444;
                        if($this->Entrada_model->existReserve($id_444,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='444' name='butacas[]'></td>";
                        }
                        $id_445 = 445;
                        if($this->Entrada_model->existReserve($id_445,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='445' name='butacas[]'></td>";
                        }
                        $id_446 = 446;
                        if($this->Entrada_model->existReserve($id_446,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='446' name='butacas[]'></td>";
                        }
                        $id_447 = 447;
                        if($this->Entrada_model->existReserve($id_447,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='447' name='butacas[]'></td>";
                        }
                        $id_448 = 448;
                        if($this->Entrada_model->existReserve($id_448,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='448' name='butacas[]'></td>";
                        }
                        $id_449 = 449;
                        if($this->Entrada_model->existReserve($id_449,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='449' name='butacas[]'></td>";
                        }
                        $id_450 = 450;
                        if($this->Entrada_model->existReserve($id_450,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='450' name='butacas[]'></td>";
                        }
                        $id_451 = 451;
                        if($this->Entrada_model->existReserve($id_451,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='451' name='butacas[]'></td>";
                        }
                        $id_452 = 452;
                        if($this->Entrada_model->existReserve($id_452,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='452' name='butacas[]'></td>";
                        }
                        $id_453 = 453;
                        if($this->Entrada_model->existReserve($id_453,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='453' name='butacas[]'></td>";
                        }
                        $id_454 = 454;
                        if($this->Entrada_model->existReserve($id_454,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='454' name='butacas[]'></td>";
                        }
                        $id_455 = 455;
                        if($this->Entrada_model->existReserve($id_455,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='455' name='butacas[]'></td>";
                        }
                        $id_456 = 456;
                        if($this->Entrada_model->existReserve($id_456,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='456' name='butacas[]'></td>";
                        }
                        $id_457 = 457;
                        if($this->Entrada_model->existReserve($id_457,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='457' name='butacas[]'></td>";
                        }
                       $id_458 = 458;
                        if($this->Entrada_model->existReserve($id_458,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='458' name='butacas[]'></td>";
                        }$id_459 = 459;
                        if($this->Entrada_model->existReserve($id_459,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='459' name='butacas[]'></td>";
                        }$id_460 = 460;
                        if($this->Entrada_model->existReserve($id_460,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='460' name='butacas[]'></td>";
                        }$id_461 = 461;
                        if($this->Entrada_model->existReserve($id_461,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='461' name='butacas[]'></td>";
                        }$id_462 = 462;
                        if($this->Entrada_model->existReserve($id_462,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='462' name='butacas[]'></td>";
                        }$id_463 = 463;
                        if($this->Entrada_model->existReserve($id_463,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='463' name='butacas[]'></td>";
                        }$id_464 = 464;
                        if($this->Entrada_model->existReserve($id_464,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='464' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_465 = 465;
                        if($this->Entrada_model->existReserve($id_465,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='465' name='butacas[]'></td>";
                        }
                        $id_466 = 466;
                        if($this->Entrada_model->existReserve($id_466,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='466' name='butacas[]'></td>";
                        }$id_467 = 467;
                        if($this->Entrada_model->existReserve($id_467,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='467' name='butacas[]'></td>";
                        }$id_468 = 468;
                        if($this->Entrada_model->existReserve($id_468,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='468' name='butacas[]'></td>";
                        }
                        $id_469 = 469;
                        if($this->Entrada_model->existReserve($id_469,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='469' name='butacas[]'></td>";
                        }$id_470 = 470;
                        if($this->Entrada_model->existReserve($id_470,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='470' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="gray">
                      <td>15</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_471 = 471;
                        if($this->Entrada_model->existReserve($id_471,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='471' name='butacas[]'></td>";
                        }
                        $id_472 = 472;
                        if($this->Entrada_model->existReserve($id_472,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='472' name='butacas[]'></td>";
                        }
                        $id_473 = 473;
                        if($this->Entrada_model->existReserve($id_473,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='473' name='butacas[]'></td>";
                        }
                        $id_474 = 474;
                        if($this->Entrada_model->existReserve($id_474,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='474' name='butacas[]'><//td>";
                        }
                        $id_475 = 475;
                        if($this->Entrada_model->existReserve($id_475,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='475' name='butacas[]'></td>";
                        }
                        $id_476 = 476;
                        if($this->Entrada_model->existReserve($id_476,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='476' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_477 = 477;
                        if($this->Entrada_model->existReserve($id_477,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='477' name='butacas[]'></td>";
                        }
                        $id_478 = 478;
                        if($this->Entrada_model->existReserve($id_478,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='478' name='butacas[]'></td>";
                        }
                        $id_479 = 479;
                        if($this->Entrada_model->existReserve($id_479,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='479' name='butacas[]'></td>";
                        }
                        $id_480 = 480;
                        if($this->Entrada_model->existReserve($id_480,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='480' name='butacas[]'></td>";
                        }
                        $id_481 = 481;
                        if($this->Entrada_model->existReserve($id_481,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='481' name='butacas[]'></td>";
                        }
                        $id_482 = 482;
                        if($this->Entrada_model->existReserve($id_482,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='482' name='butacas[]'></td>";
                        }
                        $id_483 = 483;
                        if($this->Entrada_model->existReserve($id_483,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='483' name='butacas[]'></td>";
                        }
                        $id_484 = 484;
                        if($this->Entrada_model->existReserve($id_484,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='484' name='butacas[]'></td>";
                        }
                        $id_485 = 485;
                        if($this->Entrada_model->existReserve($id_485,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='485' name='butacas[]'></td>";
                        }
                        $id_486 = 486;
                        if($this->Entrada_model->existReserve($id_486,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='486' name='butacas[]'></td>";
                        }
                        $id_487 = 487;
                        if($this->Entrada_model->existReserve($id_487,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='487' name='butacas[]'></td>";
                        }
                        $id_488 = 488;
                        if($this->Entrada_model->existReserve($id_488,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='488' name='butacas[]'></td>";
                        }
                        $id_489 = 489;
                        if($this->Entrada_model->existReserve($id_489,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='489' name='butacas[]'></td>";
                        }
                        $id_490 = 490;
                        if($this->Entrada_model->existReserve($id_490,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='490' name='butacas[]'></td>";
                        }
                        $id_491 = 491;
                        if($this->Entrada_model->existReserve($id_491,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='491' name='butacas[]'></td>";
                        }
                       $id_492 = 492;
                        if($this->Entrada_model->existReserve($id_492,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='492' name='butacas[]'></td>";
                        }$id_493 = 493;
                        if($this->Entrada_model->existReserve($id_493,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='493' name='butacas[]'></td>";
                        }$id_494 = 494;
                        if($this->Entrada_model->existReserve($id_494,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='494' name='butacas[]'></td>";
                        }$id_495 = 495;
                        if($this->Entrada_model->existReserve($id_495,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='495' name='butacas[]'></td>";
                        }$id_496 = 496;
                        if($this->Entrada_model->existReserve($id_496,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='496' name='butacas[]'></td>";
                        }$id_497 = 497;
                        if($this->Entrada_model->existReserve($id_497,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='497' name='butacas[]'></td>";
                        }$id_498 = 498;
                        if($this->Entrada_model->existReserve($id_498,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='498' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_499 = 499;
                        if($this->Entrada_model->existReserve($id_499,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='499' name='butacas[]'></td>";
                        }
                        $id_500 = 500;
                        if($this->Entrada_model->existReserve($id_500,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='500' name='butacas[]'></td>";
                        }$id_501 = 501;
                        if($this->Entrada_model->existReserve($id_501,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='501' name='butacas[]'></td>";
                        }$id_502 = 502;
                        if($this->Entrada_model->existReserve($id_502,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='502' name='butacas[]'></td>";
                        }
                        $id_503 = 503;
                        if($this->Entrada_model->existReserve($id_503,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='503' name='butacas[]'></td>";
                        }$id_504 = 504;
                        if($this->Entrada_model->existReserve($id_504,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='504' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>16</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_505 = 505;
                        if($this->Entrada_model->existReserve($id_505,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='505' name='butacas[]'></td>";
                        }
                        $id_506 = 506;
                        if($this->Entrada_model->existReserve($id_506,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='506' name='butacas[]'></td>";
                        }
                        $id_507 = 507;
                        if($this->Entrada_model->existReserve($id_507,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='507' name='butacas[]'></td>";
                        }
                        $id_508 = 508;
                        if($this->Entrada_model->existReserve($id_508,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='508' name='butacas[]'><//td>";
                        }
                        $id_509 = 509;
                        if($this->Entrada_model->existReserve($id_509,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='509' name='butacas[]'></td>";
                        }
                        $id_510 = 510;
                        if($this->Entrada_model->existReserve($id_510,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='510' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_511 = 511;
                        if($this->Entrada_model->existReserve($id_511,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='511' name='butacas[]'></td>";
                        }
                        $id_512 = 512;
                        if($this->Entrada_model->existReserve($id_512,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='512' name='butacas[]'></td>";
                        }
                        $id_513 = 513;
                        if($this->Entrada_model->existReserve($id_513,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='513' name='butacas[]'></td>";
                        }
                        $id_514 = 514;
                        if($this->Entrada_model->existReserve($id_514,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='514' name='butacas[]'></td>";
                        }
                        $id_515 = 515;
                        if($this->Entrada_model->existReserve($id_515,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='515' name='butacas[]'></td>";
                        }
                        $id_516 = 516;
                        if($this->Entrada_model->existReserve($id_516,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='516' name='butacas[]'></td>";
                        }
                        $id_517 = 517;
                        if($this->Entrada_model->existReserve($id_517,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='517' name='butacas[]'></td>";
                        }
                        $id_518 = 518;
                        if($this->Entrada_model->existReserve($id_518,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='518' name='butacas[]'></td>";
                        }
                        $id_519 = 519;
                        if($this->Entrada_model->existReserve($id_519,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='519' name='butacas[]'></td>";
                        }
                        $id_520 = 520;
                        if($this->Entrada_model->existReserve($id_520,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='520' name='butacas[]'></td>";
                        }
                        $id_521 = 521;
                        if($this->Entrada_model->existReserve($id_521,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='521' name='butacas[]'></td>";
                        }
                        $id_522 = 522;
                        if($this->Entrada_model->existReserve($id_522,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='522' name='butacas[]'></td>";
                        }
                        $id_523 = 523;
                        if($this->Entrada_model->existReserve($id_523,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='523' name='butacas[]'></td>";
                        }
                        $id_524 = 524;
                        if($this->Entrada_model->existReserve($id_524,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='524' name='butacas[]'></td>";
                        }
                        $id_525 = 525;
                        if($this->Entrada_model->existReserve($id_525,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='525' name='butacas[]'></td>";
                        }
                       $id_526 = 526;
                        if($this->Entrada_model->existReserve($id_526,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='526' name='butacas[]'></td>";
                        }$id_527 = 527;
                        if($this->Entrada_model->existReserve($id_527,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='527' name='butacas[]'></td>";
                        }$id_528 = 528;
                        if($this->Entrada_model->existReserve($id_528,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='528' name='butacas[]'></td>";
                        }$id_529 = 529;
                        if($this->Entrada_model->existReserve($id_529,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='529' name='butacas[]'></td>";
                        }$id_530 = 530;
                        if($this->Entrada_model->existReserve($id_530,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='530' name='butacas[]'></td>";
                        }$id_531 = 531;
                        if($this->Entrada_model->existReserve($id_531,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='531' name='butacas[]'></td>";
                        }$id_532 = 532;
                        if($this->Entrada_model->existReserve($id_532,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='532' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_533 = 533;
                        if($this->Entrada_model->existReserve($id_533,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='533' name='butacas[]'></td>";
                        }
                        $id_534 = 534;
                        if($this->Entrada_model->existReserve($id_534,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='534' name='butacas[]'></td>";
                        }$id_535 = 535;
                        if($this->Entrada_model->existReserve($id_535,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='535' name='butacas[]'></td>";
                        }$id_536 = 536;
                        if($this->Entrada_model->existReserve($id_536,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='536' name='butacas[]'></td>";
                        }
                        $id_537 = 537;
                        if($this->Entrada_model->existReserve($id_537,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='537' name='butacas[]'></td>";
                        }$id_538 = 538;
                        if($this->Entrada_model->existReserve($id_538,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='538' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="gray">
                      <td>17</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_539 = 539;
                        if($this->Entrada_model->existReserve($id_539,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='539' name='butacas[]'></td>";
                        }
                        $id_540 = 540;
                        if($this->Entrada_model->existReserve($id_540,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='540' name='butacas[]'></td>";
                        }
                        $id_541 = 541;
                        if($this->Entrada_model->existReserve($id_541,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='541' name='butacas[]'></td>";
                        }
                        $id_542 = 542;
                        if($this->Entrada_model->existReserve($id_542,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='542' name='butacas[]'><//td>";
                        }
                        $id_543 = 543;
                        if($this->Entrada_model->existReserve($id_543,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='543' name='butacas[]'></td>";
                        }
                        $id_544 = 544;
                        if($this->Entrada_model->existReserve($id_544,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='544' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_545 = 545;
                        if($this->Entrada_model->existReserve($id_545,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='546' name='butacas[]'></td>";
                        }
                        $id_546 = 546;
                        if($this->Entrada_model->existReserve($id_546,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='546' name='butacas[]'></td>";
                        }
                        $id_547 = 547;
                        if($this->Entrada_model->existReserve($id_547,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='547' name='butacas[]'></td>";
                        }
                        $id_548 = 548;
                        if($this->Entrada_model->existReserve($id_548,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='548' name='butacas[]'></td>";
                        }
                        $id_549 = 549;
                        if($this->Entrada_model->existReserve($id_549,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='549' name='butacas[]'></td>";
                        }
                        $id_550 = 550;
                        if($this->Entrada_model->existReserve($id_550,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='550' name='butacas[]'></td>";
                        }
                        $id_551 = 551;
                        if($this->Entrada_model->existReserve($id_551,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='551' name='butacas[]'></td>";
                        }
                        $id_552 = 552;
                        if($this->Entrada_model->existReserve($id_552,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='552' name='butacas[]'></td>";
                        }
                        $id_553 = 553;
                        if($this->Entrada_model->existReserve($id_553,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='553' name='butacas[]'></td>";
                        }
                        $id_554 = 554;
                        if($this->Entrada_model->existReserve($id_554,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='555' name='butacas[]'></td>";
                        }
                        $id_555 = 555;
                        if($this->Entrada_model->existReserve($id_555,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='555' name='butacas[]'></td>";
                        }
                        $id_556 = 556;
                        if($this->Entrada_model->existReserve($id_556,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='556' name='butacas[]'></td>";
                        }
                        $id_557 = 557;
                        if($this->Entrada_model->existReserve($id_557,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='557' name='butacas[]'></td>";
                        }
                        $id_558 = 558;
                        if($this->Entrada_model->existReserve($id_558,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='558' name='butacas[]'></td>";
                        }
                        $id_559 = 559;
                        if($this->Entrada_model->existReserve($id_559,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='559' name='butacas[]'></td>";
                        }
                       $id_560 = 560;
                        if($this->Entrada_model->existReserve($id_560,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='560' name='butacas[]'></td>";
                        }$id_561 = 561;
                        if($this->Entrada_model->existReserve($id_561,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='561' name='butacas[]'></td>";
                        }$id_562 = 562;
                        if($this->Entrada_model->existReserve($id_562,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='562' name='butacas[]'></td>";
                        }$id_563 = 563;
                        if($this->Entrada_model->existReserve($id_563,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='563' name='butacas[]'></td>";
                        }$id_564 = 564;
                        if($this->Entrada_model->existReserve($id_564,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='564' name='butacas[]'></td>";
                        }$id_565 = 565;
                        if($this->Entrada_model->existReserve($id_565,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='565' name='butacas[]'></td>";
                        }$id_566 = 566;
                        if($this->Entrada_model->existReserve($id_566,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='566' name='butacas[]'></td>";
                        }
                        echo"<td>*</td>";
                        $id_567 = 567;
                        if($this->Entrada_model->existReserve($id_567,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='567' name='butacas[]'></td>";
                        }
                        $id_568 = 568;
                        if($this->Entrada_model->existReserve($id_568,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='568' name='butacas[]'></td>";
                        }$id_569 = 569;
                        if($this->Entrada_model->existReserve($id_569,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='569' name='butacas[]'></td>";
                        }$id_570 = 570;
                        if($this->Entrada_model->existReserve($id_570,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='570' name='butacas[]'></td>";
                        }
                        $id_571 = 571;
                        if($this->Entrada_model->existReserve($id_571,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='571' name='butacas[]'></td>";
                        }$id_572 = 572;
                        if($this->Entrada_model->existReserve($id_572,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='572' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>18</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_573 = 573;
                        if($this->Entrada_model->existReserve($id_573,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='573' name='butacas[]'></td>";
                        }
                        $id_574 = 574;
                        if($this->Entrada_model->existReserve($id_574,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='574' name='butacas[]'></td>";
                        }
                        $id_575 = 575;
                        if($this->Entrada_model->existReserve($id_575,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='575' name='butacas[]'></td>";
                        }
                        $id_576 = 576;
                        if($this->Entrada_model->existReserve($id_576,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='576' name='butacas[]'><//td>";
                        }
                        $id_577 = 577;
                        if($this->Entrada_model->existReserve($id_577,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='577' name='butacas[]'></td>";
                        }
                        $id_578 = 578;
                        if($this->Entrada_model->existReserve($id_578,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='578' name='butacas[]'></td>";
                        }
                        echo"<td><div align='right'>*</div></td>";
                        $id_579 = 579;
                        if($this->Entrada_model->existReserve($id_579,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='579' name='butacas[]'></td>";
                        }
                        $id_580 = 580;
                        if($this->Entrada_model->existReserve($id_580,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='580' name='butacas[]'></td>";
                        }
                        $id_581 = 581;
                        if($this->Entrada_model->existReserve($id_581,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='581' name='butacas[]'></td>";
                        }
                        $id_582 = 582;
                        if($this->Entrada_model->existReserve($id_582,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='582' name='butacas[]'></td>";
                        }
                        $id_583 = 583;
                        if($this->Entrada_model->existReserve($id_583,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='583' name='butacas[]'></td>";
                        }
                        $id_584 = 584;
                        if($this->Entrada_model->existReserve($id_584,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='584' name='butacas[]'></td>";
                        }
                        $id_585 = 585;
                        if($this->Entrada_model->existReserve($id_585,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='585' name='butacas[]'></td>";
                        }
                        $id_586 = 586;
                        if($this->Entrada_model->existReserve($id_586,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='586' name='butacas[]'></td>";
                        }
                        $id_587 = 587;
                        if($this->Entrada_model->existReserve($id_587,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='587' name='butacas[]'></td>";
                        }
                        $id_588 = 588;
                        if($this->Entrada_model->existReserve($id_588,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='588' name='butacas[]'></td>";
                        }
                        $id_589 = 589;
                        if($this->Entrada_model->existReserve($id_589,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='589' name='butacas[]'></td>";
                        }
                        $id_590 = 590;
                        if($this->Entrada_model->existReserve($id_590,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='590' name='butacas[]'></td>";
                        }
                        $id_591 = 591;
                        if($this->Entrada_model->existReserve($id_591,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='591' name='butacas[]'></td>";
                        }
                        $id_592 = 592;
                        if($this->Entrada_model->existReserve($id_592,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='592' name='butacas[]'></td>";
                        }
                        $id_593 = 593;
                        if($this->Entrada_model->existReserve($id_593,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='593' name='butacas[]'></td>";
                        }
                       $id_594 = 594;
                        if($this->Entrada_model->existReserve($id_594,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='594' name='butacas[]'></td>";
                        }$id_595 = 595;
                        if($this->Entrada_model->existReserve($id_595,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='595' name='butacas[]'></td>";
                        }$id_596 = 596;
                        if($this->Entrada_model->existReserve($id_596,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='596' name='butacas[]'></td>";
                        }$id_597 = 597;
                        if($this->Entrada_model->existReserve($id_597,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='597' name='butacas[]'></td>";
                        }$id_598 = 598;
                        if($this->Entrada_model->existReserve($id_598,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='598' name='butacas[]'></td>";
                        }$id_599 = 599;
                        if($this->Entrada_model->existReserve($id_599,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='599' name='butacas[]'></td>";
                        }$id_600 = 600;
                        if($this->Entrada_model->existReserve($id_600,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='600' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_601 = 601;
                        if($this->Entrada_model->existReserve($id_601,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='601' name='butacas[]'></td>";
                        }
                        $id_602 = 602;
                        if($this->Entrada_model->existReserve($id_602,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='602' name='butacas[]'></td>";
                        }$id_603 = 603;
                        if($this->Entrada_model->existReserve($id_603,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='603' name='butacas[]'></td>";
                        }$id_604 = 604;
                        if($this->Entrada_model->existReserve($id_604,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='604' name='butacas[]'></td>";
                        }
                        $id_605 = 605;
                        if($this->Entrada_model->existReserve($id_605,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='605' name='butacas[]'></td>";
                        }$id_606 = 606;
                        if($this->Entrada_model->existReserve($id_606,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='606' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="gray">
                      <td>19</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_607 = 607;
                        if($this->Entrada_model->existReserve($id_607,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='607' name='butacas[]'></td>";
                        }
                        $id_608 = 608;
                        if($this->Entrada_model->existReserve($id_608,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='608' name='butacas[]'></td>";
                        }
                        $id_609 = 609;
                        if($this->Entrada_model->existReserve($id_609,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='609' name='butacas[]'></td>";
                        }
                        $id_610 = 610;
                        if($this->Entrada_model->existReserve($id_610,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='610' name='butacas[]'><//td>";
                        }
                        $id_611 = 611;
                        if($this->Entrada_model->existReserve($id_611,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='611' name='butacas[]'></td>";
                        }
                        $id_612 = 612;
                        if($this->Entrada_model->existReserve($id_612,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='612' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_613 = 613;
                        if($this->Entrada_model->existReserve($id_613,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='613' name='butacas[]'></td>";
                        }
                        $id_614 = 614;
                        if($this->Entrada_model->existReserve($id_614,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='614' name='butacas[]'></td>";
                        }
                        $id_615 = 615;
                        if($this->Entrada_model->existReserve($id_615,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='615' name='butacas[]'></td>";
                        }
                        $id_616 = 616;
                        if($this->Entrada_model->existReserve($id_616,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='616' name='butacas[]'></td>";
                        }
                        $id_617 = 617;
                        if($this->Entrada_model->existReserve($id_617,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='617' name='butacas[]'></td>";
                        }
                        $id_618 = 618;
                        if($this->Entrada_model->existReserve($id_618,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='618' name='butacas[]'></td>";
                        }
                        $id_619 = 619;
                        if($this->Entrada_model->existReserve($id_619,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='619' name='butacas[]'></td>";
                        }
                        $id_620 = 620;
                        if($this->Entrada_model->existReserve($id_620,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='620' name='butacas[]'></td>";
                        }
                        $id_621 = 621;
                        if($this->Entrada_model->existReserve($id_621,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='621' name='butacas[]'></td>";
                        }
                        $id_622 = 622;
                        if($this->Entrada_model->existReserve($id_622,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='622' name='butacas[]'></td>";
                        }
                        $id_623 = 623;
                        if($this->Entrada_model->existReserve($id_623,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='623' name='butacas[]'></td>";
                        }
                        $id_624 = 624;
                        if($this->Entrada_model->existReserve($id_624,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='624' name='butacas[]'></td>";
                        }
                        $id_625 = 625;
                        if($this->Entrada_model->existReserve($id_625,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='625' name='butacas[]'></td>";
                        }
                        $id_626 = 626;
                        if($this->Entrada_model->existReserve($id_626,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='626' name='butacas[]'></td>";
                        }
                        $id_627 = 627;
                        if($this->Entrada_model->existReserve($id_627,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='627' name='butacas[]'></td>";
                        }
                       $id_628 = 628;
                        if($this->Entrada_model->existReserve($id_628,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='628' name='butacas[]'></td>";
                        }$id_629 = 629;
                        if($this->Entrada_model->existReserve($id_629,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='629' name='butacas[]'></td>";
                        }$id_630 = 630;
                        if($this->Entrada_model->existReserve($id_630,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='630' name='butacas[]'></td>";
                        }$id_631 = 631;
                        if($this->Entrada_model->existReserve($id_631,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='631' name='butacas[]'></td>";
                        }$id_632 = 632;
                        if($this->Entrada_model->existReserve($id_632,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='632' name='butacas[]'></td>";
                        }$id_633 = 633;
                        if($this->Entrada_model->existReserve($id_633,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='633' name='butacas[]'></td>";
                        }$id_634 = 634;
                        if($this->Entrada_model->existReserve($id_634,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='634' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_635 = 635;
                        if($this->Entrada_model->existReserve($id_635,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='635' name='butacas[]'></td>";
                        }
                        $id_636 = 636;
                        if($this->Entrada_model->existReserve($id_636,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='636' name='butacas[]'></td>";
                        }$id_637 = 637;
                        if($this->Entrada_model->existReserve($id_637,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='637' name='butacas[]'></td>";
                        }$id_638 = 638;
                        if($this->Entrada_model->existReserve($id_638,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='638' name='butacas[]'></td>";
                        }
                        $id_639 = 639;
                        if($this->Entrada_model->existReserve($id_639,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='639' name='butacas[]'></td>";
                        }$id_640 = 640;
                        if($this->Entrada_model->existReserve($id_640,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='640' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>20</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_641 = 641;
                        if($this->Entrada_model->existReserve($id_641,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='641' name='butacas[]'></td>";
                        }
                        $id_642 = 642;
                        if($this->Entrada_model->existReserve($id_642,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='642' name='butacas[]'></td>";
                        }
                        $id_643 = 643;
                        if($this->Entrada_model->existReserve($id_643,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='643' name='butacas[]'></td>";
                        }
                        $id_644 = 644;
                        if($this->Entrada_model->existReserve($id_644,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='644' name='butacas[]'><//td>";
                        }
                        $id_645 = 645;
                        if($this->Entrada_model->existReserve($id_645,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='645' name='butacas[]'></td>";
                        }
                        $id_646 = 646;
                        if($this->Entrada_model->existReserve($id_646,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='646' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_647 = 647;
                        if($this->Entrada_model->existReserve($id_647,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='647' name='butacas[]'></td>";
                        }
                        $id_648 = 648;
                        if($this->Entrada_model->existReserve($id_648,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='648' name='butacas[]'></td>";
                        }
                        $id_649 = 649;
                        if($this->Entrada_model->existReserve($id_649,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='649' name='butacas[]'></td>";
                        }
                        $id_650 = 650;
                        if($this->Entrada_model->existReserve($id_650,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='650' name='butacas[]'></td>";
                        }
                        $id_651 = 651;
                        if($this->Entrada_model->existReserve($id_651,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='651' name='butacas[]'></td>";
                        }
                        $id_652 = 652;
                        if($this->Entrada_model->existReserve($id_652,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='652' name='butacas[]'></td>";
                        }
                        $id_653 = 653;
                        if($this->Entrada_model->existReserve($id_653,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='653' name='butacas[]'></td>";
                        }
                        $id_654 = 654;
                        if($this->Entrada_model->existReserve($id_654,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='654' name='butacas[]'></td>";
                        }
                        $id_655 = 655;
                        if($this->Entrada_model->existReserve($id_655,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='655' name='butacas[]'></td>";
                        }
                        $id_656 = 656;
                        if($this->Entrada_model->existReserve($id_656,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='656' name='butacas[]'></td>";
                        }
                        $id_657 = 657;
                        if($this->Entrada_model->existReserve($id_657,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='657' name='butacas[]'></td>";
                        }
                        $id_658 = 658;
                        if($this->Entrada_model->existReserve($id_658,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='658' name='butacas[]'></td>";
                        }
                        $id_659 = 659;
                        if($this->Entrada_model->existReserve($id_659,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='659' name='butacas[]'></td>";
                        }
                        $id_660 = 660;
                        if($this->Entrada_model->existReserve($id_660,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='660' name='butacas[]'></td>";
                        }
                        $id_661 = 661;
                        if($this->Entrada_model->existReserve($id_661,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='661' name='butacas[]'></td>";
                        }
                       $id_662 = 662;
                        if($this->Entrada_model->existReserve($id_662,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='662' name='butacas[]'></td>";
                        }$id_663 = 663;
                        if($this->Entrada_model->existReserve($id_663,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='663' name='butacas[]'></td>";
                        }$id_664 = 664;
                        if($this->Entrada_model->existReserve($id_664,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='664' name='butacas[]'></td>";
                        }$id_665 = 665;
                        if($this->Entrada_model->existReserve($id_665,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='665' name='butacas[]'></td>";
                        }$id_666 = 666;
                        if($this->Entrada_model->existReserve($id_666,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='666' name='butacas[]'></td>";
                        }$id_667 = 667;
                        if($this->Entrada_model->existReserve($id_667,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='667' name='butacas[]'></td>";
                        }$id_668 = 668;
                        if($this->Entrada_model->existReserve($id_668,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='668' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_669 = 669;
                        if($this->Entrada_model->existReserve($id_669,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='669' name='butacas[]'></td>";
                        }
                        $id_670 = 670;
                        if($this->Entrada_model->existReserve($id_670,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='670' name='butacas[]'></td>";
                        }$id_671 = 671;
                        if($this->Entrada_model->existReserve($id_671,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='671' name='butacas[]'></td>";
                        }$id_672 = 672;
                        if($this->Entrada_model->existReserve($id_672,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='672' name='butacas[]'></td>";
                        }
                        $id_673 = 673;
                        if($this->Entrada_model->existReserve($id_673,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='673' name='butacas[]'></td>";
                        }$id_674 = 674;
                        if($this->Entrada_model->existReserve($id_674,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='674' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="gray">
                      <td>21</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_675 = 675;
                        if($this->Entrada_model->existReserve($id_675,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='675' name='butacas[]'></td>";
                        }
                        $id_676 = 676;
                        if($this->Entrada_model->existReserve($id_676,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='676' name='butacas[]'></td>";
                        }
                        $id_677 = 677;
                        if($this->Entrada_model->existReserve($id_677,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='677' name='butacas[]'></td>";
                        }
                        $id_678 = 678;
                        if($this->Entrada_model->existReserve($id_678,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='678' name='butacas[]'><//td>";
                        }
                        $id_679 = 679;
                        if($this->Entrada_model->existReserve($id_679,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='679' name='butacas[]'></td>";
                        }
                        $id_680 = 680;
                        if($this->Entrada_model->existReserve($id_680,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='680' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_681 = 681;
                        if($this->Entrada_model->existReserve($id_681,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='681' name='butacas[]'></td>";
                        }
                        $id_682 = 682;
                        if($this->Entrada_model->existReserve($id_682,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='682' name='butacas[]'></td>";
                        }
                        $id_683 = 683;
                        if($this->Entrada_model->existReserve($id_683,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='683' name='butacas[]'></td>";
                        }
                        $id_684 = 684;
                        if($this->Entrada_model->existReserve($id_684,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='684' name='butacas[]'></td>";
                        }
                        $id_685 = 685;
                        if($this->Entrada_model->existReserve($id_685,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='685' name='butacas[]'></td>";
                        }
                        $id_686 = 686;
                        if($this->Entrada_model->existReserve($id_686,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='686' name='butacas[]'></td>";
                        }
                        $id_687 = 687;
                        if($this->Entrada_model->existReserve($id_687,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='687' name='butacas[]'></td>";
                        }
                        $id_688 = 688;
                        if($this->Entrada_model->existReserve($id_688,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='688' name='butacas[]'></td>";
                        }
                        $id_689 = 689;
                        if($this->Entrada_model->existReserve($id_689,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='689' name='butacas[]'></td>";
                        }
                        $id_690 = 690;
                        if($this->Entrada_model->existReserve($id_690,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='690' name='butacas[]'></td>";
                        }
                        $id_691 = 691;
                        if($this->Entrada_model->existReserve($id_691,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='691' name='butacas[]'></td>";
                        }
                        $id_692 = 692;
                        if($this->Entrada_model->existReserve($id_692,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='692' name='butacas[]'></td>";
                        }
                        $id_693 = 693;
                        if($this->Entrada_model->existReserve($id_693,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='693' name='butacas[]'></td>";
                        }
                        $id_694 = 694;
                        if($this->Entrada_model->existReserve($id_694,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='694' name='butacas[]'></td>";
                        }
                        $id_695 = 695;
                        if($this->Entrada_model->existReserve($id_695,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='695' name='butacas[]'></td>";
                        }
                       $id_696 = 696;
                        if($this->Entrada_model->existReserve($id_696,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='696' name='butacas[]'></td>";
                        }$id_697 = 697;
                        if($this->Entrada_model->existReserve($id_697,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='697' name='butacas[]'></td>";
                        }$id_698 = 698;
                        if($this->Entrada_model->existReserve($id_698,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='698' name='butacas[]'></td>";
                        }$id_699 = 699;
                        if($this->Entrada_model->existReserve($id_699,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='699' name='butacas[]'></td>";
                        }$id_700 = 700;
                        if($this->Entrada_model->existReserve($id_700,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='700' name='butacas[]'></td>";
                        }$id_701 = 701;
                        if($this->Entrada_model->existReserve($id_701,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='701' name='butacas[]'></td>";
                        }$id_702 = 702;
                        if($this->Entrada_model->existReserve($id_702,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='702' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_703 = 703;
                        if($this->Entrada_model->existReserve($id_703,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='703' name='butacas[]'></td>";
                        }
                        $id_704 = 704;
                        if($this->Entrada_model->existReserve($id_704,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='704' name='butacas[]'></td>";
                        }$id_705 = 705;
                        if($this->Entrada_model->existReserve($id_705,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='705' name='butacas[]'></td>";
                        }$id_706 = 706;
                        if($this->Entrada_model->existReserve($id_706,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='706' name='butacas[]'></td>";
                        }
                        $id_707 = 707;
                        if($this->Entrada_model->existReserve($id_707,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='707' name='butacas[]'></td>";
                        }$id_708 = 708;
                        if($this->Entrada_model->existReserve($id_708,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='708' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>22</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_709 = 709;
                        if($this->Entrada_model->existReserve($id_709,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='709' name='butacas[]'></td>";
                        }
                        $id_710 = 710;
                        if($this->Entrada_model->existReserve($id_710,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='710' name='butacas[]'></td>";
                        }
                        $id_711 = 711;
                        if($this->Entrada_model->existReserve($id_711,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='711' name='butacas[]'></td>";
                        }
                        $id_712 = 712;
                        if($this->Entrada_model->existReserve($id_712,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='712' name='butacas[]'><//td>";
                        }
                        $id_713 = 713;
                        if($this->Entrada_model->existReserve($id_713,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='713' name='butacas[]'></td>";
                        }
                        $id_714 = 714;
                        if($this->Entrada_model->existReserve($id_714,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='714' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_715 = 715;
                        if($this->Entrada_model->existReserve($id_715,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='715' name='butacas[]'></td>";
                        }
                        $id_716 = 716;
                        if($this->Entrada_model->existReserve($id_716,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='716' name='butacas[]'></td>";
                        }
                        $id_717 = 717;
                        if($this->Entrada_model->existReserve($id_717,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='717' name='butacas[]'></td>";
                        }
                        $id_718 = 718;
                        if($this->Entrada_model->existReserve($id_718,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='718' name='butacas[]'></td>";
                        }
                        $id_719 = 719;
                        if($this->Entrada_model->existReserve($id_719,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='719' name='butacas[]'></td>";
                        }
                        $id_720 = 720;
                        if($this->Entrada_model->existReserve($id_720,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='720' name='butacas[]'></td>";
                        }
                        $id_721 = 721;
                        if($this->Entrada_model->existReserve($id_721,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='721' name='butacas[]'></td>";
                        }
                        $id_722 = 722;
                        if($this->Entrada_model->existReserve($id_722,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='722' name='butacas[]'></td>";
                        }
                        $id_723 = 723;
                        if($this->Entrada_model->existReserve($id_723,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='723' name='butacas[]'></td>";
                        }
                        $id_724 = 724;
                        if($this->Entrada_model->existReserve($id_724,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='724' name='butacas[]'></td>";
                        }
                        $id_725 = 725;
                        if($this->Entrada_model->existReserve($id_725,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='725' name='butacas[]'></td>";
                        }
                        $id_726 = 726;
                        if($this->Entrada_model->existReserve($id_726,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='726' name='butacas[]'></td>";
                        }
                        $id_727 = 727;
                        if($this->Entrada_model->existReserve($id_727,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='727' name='butacas[]'></td>";
                        }
                        $id_728 = 728;
                        if($this->Entrada_model->existReserve($id_728,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='728' name='butacas[]'></td>";
                        }
                        $id_729 = 729;
                        if($this->Entrada_model->existReserve($id_729,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='729' name='butacas[]'></td>";
                        }
                       $id_730 = 730;
                        if($this->Entrada_model->existReserve($id_730,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='730' name='butacas[]'></td>";
                        }$id_731 = 731;
                        if($this->Entrada_model->existReserve($id_731,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='731' name='butacas[]'></td>";
                        }$id_732 = 732;
                        if($this->Entrada_model->existReserve($id_732,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='732' name='butacas[]'></td>";
                        }$id_733 = 733;
                        if($this->Entrada_model->existReserve($id_733,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='733' name='butacas[]'></td>";
                        }$id_734 = 734;
                        if($this->Entrada_model->existReserve($id_734,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='734' name='butacas[]'></td>";
                        }$id_735 = 735;
                        if($this->Entrada_model->existReserve($id_735,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='735' name='butacas[]'></td>";
                        }$id_736 = 736;
                        if($this->Entrada_model->existReserve($id_736,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='736' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_737 = 737;
                        if($this->Entrada_model->existReserve($id_737,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='737' name='butacas[]'></td>";
                        }
                        $id_738 = 738;
                        if($this->Entrada_model->existReserve($id_738,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='738' name='butacas[]'></td>";
                        }$id_739 = 739;
                        if($this->Entrada_model->existReserve($id_739,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='739' name='butacas[]'></td>";
                        }$id_740 = 740;
                        if($this->Entrada_model->existReserve($id_740,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='740' name='butacas[]'></td>";
                        }
                        $id_741 = 741;
                        if($this->Entrada_model->existReserve($id_741,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='741' name='butacas[]'></td>";
                        }$id_742 = 742;
                        if($this->Entrada_model->existReserve($id_742,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='742' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="gray">
                      <td>23</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_743 = 743;
                        if($this->Entrada_model->existReserve($id_743,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='743' name='butacas[]'></td>";
                        }
                        $id_744 = 744;
                        if($this->Entrada_model->existReserve($id_744,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='744' name='butacas[]'></td>";
                        }
                        $id_745 = 745;
                        if($this->Entrada_model->existReserve($id_745,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='745' name='butacas[]'></td>";
                        }
                        $id_746 = 746;
                        if($this->Entrada_model->existReserve($id_746,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='746' name='butacas[]'><//td>";
                        }
                        $id_747 = 747;
                        if($this->Entrada_model->existReserve($id_747,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='747' name='butacas[]'></td>";
                        }
                        $id_748 = 748;
                        if($this->Entrada_model->existReserve($id_748,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='748' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_749 = 749;
                        if($this->Entrada_model->existReserve($id_749,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='749' name='butacas[]'></td>";
                        }
                        $id_750 = 750;
                        if($this->Entrada_model->existReserve($id_750,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='750' name='butacas[]'></td>";
                        }
                        $id_751 = 751;
                        if($this->Entrada_model->existReserve($id_751,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='751' name='butacas[]'></td>";
                        }
                        $id_752 = 752;
                        if($this->Entrada_model->existReserve($id_752,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='752' name='butacas[]'></td>";
                        }
                        $id_753 = 753;
                        if($this->Entrada_model->existReserve($id_753,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='753' name='butacas[]'></td>";
                        }
                        $id_754 = 754;
                        if($this->Entrada_model->existReserve($id_754,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='754' name='butacas[]'></td>";
                        }
                        $id_755 = 755;
                        if($this->Entrada_model->existReserve($id_755,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='755' name='butacas[]'></td>";
                        }
                        $id_756 = 756;
                        if($this->Entrada_model->existReserve($id_756,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='756' name='butacas[]'></td>";
                        }
                        $id_757 = 757;
                        if($this->Entrada_model->existReserve($id_757,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='757' name='butacas[]'></td>";
                        }
                        $id_758 = 758;
                        if($this->Entrada_model->existReserve($id_758,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='758' name='butacas[]'></td>";
                        }
                        $id_759 = 759;
                        if($this->Entrada_model->existReserve($id_759,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='759' name='butacas[]'></td>";
                        }
                        $id_760 = 760;
                        if($this->Entrada_model->existReserve($id_760,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='760' name='butacas[]'></td>";
                        }
                        $id_761 = 761;
                        if($this->Entrada_model->existReserve($id_761,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='761' name='butacas[]'></td>";
                        }
                        $id_762 = 762;
                        if($this->Entrada_model->existReserve($id_762,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='762' name='butacas[]'></td>";
                        }
                        $id_763 = 763;
                        if($this->Entrada_model->existReserve($id_763,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='763' name='butacas[]'></td>";
                        }
                       $id_764 = 764;
                        if($this->Entrada_model->existReserve($id_764,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='764' name='butacas[]'></td>";
                        }$id_765 = 765;
                        if($this->Entrada_model->existReserve($id_765,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='765' name='butacas[]'></td>";
                        }$id_766 = 766;
                        if($this->Entrada_model->existReserve($id_766,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='766' name='butacas[]'></td>";
                        }$id_767 = 767;
                        if($this->Entrada_model->existReserve($id_767,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='767' name='butacas[]'></td>";
                        }$id_768 = 768;
                        if($this->Entrada_model->existReserve($id_768,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='768' name='butacas[]'></td>";
                        }$id_769 = 769;
                        if($this->Entrada_model->existReserve($id_769,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='769' name='butacas[]'></td>";
                        }$id_770 = 770;
                        if($this->Entrada_model->existReserve($id_770,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='770' name='butacas[]'></td>";
                        }
                        echo"<td></td>";
                        $id_771 = 635;
                        if($this->Entrada_model->existReserve($id_771,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='771' name='butacas[]'></td>";
                        }
                        $id_772 = 772;
                        if($this->Entrada_model->existReserve($id_772,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='772' name='butacas[]'></td>";
                        }$id_773 = 773;
                        if($this->Entrada_model->existReserve($id_773,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='773' name='butacas[]'></td>";
                        }$id_774 = 774;
                        if($this->Entrada_model->existReserve($id_774,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='774' name='butacas[]'></td>";
                        }
                        $id_775 = 775;
                        if($this->Entrada_model->existReserve($id_775,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='775' name='butacas[]'></td>";
                        }$id_776 = 776;
                        if($this->Entrada_model->existReserve($id_776,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='776' name='butacas[]'></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>24</td>
                      <td></td><td></td><td></td>
                      <?php 
                  
                        $id_777 = 777;
                        if($this->Entrada_model->existReserve($id_777,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='777' name='butacas[]'></td>";
                        }
                        $id_778 = 778;
                        if($this->Entrada_model->existReserve($id_778,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='778' name='butacas[]'></td>";
                        }
                        $id_779 = 779;
                        if($this->Entrada_model->existReserve($id_779,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='779' name='butacas[]'></td>";
                        }
                        $id_780 = 780;
                        if($this->Entrada_model->existReserve($id_780,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='780' name='butacas[]'><//td>";
                        }
                        $id_781 = 781;
                        if($this->Entrada_model->existReserve($id_781,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='781' name='butacas[]'></td>";
                        }
                        $id_782 = 782;
                        if($this->Entrada_model->existReserve($id_782,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='782' name='butacas[]'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td>";
                        $id_783 = 783;
                        if($this->Entrada_model->existReserve($id_783,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='783' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_784 = 784;
                        if($this->Entrada_model->existReserve($id_784,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='784' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_785 = 785;
                        if($this->Entrada_model->existReserve($id_785,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='785' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_786 = 786;
                        if($this->Entrada_model->existReserve($id_786,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='786' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_787 = 787;
                        if($this->Entrada_model->existReserve($id_787,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='787' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_788 = 788;
                        if($this->Entrada_model->existReserve($id_788,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='788' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_789 = 789;
                        if($this->Entrada_model->existReserve($id_789,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='789' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_790 = 790;
                        if($this->Entrada_model->existReserve($id_790,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='790' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_791 = 791;
                        if($this->Entrada_model->existReserve($id_791,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='791' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_792 = 792;
                        if($this->Entrada_model->existReserve($id_792,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='792' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_793 = 793;
                        if($this->Entrada_model->existReserve($id_793,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='793' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_794 = 794;
                        if($this->Entrada_model->existReserve($id_794,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='794' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_795 = 795;
                        if($this->Entrada_model->existReserve($id_795,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='795' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_796 = 796;
                        if($this->Entrada_model->existReserve($id_796,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='796' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        $id_797 = 797;
                        if($this->Entrada_model->existReserve($id_797,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='797' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -7px;'></td>";
                        }
                        echo"<td></td><td></td><td></td><td></td>";
                        $id_798 = 798;
                        if($this->Entrada_model->existReserve($id_798,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='798' name='butacas[]' 
                            ></td>";
                        }
                        $id_799 = 799;
                        if($this->Entrada_model->existReserve($id_799,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='799' name='butacas[]' 
                            ></td>";
                        }
                        $id_800 = 800;
                        if($this->Entrada_model->existReserve($id_800,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='800' name='butacas[]' 
                            ></td>";
                        }
                        $id_801 = 801;
                        if($this->Entrada_model->existReserve($id_801,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='801' name='butacas[]' 
                            ></td>";
                        }
                        $id_801 = 801;
                        if($this->Entrada_model->existReserve($id_801,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='801' name='butacas[]' 
                            ></td>";
                        }
                        $id_802 = 802;
                        if($this->Entrada_model->existReserve($id_802,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='802' name='butacas[]' 
                            ></td>";
                        }
                        echo"<td></td>";echo"<td></td>";echo"<td></td>";
                      ?>
                        
                  
                    
                  </tr>
                  <tr bgcolor="gray">
                      <td>25</td>
                      <td></td><td></td>
                      <?php 
                  
                        $id_803 = 803;
                        if($this->Entrada_model->existReserve($id_803,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='803' name='butacas[]'></td>";
                        }                        
                        $id_804 = 804;
                        if($this->Entrada_model->existReserve($id_804,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='804' name='butacas[]'></td>";
                        }
                        $id_806 = 806;
                        if($this->Entrada_model->existReserve($id_806,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='806' name='butacas[]'></td>";
                        }
                        $id_807 = 807;
                        if($this->Entrada_model->existReserve($id_807,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='807' name='butacas[]'></td>";
                        }
                        $id_808 = 808;
                        if($this->Entrada_model->existReserve($id_808,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='808' name='butacas[]'><//td>";
                        }
                        $id_809 = 809;
                        if($this->Entrada_model->existReserve($id_809,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='809' name='butacas[]'></td>";
                        }
                        $id_810 = 810;
                        if($this->Entrada_model->existReserve($id_810,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='810' name='butacas[]'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td>";
                        $id_811 = 811;
                        if($this->Entrada_model->existReserve($id_811,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='811' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_812 = 812;
                        if($this->Entrada_model->existReserve($id_812,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='812' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_813 = 813;
                        if($this->Entrada_model->existReserve($id_813,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='813' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_814 = 814;
                        if($this->Entrada_model->existReserve($id_814,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='814' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_815 = 815;

                        if($this->Entrada_model->existReserve($id_815,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='815' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_816 = 816;
                        if($this->Entrada_model->existReserve($id_816,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='816' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_817 = 817;
                        if($this->Entrada_model->existReserve($id_817,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='817' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_818 = 818;
                        if($this->Entrada_model->existReserve($id_818,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='818' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_819 = 819;
                        if($this->Entrada_model->existReserve($id_819,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='819' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_820 = 820;
                        if($this->Entrada_model->existReserve($id_820,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='820' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_821 = 821;
                        if($this->Entrada_model->existReserve($id_821,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='821' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_822 = 822;
                        if($this->Entrada_model->existReserve($id_822,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='822' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_823 = 823;
                        if($this->Entrada_model->existReserve($id_823,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='823' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        $id_824 = 824;
                        if($this->Entrada_model->existReserve($id_824,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='824' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 5px;'></td>";
                        }
                        echo"<td></td><td></td><td></td><td></td><td></td>";
                        $id_825 = 825;
                        if($this->Entrada_model->existReserve($id_825,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='825' name='butacas[]' 
                            ></td>";
                        }
                        $id_826 = 826;
                        if($this->Entrada_model->existReserve($id_826,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='826' name='butacas[]' 
                            ></td>";
                        }
                        $id_827 = 827;
                        if($this->Entrada_model->existReserve($id_827,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='827' name='butacas[]' 
                            ></td>";
                        }
                        $id_828 = 828;
                        if($this->Entrada_model->existReserve($id_828,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='828' name='butacas[]' 
                            ></td>";
                        }
                        $id_829 = 829;
                        if($this->Entrada_model->existReserve($id_829,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='829' name='butacas[]' 
                            ></td>";
                        }
                        $id_830 = 830;
                        if($this->Entrada_model->existReserve($id_830,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='830' name='butacas[]' 
                            ></td>";
                        }
                        $id_831 = 831;
                        if($this->Entrada_model->existReserve($id_831,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='831' name='butacas[]' 
                            ></td>";
                        }
                        echo"<td></td>";echo"<td></td>";
                      ?>
                        
                  
                    
                  </tr>  
                  <tr bgcolor="LightGrey">
                      <td>26</td>
                      <td></td><td></td>
                      <?php 
                  
                        $id_832 = 832;
                        if($this->Entrada_model->existReserve($id_832,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='832' name='butacas[]'></td>";
                        }                        
                        $id_833 = 833;
                        if($this->Entrada_model->existReserve($id_833,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='833' name='butacas[]'></td>";
                        }
                        $id_834 = 834;
                        if($this->Entrada_model->existReserve($id_834,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='834' name='butacas[]'></td>";
                        }
                        $id_835 = 835;
                        if($this->Entrada_model->existReserve($id_835,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='835' name='butacas[]'></td>";
                        }
                        $id_836 = 836;
                        if($this->Entrada_model->existReserve($id_836,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='836' name='butacas[]'><//td>";
                        }
                        $id_837 = 837;
                        if($this->Entrada_model->existReserve($id_837,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='837' name='butacas[]'></td>";
                        }
                        $id_838 = 838;
                        if($this->Entrada_model->existReserve($id_838,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='838' name='butacas[]'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td>";
                        $id_839 = 839;
                        if($this->Entrada_model->existReserve($id_839,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='839' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_840 = 840;
                        if($this->Entrada_model->existReserve($id_840,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='840' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_841 = 841;
                        if($this->Entrada_model->existReserve($id_841,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='841' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_842 = 842;
                        if($this->Entrada_model->existReserve($id_842,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='842' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_843 = 843;
                        if($this->Entrada_model->existReserve($id_843,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='843' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_844 = 844;
                        if($this->Entrada_model->existReserve($id_844,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='844' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_845 = 845;
                        if($this->Entrada_model->existReserve($id_845,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='845' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_846 = 846;
                        if($this->Entrada_model->existReserve($id_846,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='846' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_847 = 847;
                        if($this->Entrada_model->existReserve($id_847,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='847' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_848 = 848;
                        if($this->Entrada_model->existReserve($id_848,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='848' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_849 = 849;
                        if($this->Entrada_model->existReserve($id_849,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='849' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_850 = 850;
                        if($this->Entrada_model->existReserve($id_850,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='850' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        $id_851 = 851;
                        if($this->Entrada_model->existReserve($id_851,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='851' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -1px;'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td>";
                        $id_852 = 852;
                        if($this->Entrada_model->existReserve($id_852,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='852' name='butacas[]' 
                            ></td>";
                        }
                        $id_853 = 853;
                        if($this->Entrada_model->existReserve($id_853,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='853' name='butacas[]' 
                            ></td>";
                        }
                        $id_854 = 854;
                        if($this->Entrada_model->existReserve($id_854,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='854' name='butacas[]' 
                            ></td>";
                        }
                        $id_855 = 855;
                        if($this->Entrada_model->existReserve($id_855,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='855' name='butacas[]' 
                            ></td>";
                        }
                        $id_856 = 856;
                        if($this->Entrada_model->existReserve($id_856,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='856' name='butacas[]' 
                            ></td>";
                        }
                        $id_857 = 857;
                        if($this->Entrada_model->existReserve($id_857,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='857' name='butacas[]' 
                            ></td>";
                        }
                        $id_858 = 858;
                        if($this->Entrada_model->existReserve($id_858,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='858' name='butacas[]' 
                            ></td>";
                        }
                        echo"<td></td>";echo"<td></td>";
                      ?>
                        
                  
                    
                  </tr>   
                  <tr bgcolor="gray">
                      <td>27</td>
                      <td></td>
                      <?php 
                        $id_859 = 859;
                        if($this->Entrada_model->existReserve($id_859,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='859' name='butacas[]'></td>";
                        }  
                        $id_860 = 860;
                        if($this->Entrada_model->existReserve($id_860,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='860' name='butacas[]'></td>";
                        }                        
                        $id_861 = 861;
                        if($this->Entrada_model->existReserve($id_861,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='861' name='butacas[]'></td>";
                        }
                        $id_862 = 862;
                        if($this->Entrada_model->existReserve($id_862,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='862' name='butacas[]'></td>";
                        }
                        $id_863 = 863;
                        if($this->Entrada_model->existReserve($id_863,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='863' name='butacas[]'></td>";
                        }
                        $id_864 = 864;
                        if($this->Entrada_model->existReserve($id_864,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='864' name='butacas[]'><//td>";
                        }
                        $id_865 = 865;
                        if($this->Entrada_model->existReserve($id_865,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='865' name='butacas[]'></td>";
                        }
                        $id_866 = 866;
                        if($this->Entrada_model->existReserve($id_866,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='866' name='butacas[]'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td>";
                        $id_867 = 867;
                        if($this->Entrada_model->existReserve($id_867,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='867' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_868 = 868;
                        if($this->Entrada_model->existReserve($id_868,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='868' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_869 = 869;
                        if($this->Entrada_model->existReserve($id_869,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='869' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_870 = 870;
                        if($this->Entrada_model->existReserve($id_870,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='870' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_871 = 871;
                        if($this->Entrada_model->existReserve($id_871,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='871' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_872 = 872;
                        if($this->Entrada_model->existReserve($id_872,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='872' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_873 = 873;
                        if($this->Entrada_model->existReserve($id_873,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='873' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_874 = 874;
                        if($this->Entrada_model->existReserve($id_874,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='874' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_875 = 875;
                        if($this->Entrada_model->existReserve($id_875,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='875' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_876 = 876;
                        if($this->Entrada_model->existReserve($id_876,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='876' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_877 = 877;
                        if($this->Entrada_model->existReserve($id_877,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='877' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        $id_878 = 878;
                        if($this->Entrada_model->existReserve($id_878,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='878' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 8px;'></td>";
                        }
                        
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td>";
                        $id_879 = 879;
                        if($this->Entrada_model->existReserve($id_879,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='879' name='butacas[]' 
                            ></td>";
                        }
                        $id_880 = 880;
                        if($this->Entrada_model->existReserve($id_880,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='880' name='butacas[]' 
                            ></td>";
                        }
                        $id_881 = 881;
                        if($this->Entrada_model->existReserve($id_881,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='881' name='butacas[]' 
                            ></td>";
                        }
                        $id_882 = 882;
                        if($this->Entrada_model->existReserve($id_882,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='882' name='butacas[]' 
                            ></td>";
                        }
                        $id_883 = 883;
                        if($this->Entrada_model->existReserve($id_883,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='883' name='butacas[]' 
                            ></td>";
                        }
                        $id_884 = 884;
                        if($this->Entrada_model->existReserve($id_884,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='884' name='butacas[]' 
                            ></td>";
                        }
                        $id_885 = 885;
                        if($this->Entrada_model->existReserve($id_885,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='885' name='butacas[]' 
                            ></td>";
                        }
                        echo"<td></td>";echo"<td></td>";
                      ?>
                        
                  
                    
                  </tr>  
                  <tr bgcolor="LightGrey">
                      <td>28</td>
                      <td></td>
                      <?php 
                        $id_886 = 886;
                        if($this->Entrada_model->existReserve($id_886,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='886' name='butacas[]'></td>";
                        }  
                        $id_887 = 887;
                        if($this->Entrada_model->existReserve($id_887,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='887' name='butacas[]'></td>";
                        }                        
                        $id_888 = 888;
                        if($this->Entrada_model->existReserve($id_888,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='888' name='butacas[]'></td>";
                        }
                        $id_889 = 889;
                        if($this->Entrada_model->existReserve($id_889,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='889' name='butacas[]'></td>";
                        }
                        $id_890 = 890;
                        if($this->Entrada_model->existReserve($id_890,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='890' name='butacas[]'></td>";
                        }
                        $id_891 = 891;
                        if($this->Entrada_model->existReserve($id_891,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='891' name='butacas[]'><//td>";
                        }
                        $id_892 = 892;
                        if($this->Entrada_model->existReserve($id_892,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='892' name='butacas[]'></td>";
                        }
                        $id_893 = 893;
                        if($this->Entrada_model->existReserve($id_893,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='893' name='butacas[]'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
                        $id_894 = 894;
                        if($this->Entrada_model->existReserve($id_894,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='894' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }
                        $id_895 = 895;
                        if($this->Entrada_model->existReserve($id_895,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='895' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_896 = 896;
                        if($this->Entrada_model->existReserve($id_896,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='896' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_897 = 897;
                        if($this->Entrada_model->existReserve($id_897,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='897' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_898 = 898;
                        if($this->Entrada_model->existReserve($id_898,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='898' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_899 = 899;
                        if($this->Entrada_model->existReserve($id_899,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='899' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_900 = 900;
                        if($this->Entrada_model->existReserve($id_900,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='900' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_901 = 901;
                        if($this->Entrada_model->existReserve($id_901,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='901' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_902 = 902;
                        if($this->Entrada_model->existReserve($id_902,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='902' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_903 = 903;
                        if($this->Entrada_model->existReserve($id_903,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='903' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }
                        $id_904 = 904;
                        if($this->Entrada_model->existReserve($id_904,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='904' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td>";
                        $id_905 = 905;
                        if($this->Entrada_model->existReserve($id_905,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='905' name='butacas[]' 
                            ></td>";
                        }
                        $id_906 = 906;
                        if($this->Entrada_model->existReserve($id_906,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='906' name='butacas[]' 
                            ></td>";
                        }
                        $id_907 = 907;
                        if($this->Entrada_model->existReserve($id_907,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='907' name='butacas[]' 
                            ></td>";
                        }
                        $id_908 = 908;
                        if($this->Entrada_model->existReserve($id_908,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='908' name='butacas[]' 
                            ></td>";
                        }
                        $id_909 = 909;
                        if($this->Entrada_model->existReserve($id_909,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='909' name='butacas[]' 
                            ></td>";
                        }
                        $id_910 = 910;
                        if($this->Entrada_model->existReserve($id_910,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='910' name='butacas[]' 
                            ></td>";
                        }
                        $id_911 = 911;
                        if($this->Entrada_model->existReserve($id_911,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='911' name='butacas[]' 
                            ></td>";
                        }
                        $id_912 = 912;
                        if($this->Entrada_model->existReserve($id_912,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='912' name='butacas[]' 
                            ></td>";
                        }
                        echo"<td></td>"
                      ?>
                        
                  
                    
                  </tr>
                  <tr bgcolor="gray">
                      <td>29</td>
                      
                      <?php 
                        $id_913 = 913;
                        if($this->Entrada_model->existReserve($id_913,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='913' name='butacas[]'></td>";
                        } 
                        $id_914 = 914;
                        if($this->Entrada_model->existReserve($id_914,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='914' name='butacas[]'></td>";
                        }  
                        $id_915 = 915;
                        if($this->Entrada_model->existReserve($id_915,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='915' name='butacas[]'></td>";
                        }                        
                        $id_916 = 916;
                        if($this->Entrada_model->existReserve($id_916,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='916' name='butacas[]'></td>";
                        }
                        $id_917 = 917;
                        if($this->Entrada_model->existReserve($id_917,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='917' name='butacas[]'></td>";
                        }
                        $id_918 = 918;
                        if($this->Entrada_model->existReserve($id_918,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='918' name='butacas[]'></td>";
                        }
                        $id_919 = 919;
                        if($this->Entrada_model->existReserve($id_919,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='919' name='butacas[]'><//td>";
                        }
                        $id_920 = 920;
                        if($this->Entrada_model->existReserve($id_920,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='920' name='butacas[]'></td>";
                        }
                        $id_921 = 921;
                        if($this->Entrada_model->existReserve($id_921,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='921' name='butacas[]'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
                        
                        $id_922 = 922;
                        if($this->Entrada_model->existReserve($id_922,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='922' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }
                        $id_923 = 923;
                        if($this->Entrada_model->existReserve($id_923,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='923' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }$id_924 = 924;
                        if($this->Entrada_model->existReserve($id_924,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='924' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }$id_925 = 925;
                        if($this->Entrada_model->existReserve($id_925,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='925' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }$id_926 = 926;
                        if($this->Entrada_model->existReserve($id_926,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='926' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }$id_927 = 927;
                        if($this->Entrada_model->existReserve($id_927,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='927' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }$id_928 = 928;
                        if($this->Entrada_model->existReserve($id_928,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='928' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }$id_929 = 929;
                        if($this->Entrada_model->existReserve($id_929,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='929' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }$id_930 = 930;
                        if($this->Entrada_model->existReserve($id_930,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='930' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }$id_931 = 931;
                        if($this->Entrada_model->existReserve($id_931,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='931' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: -8px;'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td>";
                        $id_932 = 932;
                        if($this->Entrada_model->existReserve($id_932,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='932' name='butacas[]' 
                            ></td>";
                        }
                        $id_933 = 933;
                        if($this->Entrada_model->existReserve($id_933,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='933' name='butacas[]' 
                            ></td>";
                        }
                        $id_934 = 934;
                        if($this->Entrada_model->existReserve($id_934,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='934' name='butacas[]' 
                            ></td>";
                        }
                        $id_935 = 935;
                        if($this->Entrada_model->existReserve($id_935,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='935' name='butacas[]' 
                            ></td>";
                        }
                        $id_936 = 936;
                        if($this->Entrada_model->existReserve($id_936,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='936' name='butacas[]' 
                            ></td>";
                        }
                        $id_937 = 937;
                        if($this->Entrada_model->existReserve($id_937,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='937' name='butacas[]' 
                            ></td>";
                        }
                        $id_938 = 938;
                        if($this->Entrada_model->existReserve($id_938,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='938' name='butacas[]' 
                            ></td>";
                        }
                        $id_939 = 939;
                        if($this->Entrada_model->existReserve($id_939,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='939' name='butacas[]' 
                            ></td>";
                        }
                        $id_940 = 940;
                        if($this->Entrada_model->existReserve($id_940,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='940' name='butacas[]' 
                            ></td>";
                        }
                        
                      ?>
                        
                  
                    
                  </tr>
                  <tr bgcolor="LightGrey">
                      <td>30</td>
                      
                      <?php 
                        $id_941 = 941;
                        if($this->Entrada_model->existReserve($id_941,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='941' name='butacas[]'></td>";
                        } 
                        $id_942 = 942;
                        if($this->Entrada_model->existReserve($id_942,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='942' name='butacas[]'></td>";
                        }  
                        $id_943 = 943;
                        if($this->Entrada_model->existReserve($id_943,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='943' name='butacas[]'></td>";
                        }                        
                        $id_944 = 944;
                        if($this->Entrada_model->existReserve($id_944,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='944' name='butacas[]'></td>";
                        }
                        $id_945 = 945;
                        if($this->Entrada_model->existReserve($id_945,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='945' name='butacas[]'></td>";
                        }
                        $id_946 = 946;
                        if($this->Entrada_model->existReserve($id_946,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='946' name='butacas[]'></td>";
                        }
                        $id_947 = 947;
                        if($this->Entrada_model->existReserve($id_947,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='947' name='butacas[]'><//td>";
                        }
                        $id_948 = 948;
                        if($this->Entrada_model->existReserve($id_948,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='948' name='butacas[]'></td>";
                        }
                        $id_949 = 949;
                        if($this->Entrada_model->existReserve($id_949,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='949' name='butacas[]'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
                        
                        
                        $id_950 = 950;
                        if($this->Entrada_model->existReserve($id_950,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='950' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_951 = 951;
                        if($this->Entrada_model->existReserve($id_951,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='951' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_952 = 952;
                        if($this->Entrada_model->existReserve($id_952,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='952' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_953 = 953;
                        if($this->Entrada_model->existReserve($id_953,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='953' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_954 = 954;
                        if($this->Entrada_model->existReserve($id_954,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='954' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_9955 = 9955;
                        if($this->Entrada_model->existReserve($id_9955,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='9955' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_956 = 956;
                        if($this->Entrada_model->existReserve($id_956,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='956' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_957 = 957;
                        if($this->Entrada_model->existReserve($id_957,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='957' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }$id_958 = 958;
                        if($this->Entrada_model->existReserve($id_958,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='958' name='butacas[]' 
                            style='horizontal-align: middle; margin-left: 2px;'></td>";
                        }
                        
                        echo"<td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
                        $id_959 = 959;
                        if($this->Entrada_model->existReserve($id_959,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='959' name='butacas[]' 
                            ></td>";
                        }
                        $id_960 = 960;
                        if($this->Entrada_model->existReserve($id_960,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='960' name='butacas[]' 
                            ></td>";
                        }
                        $id_961 = 961;
                        if($this->Entrada_model->existReserve($id_961,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='961' name='butacas[]' 
                            ></td>";
                        }
                        $id_962 = 962;
                        if($this->Entrada_model->existReserve($id_962,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='962' name='butacas[]' 
                            ></td>";
                        }
                        $id_963 = 963;
                        if($this->Entrada_model->existReserve($id_963,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='963' name='butacas[]' 
                            ></td>";
                        }
                        $id_964 = 964;
                        if($this->Entrada_model->existReserve($id_964,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='964' name='butacas[]' 
                            ></td>";
                        }
                        $id_965 = 965;
                        if($this->Entrada_model->existReserve($id_965,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='965' name='butacas[]' 
                            ></td>";
                        }
                        $id_966 = 966;
                        if($this->Entrada_model->existReserve($id_966,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='966' name='butacas[]' 
                            ></td>";
                        }
                        $id_967 = 967;
                        if($this->Entrada_model->existReserve($id_967,$evento[0]->id)>0){
                            echo"<td><button type='button' class='btn btn-danger btn-xs'></td>";
                        }else{
                            echo"<td><input type='checkbox' value='967' name='butacas[]' 
                            ></td>";
                        }
                      ?>
                        
                  
                    
                  </tr>
                  <tr bgcolor="gray">
                      <td>#</td>
                      <td>01|</td>
                      <td>02|</td>
                      <td>03|</td>
                      <td>04|</td>
                      <td>05|</td>
                      <td>06|</td>
                      <td>07|</td>
                      <td>08|</td>
                      <td>09|</td>
                      <td>Pasillo|</td>
                      <td>10|</td>
                      <td>11|</td>
                      <td>12|</td>
                      <td>13|</td>
                      <td>14|</td>
                      <td>15|</td>
                      <td>16|</td>
                      <td>17|</td>
                      <td>18|</td>
                      <td>19|</td>
                      <td>20|</td>
                      <td>21|</td>
                      <td>22|</td>
                      <td>23|</td>
                      <td>24|</td>
                      <td>25|</td>
                      <td>26|</td>
                      <td>27|</td>
                      <td>28|</td>
                      <td>29|</td>
                      <td>30|</td>
                      <td>31|</td>
                      <td>Pasillo|</td>
                      <td>32|</td>
                      <td>33|</td>
                      <td>34|</td>
                      <td>35|</td>
                      <td>36|</td>
                      <td>37|</td>
                      <td>38|</td>
                      <td>39|</td>
                      <td>40|</td>
                      
                      
                  </tr>
              </table>
            <br>
            <center>
                <label>Forma de pago</label><br>
                <?php  
                    $options = array('Efectivo'  => 'Efectivo',
                                     'Tarjeta' => 'Tarjeta');
                    echo form_dropdown('formaPago', $options);

                ?><?php echo form_error('formaPago')?><br><br>
            </center>
            <center>
                <label>Precio</label><br>
                <?php 
            $query = $this->db->query("select * from evento where id=".$evento[0]->id);
            $row = $query->row();
            
                $options = array($row->precio1 => $row->precio1,
                             $row->precio2 => $row->precio2,
                             $row->precio3 => $row->precio3,
                             $row->precio4 => $row->precio4,
                             $row->precio5 => $row->precio5,
                             $row->precio6 => $row->precio6,
                             $row->precio7 => $row->precio7,
                             $row->precio8 => $row->precio8,
                             $row->precio9 => $row->precio9,
                             $row->precio10 => $row->precio10);
                    echo form_dropdown('precio', $options);

            
            ?>

            </center>
            <br>
            <center><?php echo form_submit('enviar', 'Confirmar');?></center>
            <?php echo form_close();?>
            <br>
            <?php if($this->session->userdata('categoria')=='Administrador'){ ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Estadistica</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-2 col-md-2">
                        <?php echo img('img/icono_vendidas.png');echo'<b> Vendidas:<b>';
                         $entradasVendidas = $this->db->query("select * from reserva where evento=".$evento[0]->id);                           
                        echo $entradasVendidas->num_rows();    
                        ?>
                   </div>
                   <div class="col-xs-2 col-md-2">
                        <?php echo img('img/icono_disponible.png');echo'<b> Disponibles:<b>'?>
                   </div>
                   <div class="col-xs-2 col-md-2">
                        <?php echo img('img/icono_efectivo.png');echo'<b> Efectivo:<b>';
                           $entradasVendidasEfectivo = $this->db->query("select * from reserva where formaPago='Efectivo'and evento=".$evento[0]->id);
                echo $entradasVendidasEfectivo->num_rows();
                       ?>
                   </div>
                    <div class="col-xs-2 col-md-2">
                        <?php echo img('img/icono_tarjeta.png');echo'<b> Tarjeta:<b>';
    $entradasVendidasTarjeta = $this->db->query("select * from reserva where formaPago='Tarjeta'and evento=".$evento[0]->id);
                echo $entradasVendidasTarjeta->num_rows();                                                                             
                        ?>
                   </div>  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Recaudacion</h3>
              </div>
              <div class="panel-body">
                <div class="col-xs-2 col-md-2">
                        <?php echo img('img/recaudacion_efectivo.png');echo'<b> Efectivo:<b>';
                        $queryEfectivo = $this->db->where('evento',$evento[0]->id);
                        $queryEfectivo = $this->db->where('formaPago','Efectivo');                                     
                        $queryEfectivo = $this->db->select_sum('precio', 'preciototal');                               
                        $queryEfectivo = $this->db->get('reserva');
                        $resultEfectivo = $queryEfectivo->result();
                        $importeEfectivo = $resultEfectivo[0]->preciototal ;                                                    
                        echo $importeEfectivo;                                                   
                               
                                                                             
                        ?>
                   </div>
                   <div class="col-xs-2 col-md-2">
                        <?php echo img('img/recaudacion_tarjeta.png');echo'<b> Tarjeta:<b>';
                            $queryTarjeta = $this->db->where('evento',$evento[0]->id);
                        $queryTarjeta = $this->db->where('formaPago','Tarjeta');                                     
                        $queryTarjeta = $this->db->select_sum('precio', 'preciototal');                               
                        $queryTarjeta = $this->db->get('reserva');
                        $resultTarjeta = $queryTarjeta->result();

                        $importeTarjeta = $resultTarjeta[0]->preciototal ;                                                    
                        echo $importeTarjeta;
                       ?>
                   </div>
                   <div class="col-xs-2 col-md-2">
                        <?php echo img('img/recaudacion_total.png');echo'<b> Total:<b>';
                      
                        echo $importeEfectivo + $importeTarjeta;
                       ?>
                   </div>
              </div>
            </div><br>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/usuario_controller/" title="ir a Nuevo Usuario"><?php echo img('img/manager.png');?></a>
            <a class="btn btn-default " href="<?php echo base_url();?>index.php/teatro_controller" title="ir a Teatros"><?php echo img('img/starting.png');?></a><?php }?> 
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
