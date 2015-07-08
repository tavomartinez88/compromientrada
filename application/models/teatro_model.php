
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Teatro_model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        function get_todos(){
            $query = $this->db->get('teatro');
            return $query->result();
        }
        
        
        function get_by_id($id){
            $query = $this->db->where('id',$id);
            $query = $this->db->get('teatro');
            return $query->result();
        }
        
        function add_butacas($cant,$id_teatro){
            $index=0;
            
            while($index<$cant){
                $data = array(
               'numButaca' => $index+1,
               'teatro' => $id_teatro,
               
                );
                $this->db->insert('butaca', $data); 
                $index++;
            }
        }
        
        
        
        public function add(){
            $data_insertar = $this->input->post();
            
            //quito el campo que esta demas
            unset($data_insertar['enviar']);
            unset($data_insertar['butaca']);
            $this->db->insert('teatro',$data_insertar);
            
            
            return $this->db->insert_id();
        }
        
        public function edit($id){
            $data_actualizar = $this->input->post();
            
            //quito el campo que esta demas
            unset($data_actualizar['enviar']);
            $this->db->where('id',$id);
            $this->db->update('teatro',$data_actualizar);
            
        }
        
        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete('teatro');
            
        }
    }

/* fin del archivo teatro_model.php*/