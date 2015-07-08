<?php 
if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed');

class Entrada_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('html');
        $this->load->model('User_model');
        $this->load->model('Evento_model');
        $this->load->model('Entrada_model');
        $this->load->model('Bitacora_model');
        $this->load->model('Teatro_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('session');
        $config['upload_path'] = './img/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']= '0';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['image_width'] = '0';
	    $config['image_heigth'] = '0';
        $this->load->library('upload', $config);
        $this->upload->initialize($config); 
        array('error' => ' ' );

    }
    public function index(){
        if($this->session->userdata('categoria')=='Administrador' or $this->session->userdata('categoria')=='Vendedor'){
            
            $this->load->view('codigofacilito/reserva_view');
        }
        else{redirect('welcome');}
        
         
        
	}
    
    
    
public function addIn($evento){
$id['numero'] = $evento;
$fila1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21);
$fila2 = array(22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48);
$fila3 = array(49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75);
$fila4 = array(76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102);
$fila5 =array(103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129);
$fila6 =array(130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156);
$fila7 =array(157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183);
$fila8 =array(184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210);
$fila9 =array(211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237);
$fila10 =array(238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264);
$fila11 =array(265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291);
$fila12 =array(292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318);
$fila13 =array(319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345);
$fila14 =array(346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372);
$fila15 =array(373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399);
$fila16 =array(400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426);
$fila17 =array(427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453);
$fila18 =array(454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480);
$fila19 =array(481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507);
$fila20 =array(508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534);
$fila21 =array(535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561);
$fila22 =array(562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588);
$fila23 =array(589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615);
$fila24 =array(616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636);
$fila25 =array(637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655);
$fila26 =array(656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672);    
$fila27 =array(673,674,675,676,677,678,679,680,681,682,683,684,685,686,687);
$fila28 =array(688,689,690,691,692,693,694,695,696,697,698,699,700);    

        if($this->input->post()){
            $formaPago = $this->input->post('formaPago');
            $costo = $this->input->post('precio');
            $fila = 0;
            foreach ( $_POST["butacas"] as $como ) { 
                if (in_array($como, $fila1)) {
                    $fila = 1;
                }
                if (in_array($como, $fila2)) {
                    $fila = 2;
                }
                if (in_array($como, $fila3)) {
                    $fila = 3;
                }
                if (in_array($como, $fila4)) {
                    $fila = 4;
                }
                if (in_array($como, $fila5)) {
                    $fila = 5;
                }
                if (in_array($como, $fila6)) {
                    $fila = 6;
                }
                if (in_array($como, $fila7)) {
                    $fila = 7;
                }
                if (in_array($como, $fila8)) {
                    $fila = 8;
                }
                if (in_array($como, $fila9)) {
                    $fila = 9;
                }
                if (in_array($como, $fila10)) {
                    $fila = 10;
                }
                if (in_array($como, $fila11)) {
                    $fila = 11;
                }
                if (in_array($como, $fila12)) {
                    $fila = 12;
                }
                if (in_array($como, $fila13)) {
                    $fila = 13;
                }
                if (in_array($como, $fila14)) {
                    $fila = 14;
                }
                if (in_array($como, $fila15)) {
                    $fila = 15;
                }
                if (in_array($como, $fila16)) {
                    $fila = 16;
                }
                if (in_array($como, $fila17)) {
                    $fila = 17;
                }
                if (in_array($como, $fila18)) {
                    $fila = 18;
                }
                if (in_array($como, $fila19)) {
                    $fila = 19;
                }
                if (in_array($como, $fila20)) {
                    $fila = 20;
                }
                if (in_array($como, $fila21)) {
                    $fila = 21;
                }
                if (in_array($como, $fila22)) {
                    $fila = 22;
                }
                if (in_array($como, $fila23)) {
                    $fila = 23;
                }
                if (in_array($como, $fila24)) {
                    $fila = 24;
                }
                if (in_array($como, $fila25)) {
                    $fila = 25;
                }
                if (in_array($como, $fila26)) {
                    $fila = 26;
                }
                if (in_array($como, $fila27)) {
                    $fila = 27;
                }
                if (in_array($como, $fila28)) {
                    $fila = 28;
                }
                
                if(! $this->Entrada_model->existReserve($como,$evento)){
                    $this->Entrada_model->add($formaPago,$como,$fila,$evento,$costo);
                    /*$this->Bitacora_model->add($formaPago,$como,$fila,$evento,$costo);

                    require('/var/www/admin/pdf/fpdf.php');
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->SetFont('Arial', 'B', 16);
                    $query = $this->db->query("select * from bitacora where usuario=".$this->session->userdata(id));
                    if ($query->num_rows() > 0){
                       foreach ($query->result() as $row){
                          $pdf->Cell(40,5,$row->precio,1);
                          $pdf->Cell(80,5,$row->fila,1);
                          $pdf->Cell(40,5,$row->id_butaca,1);
                          $pdf->Ln(10);   
                          
                       }
                    }
                    
                    
                    $pdf->Output();*/

                }
                
                
            }
            $this->load->view('codigofacilito/reserva_view',$id);
        }
        else{$this->load->view('codigofacilito/reserva_view',$id);}
        
        
            
            
    }
    
    
    public function reservaciones($id){
        if($this->session->userdata('categoria')=='Administrador' or $this->session->userdata('categoria')=='Vendedor'){
            $data['listado'] = $this->Entrada_model->get_todos_for_event($id);
            $this->load->view('codigofacilito/reservaciones_view',$data);
        }
        else{
            redirect('welcome');
        }
		
	}
    

    
    
    
    
    public function deleteEntrada($id = NULL, $id_evento){
        if($id == NULL OR !is_numeric($id)){ 
            $this->load->view('codigofacilito/delete_entrada_view_incorrect');
        }
        else{
            if($this->input->post()){
                $id_eliminar = $this->input->post('id');
                $id_eliminado = $this->Entrada_model->delete($id_eliminar);
                
                redirect('entrada_controller/reservaciones/'.$id_evento);
            }
            else{
               
                $datos['datos_entrada'] = $this->Entrada_model->get_by_id($id);
                if(empty($datos['datos_entrada'])){
                    $this->load->view('codigofacilito/delete_entrada_view_incorrect');
                }
                else{$this->load->view('codigofacilito/delete_entrada_view',$datos);} 
            }
            
            
   
                
            
        }
    }
}

/* End of file evento_controller.php */