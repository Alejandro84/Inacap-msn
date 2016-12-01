<div class="container">

   <div class="row">
      <div class="col-md-12">
         <h2>Alumnos en el sistema</h2>
      </div>
   </div>

   <div class="row">
      <div class="col-md-12">

         <? if ( ! $alumnos ): ?>
         <div class="alert alert-info">
            <p>No hay alumnos en el sistema, <a href="<?= site_url('admin/alumno/nuevo');?>">¿Desea ingresar uno?</a></p>
         </div>

         <? else: ?>

            <table class="table table-striped table-bordered table-hover">

               <thead>
                  <th>Apellidos</th>
                  <th>Nombres</th>
                  <th>RUT</th>
                  <th>Carrera</th>
                  <th>Semestre</th>
                  <th>Correo</th>
               </thead>

               <tbody>
                  <? foreach ( $alumnos as $alumno ): ?>
                  <tr>
                     <td><?= $alumno->primer_apellido.' '.(isset($alumno->segundo_apellido )) ? $alumno->segundo_apellido:'';?></td>
                     <td><?= $alumno->primer_nombre.' '.(isset($alumno->segundo_nombre )) ? $alumno->segundo_apellido:'';?></td>

                  </tr>
                  <? endforeach; ?>
               </tbody>

            </table>

         <? endif; ?>
         
      </div>
   </div>

</div>
