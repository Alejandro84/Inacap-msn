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
   <div class="col-md-8">

         <div class="form-group">
            <caption>de:</caption>
            <input type="text" class="form-control" name="id_remitente">
         </div>

         <div class="form-group">
            <caption>Para:</caption>
            <input type="text" class="form-control" name="id_alumno">
         </div>

         <div class="form-group">
            <caption>Mensaje</caption>
            <textarea rows="4" class="form-control" name="mensaje">
            </textarea>
         </div>



   </div>
   </form>


</div>
