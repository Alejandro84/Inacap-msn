<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

   function __construct()
   {
      parent::__construct();
   }

    function index()
    {
      //$this->load->helper(array('form'));
      $this->load->view('template/header');
      $this->load->view('login/login');
      $this->load->view('template/footer');
    }

   function validar()
   {
      $usuario = $this->input->post('usuario');
      $password = $this->input->post('password');
   }
}

?>
