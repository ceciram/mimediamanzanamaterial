
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Angular Routing -->
<script src=<?php echo get_site_url()."/wp-content/themes/mmmm/libs/angular.min.js";?> type="text/javascript"></script>
<script src=<?php echo get_site_url()."/wp-content/themes/mmmm/libs/angular-route.js";?> type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src=<?php echo get_site_url()."/wp-content/themes/mmmm/app.js";?>></script>

<script type="text/javascript">

  $( document ).ready(function() {

      $('.button-collapse').sideNav({
        menuWidth: 240, // Default is 240
        edge: 'left', // Choose the horizontal origin
        closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      });

      $('.collapsible').collapsible();

      // animación para sidebar monedas
      function sidebarMonedas() {
          $('.sidebar-monedas').addClass('mover-left');
          $('.sidebar-monedas').removeClass('mover-right');
      }

      function opacidad() {
        $('.opacity').show();
        $('.opacity').addClass('suave');
      }

      function ocultar() {
        $('.sidebar-monedas').removeClass('mover-left');
        $('.sidebar-monedas').addClass('mover-right');
        $('.opacity').hide();
        $('.opacity').addClass('desaparecer');
      }

      $(".button-monedas").click(function() {
        sidebarMonedas();
        opacidad();
      });

      $('.opacity').click(function() {
        ocultar();
      });

  });

</script>

</body>
</html>
