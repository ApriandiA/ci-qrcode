<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base_m extends CI_Model {

    public function get_data($table,$where = FALSE){
        if($where === FALSE){
            return $this->db->get($table);
        }
        return $this->db->where($where)->get($table);
    }

    public function insertorupdate($table,$where, $data){
      $cek  = $this->get_data($table, $where)->num_rows();
      if ($cek){
        $doSave = $this->db->where($where)
                            ->set($data)
                            ->update($table);
      }else{
        $doSave = $this->db->set($data)
                           ->insert($table);
      }
      if($doSave){
        return  true;
      }else{
        return  false;
      }
    }

    public function delete($table,$where){
        return $this->db->where($where)->delete($table);
    }

}
