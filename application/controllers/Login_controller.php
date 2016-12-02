<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

   function __construct()
   {
      parent::__construct();
      $this->load->model('login');
   }

   function index()
   {
      //$this->load->helper(array('form'));
      $this->load->view('template/header');
      $this->load->view('login/login');
      $this->load->view('template/footer');
   }
   function verificar()
   {
      $usuario = $this->input->post('usuario');
      $password = $this->input->post('password');

      $usuario = $this->login->getUser($usuario, $password);

      if ( ! $usuario )
      {
         $mensaje = 'Usuario o contraseña incorrectos';
         $this->session->set_flashdata('error', $mensaje);
         redirect('login');
      } else {
         $mensaje = 'Sesión iniciada con exito';
         $this->session->set_flashdata('success', $mensaje);
         redirect('admin/alumno');
      }

   }
}

?>
