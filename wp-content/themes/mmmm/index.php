<?php mmm_get_header(); ?>
<header>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="<?php echo get_site_url()?>" class="brand-logo hide-on-small-only hide-on-med-only">
          <div class="logo">
            <img src="<?php echo get_site_url()."/wp-content/themes/mmmm/assets/img/logo_mmm_icon.png"; ?>" alt="">
          </div>
          <div class="titulo fucsia">Mi Media Manzana</div>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#"><i class="material-icons">notifications</i></a></li>
          <li><a href=""><i class="material-icons">settings</i></a></li>
          <li><a href="">
            <div class="usuario">
              <div class="name">John Doe</div>
              <div class="avatar-usuario"><img src="<?php echo get_site_url()."/wp-content/themes/mmmm/assets/img/avatar.jpg"; ?>" alt=""></div>
            </div>
            </a>
          </li>
          <li>
            <div class="promociones yellow darken-3">
                <span class="white-text">Promociones</span>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed top-general blue-grey darken-3">

      <li><a class="waves-effect" href="#!/recomendados" >
        <img class="icon-item"src="http://mimediamanzana.pe/wp-content/themes/default-mobile/img/img-mobile/ico_recomendamos.png" alt="">
        <span>Te Recomendamos</span></a>
      </li>

      <li><a class="waves-effect" href="#!/tegusta">
        <img class="icon-item"src="http://mimediamanzana.pe/wp-content/themes/default-mobile/img/img-mobile/ico_tegusta.png" alt="">
        <span>Jugar Te gusta</span></a>
      </li>

      <li><a class="waves-effect" href="#!/enlinea">
        <img class="icon-item"src="http://mimediamanzana.pe/wp-content/themes/default-mobile/img/img-mobile/ico_enlinea_verde.png" alt="">
        <span>En línea ahora</span></a></li>

      <li><a class="waves-effect" href="#!/favoritos">
        <img class="icon-item"src="http://mimediamanzana.pe/wp-content/themes/default-mobile/img/img-mobile/ico_estrella_amarilla.png" alt="">
        <span>Favoritos</span></a>
      </li>

      <li><a class="waves-effect" href="#!/chat">
        <i class="material-icons white-text hide-on-small-only">chat_bubble</i>
        <img class="icon-item hide-on-med-and-up"src="http://mimediamanzana.pe/wp-content/themes/default-mobile/img/img-mobile/ico_chat_azul.png" alt="">
        <span>Mensajes</span></a>
      </li>

      <li><a class="waves-effect" href="#!/invitaciones">
        <i class="material-icons white-text hide-on-small-only">person_add</i>
        <img class="icon-item hide-on-med-and-up"src="http://mimediamanzana.pe/wp-content/themes/default-mobile/img/img-mobile/ico_invitaciones.png" alt="">
        <span>Invitaciones</span></a>
      </li>

      <li><a class="waves-effect" href="#!/segustan">
        <i class="material-icons white-text hide-on-small-only">favorite</i>
        <img class="icon-item hide-on-med-and-up"src="http://mimediamanzana.pe/wp-content/themes/default-mobile/img/img-mobile/ico_ambos_segustan.png" alt="">
        <span>Ambos se gustan</span></a>
      </li>

      <li class="hide-on-med-and-up"><a class="waves-effect" href="#!/monedas">
          <i class="material-icons" style="color: #343a48 !important;">monetization_on</i>
          <span>Monedas</span></a>
      </li>

    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</aside>

<div id="main">

  <div class="wrapper all-height">

    <ng-view class="all-height"></ng-view>

  </div>

</div>

<aside class="sidebar-rigth hide-on-med-and-down">
  <div class="opacity"></div>
  <ul id="monedas" class="side-nav fixed sidebar-monedas">
    <h5 class="center-align">APPLE MONEDAS</h5>
    <div class="categorias">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header"><i class="material-icons">swap_vertical_circle</i>Canjealas</div>
          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">track_changes</i>Utilízalas</div>
          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Comparte</div>
          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
        </li>
      </ul>
    </div>
   </ul>
   <a href="" data-activates="monedas" class="show-on-large button-monedas"><i class="material-icons">menu</i></a>
</aside>


<?php mmm_get_footer(); ?>
