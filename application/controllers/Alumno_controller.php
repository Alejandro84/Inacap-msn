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

   function crear()
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
         $mensaje = 'No se pudieron guardar los datos';
         $this->session->set_flashdata('error', $mensaje);
         redirect('admin/alumno');
      } else {
         $mensaje = 'Los datos se guardaon de forma correcta';
         $this->session->set_flashdata('success', $mensaje);
         redirect('admin/alumno');
      }
   }
   public function editar()
   {
      $id_alumno = $this->input->post('id_alumno');

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


       if ( !  $this->alumno->actualizar( $insert, $id_mensaje ))
       {
          $mensaje = 'No se pudieron guardar los datos';
          $this->session->set_flashdata('error', $mensaje);
          redirect('admin/alumno');
       } else {
          $mensaje = 'Los datos se guardaon de forma correcta';
          $this->session->set_flashdata('success', $mensaje);
          redirect('admin/alumno');
       }
   }
   public function actualizar()
   {
      $this->load->view('template/header');
      $this->load->view('mensaje/nuevo');
      $this->load->view('alumno/editar');
      $this->load->view('template/footer');
   }
   public function eliminar()
   {
      if ( ! $this->alumno->borrar( $id ) )
      {
         $error = $this->db->_error_message();
         $mensaje = 'No se pudo borrar el elemento: '.$error;
         $this->session->set_flashdata('error', $mensaje );
         redirect('admin/alumno');

      } else {

         $mensaje = 'Elemento borrado de manera correcta. <a href="'.site_url('admin/alumno/papelera').'">¿Desea recuperarlo?</a>';
         $this->session->set_flashdata('success', $mensaje );
         redirect('admin/alumno');
      }
   }



}
