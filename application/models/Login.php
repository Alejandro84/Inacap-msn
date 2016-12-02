<?php
Class Login extends CI_Model
{
   function getUser($correo, $password)
   {
      $this->db->select('*');
      $this->db->from('usuarios');
      $this->db->where('correo', $correo);
      $this->db->where('password', $password);

      $query = $this->db->get();

      if( $query->num_rows() > 0 )
      {
         return $query->result();
      }
      else
      {
         return false;
      }
   }
}
?>
