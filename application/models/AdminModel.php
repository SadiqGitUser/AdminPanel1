<?php

class AdminModel extends CI_Model{
  public function insertUser($data){

   $this->db->insert('human',$data);
  }

  public function umumiIstifadeciler(){
       return $this->db->get('human')->result_array();
  }
  public function getSingleUser($id){
      return $this->db->where('id',$id)->get('human')->row_array();
  }
  public function updateUser($id,$data){
         $this->db->where('id',$id)->update('human',$data);
  }
}