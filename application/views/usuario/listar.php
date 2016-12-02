<div class="container">

   <div class="row">
      <div class="col-md-12">
         <h2>Alumnos en el sistema
            <a href="<?= site_url('admin/usuario/nuevo');?>" class="btn btn-primary pull-right">Agregar alumno</a>
         </h2>
         <hr>
      </div>
   </div>

   <div class="row">
      <div class="col-md-12">

         <? if ( ! $usuarios ): ?>
         <div class="alert alert-info">
            <p>No hay alumnos en el sistema, <a href="<?= site_url('admin/usuario/nuevo');?>">¿Desea ingresar uno?</a></p>
         </div>

         <? else: ?>

            <table class="table table-striped table-bordered table-hover">

               <thead>
                  <th>Apellidos</th>
                  <th>Nombres</th>
                  <th>Correo</th>
               </thead>

               <tbody>
                  <? foreach ( $usuarios as $u ): ?>
                  <tr>
                     <td><?=$u->primer_apellido;?></td>
                     <td><?=$u->primer_nombre;?></td>
                     <td><?=$u->correo;?></td>
                     
                  </tr>
                  <? endforeach; ?>
               </tbody>

            </table>

         <? endif; ?>

      </div>
   </div>

</div>
