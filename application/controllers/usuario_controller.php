<?php 
if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed');

class Usuario_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('html');
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index(){
        if($this->session->userdata('categoria')=='Administrador'){
            $data['listado'] = $this->User_model->get_todos();
            $this->load->view('codigofacilito/user_view',$data);
        }
        else{
            redirect('welcome');
        }
		
	}
    
    
    
    
    public function addUser(){
        if($this->session->userdata('categoria')=='Administrador'){
                        if($this->input->post()){
            /*defino las reglas de validacion de mi formulario*/
            $this->form_validation->set_rules('firstname','Nombre','required|alpha|max_length[20]|min_length[3]');
            $this->form_validation->set_rules('lastname','Apellido','required|alpha|max_length[20]|min_length[3]');
            $this->form_validation->set_rules('username','Nombre de usuario','required|is_unique[usuario.username]|max_length[20]|min_length[3]');
            $this->form_validation->set_rules('pass','Clave','required|alpha_numeric|max_length[20]|min_length[3]');
            $this->form_validation->set_rules('tipoUsuario','Tipo de usuario','required|min_length[3]');
            $this->form_validation->set_rules('tipoUsuario','TipoUsuario','trim');
            
            if($this->form_validation->run() == TRUE){
                $id_insertado = $this->User_model->add();
                redirect('usuario_controller');
            }
            else{$this->load->view('codigofacilito/newuser_view'); }

        }else{
            $this->load->view('codigofacilito/newuser_view');
        }
        }else{
            redirect('welcome');
        }

        
    }

    
    
    public function editUser($id = NULL){
        if($this->session->userdata('categoria')=='Administrador'){
            if($id == NULL OR !is_numeric($id)){ 
            echo 'error con el id';
            return;
        }
        else{
            if($this->input->post()){
                /*defino las reglas de validacion de mi formulario*/
                $this->form_validation->set_rules('firstname','Nombre','required|alpha|max_length[20]|min_length[3]');
                $this->form_validation->set_rules('lastname','Apellido','required|alpha|max_length[20]|min_length[3]');
                $this->form_validation->set_rules('username','Nombre de usuario','required|max_length[20]|min_length[3]');
                $this->form_validation->set_rules('pass','Clave','required|alpha_numeric|max_length[20]|min_length[3]');
                $this->form_validation->set_rules('tipoUsuario','Tipo de usuario','required|min_length[3]');
                $this->form_validation->set_rules('tipoUsuario','TipoUsuario','trim');
                if($this->form_validation->run() == TRUE){
                    $id_actualizar = $this->User_model->edit($id);
                    redirect('usuario_controller');
                }
                else{$this->load->view('codigofacilito/edituser_view'); }
                
            }
            else{
                $datos['datos_usuario'] = $this->User_model->get_by_id($id);
                //print_r($datos['datos_usuario']);
                if(empty($datos['datos_usuario'])){
                    echo 'el ID es invalido';
                }
                else{$this->load->view('codigofacilito/edituser_view',$datos);}    
                }
                
            
            }
        }else{
             redirect('welcome');
        }
        
    }
    
    
    public function deleteUser($id = NULL){
        if($this->session->userdata('categoria')=='Administrador'){
            if($id == NULL OR !is_numeric($id)){ 
            echo 'error con el id';
            return;
        }
        else{
            if($this->input->post()){
                $id_eliminar = $this->input->post('id');
                $aldgo = $this->User_model->delete($id_eliminar);
                redirect('usuario_controller');
            }
            else{
               
                $datos['datos_usuario'] = $this->User_model->get_by_id($id);
                if(empty($datos['datos_usuario'])){
                    echo 'el ID es invalido';
                }
                else{$this->load->view('codigofacilito/delete_user_view',$datos);} 
            }
            
            
   
                
            
        }
        }
        else{
            redirect('welcome');
        }
        
    }
}

/* End of file usuario_controller.php */