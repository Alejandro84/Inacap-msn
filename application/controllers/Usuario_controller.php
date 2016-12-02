<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_controller extends CI_Controller{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('usuario');
   }

   function index()
   {
      $data['usuarios'] = $this->usuario->getAll(0);
      $this->load->view('template/header', $data);
      $this->load->view('template/nav');
      $this->load->view('usuario/listar');
      $this->load->view('template/footer');
   }

   function nuevo()
   {

      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('usuario/nuevo');
      $this->load->view('template/footer');

   }

   function crear()
   {
      $correo = $this->input->post('correo');
      $password = $this->input->post('password');

      $insert = array(
         'correo' => $correo,
         'password' => $paswoord,
         'estado' => 1
      );

      if ( ! $this->usuario->insertar( $insert ) )
      {
         $mensaje = 'No se pudieron guardar los datos';
         $this->session->set_flashdata('error', $mensaje);
         redirect('admin/usuario');
      } else {
         $mensaje = 'Los datos se guardaon de forma correcta';
         $this->session->set_flashdata('success', $mensaje);
         redirect('admin/usuario');
      }
   }
   public function editar()
   {
      $id_usuario = $this->input->post('id_usuario');

      $correo = $this->input->post('correo');
      $password = $this->input->post('password');

      $insert = array(
         'correo' => $correo,
         'password' => $paswoord,
         'ultima_modificacion' => date(Y-m-d)
         'estado' => 1
      );


       if ( !  $this->usuario->actualizar( $insert, $id_usuario ))
       {
          $mensaje = 'No se pudieron guardar los datos';
          $this->session->set_flashdata('error', $mensaje);
          redirect('admin/usuario');
       } else {
          $mensaje = 'Los datos se guardaon de forma correcta';
          $this->session->set_flashdata('success', $mensaje);
          redirect('admin/usuario');
       }
   }
   public function actualizar()
   {
      $this->load->view('template/header');
      $this->load->view('mensaje/nuevo');
      $this->load->view('usuario/editar');
      $this->load->view('template/footer');
   }
   public function eliminar()
   {
      if ( ! $this->usuario->borrar( $id ) )
      {
         $error = $this->db->_error_message();
         $mensaje = 'No se pudo borrar el elemento: '.$error;
         $this->session->set_flashdata('error', $mensaje );
         redirect('admin/usuario');

      } else {

         $mensaje = 'Elemento borrado de manera correcta. <a href="'.site_url('admin/alumno/papelera').'">¿Desea recuperarlo?</a>';
         $this->session->set_flashdata('success', $mensaje );
         redirect('admin/usuario');
      }
   }



}
