<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carrera_controller extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('carrera');
   }

   public function index()
   {
      $data['carreras'] = $this->carrera->getAll();
      $this->load->view('template/header', $data);
      $this->load->view('template/nav');
      $this->load->view('carrera/listar');
      $this->load->view('template/footer');
   }

   public function nuevo()
   {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('carrera/nuevo');
      $this->load->view('template/footer');
   }
   public function editar()
   {
      $this->load->view('template/header');
      $this->load->view('carrera/editar');
      $this->load->view('template/footer');
   }

   public function insertar()
   {
      $nombre = $this->input->post('nombre');
      $sede = $this->input->post('sede');

      if ( $nombre != null && $sede != null )
      {
         $insert = array( 'nombre' => $nombre, 'sede' => $sede );

         if ( ! $this->carrera->insertar( $insert ) )
         {
            $mensaje = 'No se pudo guardar la información ';
            $estado = 'error';

         } else {
            $mensaje = 'Los datos han sido guardados correctamente. <a href="'.site_url('admin/carreras/').'">¿Desea ver el listado?</a>';
            $estado = 'success';
         }

      } else {
         $mensaje = 'Debe rellenar todos los campos. ';
         $estado = 'error';
      }

      $this->session->set_flashdata($estado , $mensaje );
      redirect('admin/carreras/nueva');
   }


   public function borrar()
   {

   }

   public function actualizar()
   {

   }

}

/* End of file Carrera_controller.php */
/* Location: ./application/controllers/Carrera_controller.php */
