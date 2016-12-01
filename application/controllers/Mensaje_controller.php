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
		$this->load->view('listar');
	}

   public function nuevo()
   {
      $id_alumno = $this->input->post('id_alumno');
      $id_remitente = $this->input->post('id_remitente');
      $mensaje = $this->input->post('mensaje');

      $insert = array(
         'id_alumno' => $id_alumno,
         'id_remitente' => $id_remitente,
         'mensaje' => $mensaje
       );
   }

   public function  guardar()
   {

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
   }
   public function actualizar()
   {

   }
   public function eliminar()
   {

   }

   /*
      index -> aqui listamos la información de la db.
      nuevo -> formulario para crear nueva fila.
      guardar -> recibe los datos del formulario "nuevo".
      editar -> carga el formulario con datos para actualizar.
      actualizr -> recibe los nuevos datos del formulario "editar".
      eliminar -> recibe el id de una fila para actualizarla con estado 0.
   */
}
