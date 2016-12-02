<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje extends CI_Model{

   public function __construct()
   {
      parent::__construct();
   }

   public function getAll( $offset )
   {
      $this->db->select('*');
      $this->db->from('mensajes');
      $this->db->limit(40, $offset);
      $query = $this->db->get();

      if ( $query->num_rows() > 0 )
      {
         return $query->result();

      } else {

         return false;

      }

   }

   public function insertar( $datos )
   {
      if ( ! $this->db->insert('mensajes', $datos ) )
      {
         return false;
      } else {
         return true;
      }
   }

}
