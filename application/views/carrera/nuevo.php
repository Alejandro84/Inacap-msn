<div class="container">

   <div class="row">
      <form method="post" action="<?= site_url('admin/carreras/guardar'); ?>">
      <div class="col-md-6 col-md-offset-3">
         <h2>Agregar nueva carrera</h2>
         <hr>

         <? $this->load->view('template/alert'); ?>
         <div class="form-group">
            <caption>Nombre de la carrera</caption>
            <input type="text" name="nombre" class="form-control">
         </div>

         <div class="form-group">
            <caption>Sede de la carrera</caption>
            <input type="text" name="sede" class="form-control">
         </div>

         <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Guardar</button>
         </div>

      </div>
      </form>
   </div>

</div>
