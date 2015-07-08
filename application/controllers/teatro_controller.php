<?php 
if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed');

class Teatro_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Teatro_model');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index(){
            if($this->session->userdata('categoria')=='Administrador'){
                $data['listado'] = $this->Teatro_model->get_todos();
                $this->load->view('codigofacilito/teatro_view',$data);
            }
            else{ redirect('welcome');}
   
	}
    
    public function addTeatro(){
        if($this->session->userdata('categoria')=='Administrador'){
            if($this->input->post()){
            //falta terminar de formularlo
            $this->form_validation->set_rules('nombre','Nombre','required|trim|max_length[30]|min_length[3]');
            $this->form_validation->set_rules('direccion','Direccion','required|max_length[30]|min_length[3]');
            $this->form_validation->set_rules('telefono','Telefono','required|numeric|max_length[13]|min_length[6]');
            $this->form_validation->set_rules('butaca','Butaca','required|numeric|max_length[3]|min_length[1]');
            
            if($this->form_validation->run() == TRUE){
                $id_insertado = $this->Teatro_model->add();
                $data = $this->input->post();
                $id_insertado_butaca = $this->Teatro_model->add_butacas($data[0]->butaca, $id_insertado);
                redirect('teatro_controller');
            }
            else{$this->load->view('codigofacilito/newteatro_view'); }

            }else{
                $this->load->view('codigofacilito/newteatro_view');
            }
        }
        else{
            redirect('welcome');
        }
        
        
    }

    
    
        public function editTeatro($id = NULL){
            if($this->session->userdata('categoria')=='Administrador'){
                if($id == NULL OR !is_numeric($id)){ 
                    echo 'error con el id';
                    return;
                }
                else{
                    if($this->input->post()){
                        /*defino las reglas de validacion de mi formulario*/


                        $this->load->helper('form');
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('nombre','Nombre','max_length[20]|min_length[3]');
                        $this->form_validation->set_rules('direccion','Direccion','re                   quired|max_length[20]|min_length[3]');
                        $this->form_validation->set_rules('telefono','telefono','required|numeric|max_length[20]|min_length[3]');

                        if($this->form_validation->run() == TRUE){
                            $this->load->model('Teatro_model');
                            $this->load->helper('url');

                            $id_actualizar = $this->Teatro_model->edit($id);
                            redirect('teatro_controller');
                        }
                        else{$this->load->view('codigofacilito/edit_teatro_view'); }

                    }
                    else{
                        $datos['datos_teatro'] = $this->Teatro_model->get_by_id($id);
                        //print_r($datos['datos_usuario']);
                        if(empty($datos['datos_teatro'])){
                            echo 'el ID es invalido';
                        }
                        else{$this->load->view('codigofacilito/edit_teatro_view',$datos);}    
                    }
                }
            }
            else{ redirect('welcome'); }
        
    }
    
    
    public function deleteTeatro($id = NULL){
        if($this->session->userdata('categoria')=='Administrador'){
            if($id == NULL OR !is_numeric($id)){ 
                echo 'error con el id';
                return;
            }
            else{
                if($this->input->post()){
                    $id_eliminar = $this->input->post('id');
                    $eliminar = $this->Teatro_model->delete($id_eliminar);
                    redirect('teatro_controller');
                }
                else{

                    $datos['datos_teatro'] = $this->Teatro_model->get_by_id($id);
                    if(empty($datos['datos_teatro'])){
                        echo 'el ID es invalido';
                    }
                    else{$this->load->view('codigofacilito/delete_teatro_view',$datos);} 
                }





            }
        }
        else{redirect('welcome');}
        
    }
}

/* End of file usuario_controller.php */