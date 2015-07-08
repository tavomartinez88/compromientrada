<?php 
if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed');

class Bitacora_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('html');
        $this->load->model('User_model');
        $this->load->model('Evento_model');
        $this->load->model('Entrada_model');
        $this->load->model('Teatro_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('fpdf');
        
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
    
    public function newTickets(){
        //$query = $this->Bitacora_model->get_all_for_user($this->session->userdata('id'));
        
        
	$pdf=new FPDF();
	$pdf->AddPage('P','Letter');
	
	$pdf->Ln();
	
	$pdf->SetFont('Times','B',26);
	$pdf->Ln();
	$pdf->Cell(0,20,'Presupuesto',0,1,'C');
	
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(50,12,'Fecha Emision:',1,0,'C');
	$pdf->Cell(50,12,'De:',1,0,'C');
	$pdf->Cell(50,12,'Direccion:',1,0,'C');
	$pdf->Cell(50,12,'Ciudad:',1,0,'C');
	$pdf->Cell(50,12,'Dias de validez del presupuesto:',1,0,'C');
	$pdf->Cell(50,12,'C.P.:',1,0,'C');
	$pdf->Cell(50,12,'Tel:',1,0,'C');
	$pdf->Cell(50,12,'E-mail:',1,0,'C');
	$pdf->Cell(50,12,'Remitente',1,0,'C');
	
	$pdf->Cell(50,12,'Costo Total:',1,0,'C');
	

	$pdf->SetFont('Times','I',12);
	$pdf->Cell(50,12,date("d-m-Y"),1,1,'C');
	$pdf->Cell(50,12,utf8_decode($_POST['nombreEmpresa']),1,0,'C');
	$pdf->Cell(50,12,utf8_decode($_POST['direccionEmpresa']),1,0,'C');
	$pdf->Cell(50,12,utf8_decode($_POST['ciudad']),1,0,'C');
	$pdf->Cell(50,12,utf8_decode($_POST['cantDiasValido']),1,0,'C');
	$pdf->Cell(50,12,utf8_decode($_POST['codPostal']),1,0,'C');
	$pdf->Cell(50,12,utf8_decode($_POST['telefono']),1,0,'C');
	$pdf->Cell(50,12,utf8_decode($_POST['correo']),1,0,'C');
	
	$pdf->Cell(50,12,utf8_decode($_POST['precioTotal']),1,0,'C');
	

	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,18,'Detalles de presupuesto:',0,1,'A');
	$pdf->SetFont('Times','I',12);

	$pdf->Write(7,utf8_decode($_POST['detallesServicio']));
	$pdf->Ln();
	
	
	

	$pdf->Output();

        

        

    }
    
    
   

    
    public function deleteEntrada($id = NULL){
        if($id == NULL OR !is_numeric($id)){ 
            $this->load->view('codigofacilito/delete_entrada_view_incorrect');
        }
        else{
            if($this->input->post()){
                $id_eliminar = $this->input->post('id');
                $algo = $this->Entrada_model->delete($id_eliminar);
                redirect('entrada_controller/reservaciones');
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