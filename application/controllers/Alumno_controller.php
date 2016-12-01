<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_controller extends CI_Controller{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('alumno');
   }

   function index()
   {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('alumno/listar');
      $this->load->view('template/footer');
   }

}
