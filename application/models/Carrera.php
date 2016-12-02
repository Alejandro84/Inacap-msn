<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carrera extends CI_Model {

   public function __construct()
   {
      parent::__construct();

   }

   public function getAll()
   {
      $this->db->select('*');
      $this->db->from('carreras');
      $q = $this->db->get();

      if ( $q->num_rows() > 0 )
      {
         return $q->result();
      } else {
         return false;
      }
   }

   public function insertar( $data )
   {
      if ( ! $this->db->insert('carreras', $data ) )
      {
         return false;
      } else {
         return true;
      }
   }

}

/* End of file Carrera.php */
/* Location: ./application/models/Carrera.php */
