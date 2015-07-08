
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Bitacora_model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        public function add($pago,$id_butaca,$fila, $id_evento, $precio){
            $formaPago = $this->input->post('formaPago');
            $data = array(
               'formaPago' => $formaPago ,
               'id_butaca' => $id_butaca ,
               'fila' => $fila,
                'precio' => $precio,
               'usuario' => $this->session->userdata('id'),
               'evento' => $id_evento    
            );
            $this->db->insert('bitacora', $data); 
            return $this->db->insert_id();
        }
        
        function get_all_for_user($id){
            $query = $this->db->where('usuario',$id);
            $query = $this->db->get('bitacora');
            return $query->result();
        }
        
        
        
        
        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete('reserva');
            
        }
    }

/* fin del archivo evento_model.php*/