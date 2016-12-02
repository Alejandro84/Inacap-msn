<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

   function __construct()
   {
      parent::__construct();
   }

<<<<<<< HEAD
   function index()
   {
      $this->load->helper('form');
      $this->load->view('login');
   }
=======
    function index()
    {
      //$this->load->helper(array('form'));
      $this->load->view('template/header');
      $this->load->view('login/login');
      $this->load->view('template/footer');
    }
>>>>>>> 0a9564cb6719dc5639eaa262c03caae5cc0566ba

   function validar()
   {
      $usuario = $this->input->post('usuario');
      $password = $this->input->post('password');
   }
}

?>
