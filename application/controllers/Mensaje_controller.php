<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje_controller extends CI_Controller {

   public function __construct()
      {
         parent::__construct();
         $this->load->model('mensaje');
      }

	public function index()
	{
      $data['mensajes'] = $this->mensaje->getAll();

      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('mensaje/listar');
      $this->load->view('template/footer');
	}

   public function nuevo()
   {
      $this->load->view('template/header');
      $this->load->view('mensaje/nuevo');
      $this->load->view('mensaje/listar');
      $this->load->view('template/footer');
   }

   public function  crear()
   {
      $id_alumno = $this->input->post('id_alumno');
      $id_remitente = $this->input->post('id_remitente');
      $mensaje = $this->input->post('mensaje');

      $insert = array(
         'id_alumno' => $id_alumno,
         'id_remitente' => $id_remitente,
         'mensaje' => $mensaje
       );

       if ( ! $this->mensaje->insertar( $insert ) )
       {
          $mensaje = 'No se pudieron guardar los datos';
          $this->session->set_flashdata('error', $mensaje);
          redirect('admin/mensaje');
       } else {
          $mensaje = 'Los datos se guardaon de forma correcta';
          $this->session->set_flashdata('success', $mensaje);
          redirect('admin/mensaje');
       }
   }
   public function editar()
   {
      $id_mensaje = $this->input->post('id_mensaje');

      $id_alumno = $this->input->post('id_alumno');
      $id_remitente = $this->input->post('id_remitente');
      $mensaje = $this->input->post('mensaje');

      $insert = array(
         'id_alumno' => $id_alumno,
         'id_remitente' => $id_remitente,
         'mensaje' => $mensaje
       );

       $this->mensaje->actualizar( $insert, $id_mensaje )
   }
   public function actualizar()
   {
      $this->load->view('template/header');
      $this->load->view('mensaje/nuevo');
      $this->load->view('mensaje/editar');
      $this->load->view('template/footer');
   }
   public function eliminar()
   {
      if ( ! $this->mensaje->borrar( $id ) )
      {
         $error = $this->db->_error_message();
         $mensaje = 'No se pudo borrar el elemento: '.$error;
         $this->session->set_flashdata('error', $mensaje );
         redirect('admin/taxis');

      } else {

         $mensaje = 'Elemento borrado de manera correcta. <a href="'.site_url('admin/taxis/papelera').'">¿Desea recuperarlo?</a>';
         $this->session->set_flashdata('success', $mensaje );
         redirect('admin/taxis');
      }
   }
}
?>
