<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class User_model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        function get_todos(){
            $query = $this->db->get('usuario');
            return $query->result();
        }
        
        
        function existUser($usr,$pass){
            $query = $this->db->where('username',$usr);
            $query = $this->db->where('pass',$pass);
            $query = $this->db->get('usuario');
            if($query->num_rows()>0){
                foreach ($query->result() as $row){
                  return $row->id;
                  
                }
            }
            else{
                return 0;
            }
            
        }
        
        
        function get_by_id($id){
            $query = $this->db->where('id',$id);
            $query = $this->db->get('usuario');
            return $query->result();
        }
     
        function get_status_type_user($id){
            $query = get_by_id($id);
            foreach($query->result() as $row){
                $status = $row->tipoUsuario;
            }
            if($status == "vendedor"){return "vendedor";}else{return "administrador";}
        }
        
        
     
        
        public function add(){
            $data_insertar = $this->input->post();
            /*quito el campo que esta demas*/
            unset($data_insertar['enviar']);
            $this->db->insert('usuario',$data_insertar);
            return $this->db->insert_id();
        }
        
        public function edit($id){
            $data_actualizar = $this->input->post();
            /*quito el campo que esta demas*/
            unset($data_actualizar['enviar']);
            $this->db->where('id',$id);
            $this->db->update('usuario',$data_actualizar);
            
        }
        
        public function delete($id){
            $this->db->where('id',$id);
            $this->db->delete('usuario');
            
        }
    }

/* fin del archivo user_model.php*/