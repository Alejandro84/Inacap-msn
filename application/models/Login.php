<?php
Class Login extends CI_Model
{
 function getUser($sNick, $sPassword)
 {
   $this -> db -> select('nId, sNick, sPassword');
   $this -> db -> from('usuarios');
   $this -> db -> where('sNick', $sNick);
   $this -> db -> where('sPassword', MD5($sPassword));
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
