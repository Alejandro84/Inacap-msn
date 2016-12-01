<div class="container">
   <div class="row">
      <div class="col-md-12">
         <h2>
            Agregar Alumno
         </h2>
      </div>
   </div>

   <form method="post" action="<?= site_url('admin/alumno/crear');?>">
   <div class="col-md-6">

      <h4>Datos personales</h4>
      <hr>

         <div class="form-group">
            <caption>Primer Nombre</caption>
            <input type="text" class="form-control" name="primer_nombre">
         </div>

         <div class="form-group">
            <caption>Segundo Nombre</caption>
            <input type="text" class="form-control" name="segundo_nombre">
         </div>

         <div class="form-group">
            <caption>Primer Apellido</caption>
            <input type="text" class="form-control" name="primer_apellido">
         </div>

         <div class="form-group">
            <caption>Segundo Apellido</caption>
            <input type="text" class="form-control" name="segundo_apellido">
         </div>

         <div class="form-group">
            <caption>Rut</caption>
            <input type="text" class="form-control" name="rut">
         </div>

   </div>

   <div class="col-md-6">
      <h4>Datos academicos</h4>
      <hr>

      <div class="form-group">
         <caption>Seleccione Carrera</caption>
         <select name="id_carrera" class="form-control">
            <option>Seleccione una carrera</option>
         </select>
      </div>

      <div class="form-group">
         <caption>Semestre</caption>
         <input type="number" name="semestre" class="form-control">
      </div>

      <div class="form-group">
         <button class="btn btn-block btn-success" type="submit">Guardar</button>
      </div>

   </div>
   </form>


</div>
