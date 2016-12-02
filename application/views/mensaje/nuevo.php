<div class="container">
   <div class="row">
      <div class="col-md-12">
         <h2>
            Agregar Mensaje
         </h2>
         <hr>
      </div>
   </div>

   <form method="post" action="<?= site_url('admin/mensaje/nuevo');?>">
      <div class="col-md-6">

            <div class="form-group">
               <caption>Titulo</caption>
               <input type="text" class="form-control" name="id_remitente">
            </div>

            <div class="form-group">
               <caption>Mensaje</caption>
               <textarea rows="4" class="form-control" name="mensaje">
               </textarea>
            </div>

            <button type="submit" name="guardar" class="btn btn-success">Enviar</button>

      </div>
      <div class="col-md-6">

            <div class="form-group">
               <caption>Destinatarios</caption>
               <ul>
                  <li class="checkbox"><input type="checkbox" name="ing_informatica" value="">Ingenieria en informatica
                     <ul>
                        <li class="checkbox"><input type="checkbox" name="semestre" value="">Semestre
                           <ul>
                              <li class="checkbox"><input type="checkbox" name="semestre" value="">Alejandro Vargas</li>
                              <li class="checkbox"><input type="checkbox" name="semestre" value="">Fabian Vasquez</li>
                              <li class="checkbox"><input type="checkbox" name="semestre" value="">Andres Otero</li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>

      </div>



   </form>

</div>
