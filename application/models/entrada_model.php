
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Entrada_model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        function get_todos(){
            
            $query = $this->db->get('reserva');
            return $query->result();
        }
        
        function get_todos_for_event($id){
            $query = $this->db->where('evento',$id);
            $query = $this->db->get('reserva');
            return $query->result();
        }
        
        
        function get_by_id($id){
            $query = $this->db->where('id',$id);
            $query = $this->db->get('reserva');
            return $query->result();
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
            $this->db->insert('reserva', $data);
            return $this->db->insert_id();
        }
        
        function existReserve($id_butaca, $id_evento){
            $query = $this->db->where('id_butaca',$id_butaca);
            $query = $this->db->where('evento', $id_evento);
            $query = $this->db->get('reserva');
            return $query->num_rows();
        }
        
        
        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete('reserva');
            
        }
    }

/* fin del archivo evento_model.php*/