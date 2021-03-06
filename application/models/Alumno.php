<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno extends CI_Model{

   public function __construct()
   {
      parent::__construct();
   }

   public function getAll( $offset )
   {
      $this->db->select('*');
      $this->db->from('alumnos');
      $this->db->limit(40, $offset);
      $query = $this->db->get();

      if ( $query->num_rows() > 0 )
      {
         return $query->result();

      } else {

         return false;

      }

   }

   public function getTrash( $offset )
   {
      $this->db->select('*');
      $this->db->from('alumnos');
      $this->db->where('estado =', '0');
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
      if ( ! $this->db->insert('alumnos', $datos ) )
      {
         return false;
      } else {
         return true;
      }
   }

}
