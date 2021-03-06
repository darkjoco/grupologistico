<?php

class Proveedores_model extends CI_Model{
    
    function insertar($datos){
        
        if($this->db->insert('proveedor', $datos)){
            return true;
        }
        else{
            return false;
        }
         
    }
    
    function repetido($rut){
        
        $this->db->select ('rut_proveedor');
        $this->db->from('proveedor');
        $this->db->where('rut_proveedor',$rut);
                
        $query = $this->db->get();
        
        if($query->num_rows() == 0){
            
            return false;
        }
        
        else{
            
            return true;
        }
    }
    
    function listar_proveedores(){
        
        $this->db->select('rut_proveedor,razon_social');
        $resultado = $this->db->get('proveedor');
        
        return $resultado->result_array();
        
    }
}

?>

