<div class="container">
<form method="post" action="<?= site_url('login/verificar'); ?>">
   <div class="row">

      <div class="col-md-4 col-md-offset-4" style="padding-top:10px; background-color:#fff;">

         <h2>Iniciar Sesión</h2>
         <hr>
         <? $this->load->view('template/alert'); ?>
         <div class="form-group">
            <input type="text" name="usuario" class="form-control" placeholder="Usuario">
         </div>

         <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Contraseña">
         </div>

         <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
         </div>

      </div>

   </div>
</form>

</div>
