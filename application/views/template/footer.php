   <script type="text/javascript" src="<?= site_url('/assets/js/jquery.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= site_url('/assets/js/tether.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= site_url('/assets/js/bootstrap.min.js'); ?>"></script>
   <script type="text/javascript" src="<?= site_url('/assets/js/awesomplete.min.js'); ?>"></script>

   <? if ( isset($javascript) )
   {
      foreach ( $javascript as $js )
      {
         echo '<script type="text/javascript" src="'.site_url('assets/js/'.$js.'.js').'"></script>';
      }

   } ?>

</body>
</html>
