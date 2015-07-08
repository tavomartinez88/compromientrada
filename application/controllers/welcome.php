<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->library('session');
        
        
        
        if($this->input->post()){
            /*defino las reglas de validacion de mi formulario*/
            $this->form_validation->set_rules('username','Nombre de usuario','required|max_length[20]|min_length[3]');
            $this->form_validation->set_rules('pass','Clave','required|alpha_numeric|max_length[20]|min_length[3]');
            
            if($this->form_validation->run() == TRUE){
                
                $id_estado =$this->User_model->existUser($this->input->post('username'),$this->input->post('pass'));
                
                if($id_estado>0){
                    $tipo = $this->User_model->get_by_id($id_estado);
                    
                    $this->session->set_userdata('usuario', $tipo[0]->username);
                    $this->session->set_userdata('id', $tipo[0]->id);
                    
                    
                    if(($tipo[0]->tipoUsuario) == "Administrador"){
                        //echo "es administrador";
                        $this->session->set_userdata('categoria', 'Administrador');
                        redirect('usuario_controller');
                    }
                    else{
                        $this->session->set_userdata('categoria', 'Vendedor');
                        redirect('evento_controller');
                    }
                        
                }
                else{
                    //echo 'datos invalidos';
                    $this->load->view('codigofacilito/login_incorrect');
                    
                }
                
                
                
                
            }
            else{$this->load->view('codigofacilito/index'); }

        }else{
            $this->load->view('codigofacilito/index');
        }
        
        
        
		
	}
    
    public function outSession(){
    if($this->session->userdata('id')or $this->session->userdata('categoria')or $this->session->userdata('usuario')){
        $this->session->sess_destroy();
    }
    redirect(base_url());
        
        
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */