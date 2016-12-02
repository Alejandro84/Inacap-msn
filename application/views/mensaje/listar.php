<div class="container">

   <div class="row">
      <div class="col-md-12">
         <h2>Mensajes
            <a href="<?= site_url('admin/mensaje/nuevo');?>" class="btn btn-primary pull-right">Agregar alumno</a>
         </h2>
         <hr>
      </div>
   </div>

   <div class="row">
      <div class="col-md-12">

         <? if ( ! $mensajes ): ?>
         <div class="alert alert-info">
            <p>No hay alumnos en el sistema, <a href="<?= site_url('admin/mensaje/nuevo');?>">¿Desea ingresar uno?</a></p>
         </div>

         <? else: ?>

            <table class="table table-striped table-bordered table-hover">

               <thead>
                  <th>Enviado a</th>
                  <th>Remitente</th>
                  <th>Mensaje</th>
               </thead>

               <tbody>
                  <? foreach ( $mensaje as $m ): ?>
                  <tr>
                     <td><?=$m->id_alumno;?></td>
                     <td><?=$m->id_remitente;?></td>
                     <td><?=$m->mensaje;?></td>
                  </tr>
                  <? endforeach; ?>
               </tbody>

            </table>

         <? endif; ?>

      </div>
   </div>

</div>
