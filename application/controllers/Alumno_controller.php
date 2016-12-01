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
      $data['alumnos'] = $this->alumno->getAll(0);
      $this->load->view('template/header', $data);
      $this->load->view('template/nav');
      $this->load->view('alumno/listar');
      $this->load->view('template/footer');
   }

   function nuevo()
   {

      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('alumno/nuevo');
      $this->load->view('template/footer');

   }

   function guardar()
   {
      $primer_nombre = $this->input->post('primer_nombre');
      $segundo_nombre = $this->input->post('segundo_nombre');
      $primer_apellido = $this->input->post('primer_apellido');
      $segundo_apellido = $this->input->post('segundo_apellido');
      $rut = $this->input->post('rut');

      $insert = array(
         'primer_nombre' => $primer_nombre,
         'segundo_nombre' => $segundo_nombre,
         'primer_apellido' => $primer_apellido,
         'segundo_apellido' => $segundo_apellido,
         'rut' => $rut,
         'estado' => 1
      );

      if ( ! $this->alumno->insertar( $insert ) )
      {
         $mensaje = 'No se pudieron guardar los datos:<br>'.$this->db->_error_message();
         $this->session->set_flashdata('error', $mensaje);
         redirect('admin/alumno');
      } else {
         $mensaje = 'No se pudieron guardar los datos:<br>'.$this->db->_error_message();
         $this->session->set_flashdata('success', $mensaje);
         redirect('admin/alumno');
      }
   }

}
