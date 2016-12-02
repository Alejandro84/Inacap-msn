<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">

      <div class="navbar-header">

         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>

         <a class="navbar-brand" href="#">Inacap-MSN</a>

      </div>

      <div id="navbar" class="navbar-collapse collapse">

         <ul class="nav navbar-nav">


            <li class="dropdown">

               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumnos <span class="caret"></span></a>

               <ul class="dropdown-menu">
                  <li><a href="<?= site_url('admin/alumno')?>">Ver alumnos en el sistema</a></li>
                  <li><a href="<?= site_url('admin/alumno/nuevo')?>">Añadir alumno</a></li>
               </ul>

            </li>

            <li class="dropdown">

               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carreras <span class="caret"></span></a>

               <ul class="dropdown-menu">
                  <li><a href="<?= site_url('admin/carreras')?>">Ver carreras en el sistema</a></li>
                  <li><a href="<?= site_url('admin/carreras/nueva')?>">Añadir carrera</a></li>
               </ul>

            </li>

            <li class="dropdown">

               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mensajes <span class="caret"></span></a>

               <ul class="dropdown-menu">
                  <li><a href="<?= site_url('admin/mensaje')?>">Ver mensajes enviados</a></li>
                  <li><a href="<?= site_url('admin/mensaje/nuevo')?>">Enviar mensaje</a></li>
               </ul>

            </li>


         </ul>

         <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">

               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido  <span class="caret"></span></a>

               <ul class="dropdown-menu">
                  <li><a href="<?= site_url('admin/login/salir'); ?>">Cerrar sesión</a></li>
               </ul>

            </li>

         </ul>
      </div><!--/.nav-collapse -->

   </div><!--/.container-fluid -->
</nav>
