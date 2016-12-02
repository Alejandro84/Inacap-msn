<div class="container">
   <div class="row">

      <div class="col-md-12">
         <h2>Carreras en la base de datos</h2>
         <hr>
         <a href="<?= site_url('admin/carreras/nuevas');?>" class="btn btn-primary">Agregar</a>
         
         <? $this->load->view('template/alert'); ?>
      </div>

      <div class="col-md-12">
         <? if ( ! $carreras ): ?>

         <div class="alert alert-info">
            <p>No se han ingresado carreras al sistema. <a href="<?= site_url('admin/carreras/nueva');?>">¿Desea agregar una?</a></p>
         </div>

         <? else: ?>
            <table class="table table-striped table-bordered">
               <thead>
                  <th>Nombre</th>
                  <th>Sede</th>
                  <th>Fecha de ingreso a la db</th>
               </head>

               <tbody>

                  <? foreach ( $carreras as $c ): ?>

                  <tr>
                     <td><?= $c->nombre; ?></td>
                     <td><?= $c->sede; ?></td>
                     <td><?= date('d/m/Y H:i:s', strtotime( $c->cdate )); ?></td>
                  </tr>

                  <? endforeach; ?>

               </tbody>
            </table>
         <? endif;?>
      </div>

   </div>
</div>
