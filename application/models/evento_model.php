
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Evento_model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        function get_todos(){
            
            $query = $this->db->get('evento');
            return $query->result();
        }
        
        
        function get_by_id($id){
            $query = $this->db->where('id',$id);
            $query = $this->db->get('evento');
            return $query->result();
        }
        
        
        public function add($img){
            $data_insertar = $this->input->post();
            
            //quito el campo que esta demas
            unset($data_insertar['enviar']);
            $this->db->insert('evento',$data_insertar);
            $this->db->where('id',$this->db->insert_id());
            $data = array(
               'imagen' => $img,
               
            );
            
            
            $this->db->update('evento',$data);
            
            
            return $this->db->insert_id();
        }
        
        public function edit($id){
            $data_actualizar = $this->input->post();
            
            //quito el campo que esta demas
            unset($data_actualizar['enviar']);
            $this->db->where('id',$id);
            $this->db->update('evento',$data_actualizar);
            
        }
        
        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete('evento');
            
        }
    }

/* fin del archivo evento_model.php*/