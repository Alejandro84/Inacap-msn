<div class="container">
   <div class="row">
      <div class="col-md-6">
         <h2>
            Agregar Usuario
         </h2>
      </div>
   </div>

   <form method="post" action="<?= site_url('admin/alumno/crear');?>">
   <div class="col-md-6">
      
      <hr>

         <div class="form-group">
            <caption>Correo</caption>
            <input type="mail" class="form-control" name="correo">
         </div>

         <div class="form-group">
            <caption>Contraseña</caption>
            <input type="password" class="form-control" name="password">
         </div>

         <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>

   </div>
   </form>


</div>
