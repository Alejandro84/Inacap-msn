<?php
Class Login extends CI_Model
{
 function getUser($correo, $password)
 {
   $this -> db -> select('id_usuario, correo, password');
   $this -> db -> from('usuarios');
   $this -> db -> where('correo', $correo);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
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
