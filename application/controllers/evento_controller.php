<?php 
if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed');

class Evento_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('html');
        $this->load->model('User_model');
        $this->load->model('Evento_model');
        $this->load->model('Teatro_model');
        $this->load->helper('url');
        $this->load->helper('form');
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
            $dataEvent['lista'] = $this->Evento_model->get_todos();
            $this->load->view('codigofacilito/evento_view',$dataEvent); 
        }
        else{
            redirect('welcome');
        }
        
         
        
	}
    
    public function do_upload($teatro){
        if($this->session->userdata('categoria')=='Administrador'){
            $dato['error'] = $this->upload->display_errors();
     

        
            if($this->input->post()){        
                $this->form_validation->set_rules('nombre','Nombre','required|max_length[200]|min_length[3]');
                $this->form_validation->set_rules('descripcion','Descripcion','required|max_length[3000]|min_length[3]');
                 if($this->form_validation->run() == TRUE){


                    if ( ! $this->upload->do_upload()){
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('codigofacilito/newevento_view', $error);
                    }
                    else{
                        
                        $datos["img"]=$this->upload->data();
                        $id_insertado = $this->Evento_model->add($datos["img"]["file_name"]);
           
                        
                        redirect('evento_controller');


                    } 

                    //echo "inserto el evento";

                    //redirect('teatro_controller');
                }
                else{//$this->load->view('codigofacilito/newevento_view'); 
                    echo "error";
                }

            }else{
                $this->load->view('codigofacilito/newevento_view',$dato);
            }
        }
        else{redirect('welcome');}

        
            
    }
    
    


    
    public function editEvento($id = NULL){
        $datos['datos_id'] = $id;
        if($this->session->userdata('categoria')=='Administrador'){
         if($id == NULL OR !is_numeric($id)){ 
            echo 'error con el id';
            return;
        }
        else{
            if($this->input->post()){
                /*defino las reglas de validacion de mi formulario*/
                $this->form_validation->set_rules('nombre','Nombre','required|max_length[20]|min_length[3]');
                $this->form_validation->set_rules('','Fecha','required|min_length[10]');
                $this->form_validation->set_rules('hora','Horario','required|min_length[5]');
                $this->form_validation->set_rules('descripcion','Descripcion','required|max_length[3000]|min_length[3]');
                if($this->form_validation->run() == TRUE){
                    $id_actualizar = $this->Evento_model->edit($id);
                    //redirect('evento_controller');
                    $dataEvent['lista'] = $this->Evento_model->get_todos();
                    $this->load->view('codigofacilito/evento_view',$dataEvent);
                }
                else{$this->load->view('codigofacilito/editevento_view',$datos); }
                
            }
            else{
                $datos['datos_evento'] = $this->Evento_model->get_by_id($id);
                $datos['datos_id'] = $id;
                //print_r($datos['datos_usuario']);
                if(empty($datos['datos_evento'])){
                    echo 'el ID es invalido';
                }
                else{$this->load->view('codigofacilito/editevento_view',$datos);}    
            }
                
            
            }
        }
        else{redirect('welcome');}

    }
    
    
    public function deleteEvento($id = NULL){
        if($this->session->userdata('categoria')=='Administrador'){
          if($id == NULL OR !is_numeric($id)){ 
            $this->load->view('codigofacilito/delete_evento_view_incorrect');
        }
        else{
            if($this->input->post()){
                $id_eliminar = $this->input->post('id');
                $algo = $this->Evento_model->delete($id_eliminar);
                redirect('evento_controller');
            }
            else{
               
                $datos['datos_evento'] = $this->Evento_model->get_by_id($id);
                if(empty($datos['datos_evento'])){
                    $this->load->view('codigofacilito/delete_evento_view_incorrect');
                }
                else{$this->load->view('codigofacilito/delete_evento_view',$datos);} 
            }
            
            
   
                
            
           }
        }
        else{redirect('welcome');}

    }
}

/* End of file evento_controller.php */