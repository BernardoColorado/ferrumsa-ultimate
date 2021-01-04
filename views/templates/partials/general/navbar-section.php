  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">

    <a href="{{ base_url() }}/page" class="navbar-brand">
      <img src="{{ base_url() }}/img/logo/ferrumsa-logo-mediano.jpg" width="350" height="" alt="" class="img-fluid">
    </a>

    <ul class="navbar-nav">
      <a class="nav-link text-warning" href="{{socialNetworks.whatsapp}}"><i class="fab fa-whatsapp"></i></a>
      <a class="nav-link text-warning" href="{{socialNetworks.instagram}}" class="text-warning"><i class="fab fa-instagram"></i></a>
      <a class="nav-link text-warning" href="{{socialNetworks.facebook}}" class="text-warning"><i class="fab fa-facebook"></i></a>
      <a class="nav-link text-warning" href="{{socialNetworks.linkedin}}" class="text-warning"><i class="fab fa-linkedin"></i></a>
    </ul>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-danger py-4 sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler navbar-toggler-right text-light" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu  <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto my-2">
          <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}/page">inicio</a>
          <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}/page/quienes-somos">¿quienes somos?</a>
          <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}/page/producto">productos</a>
          <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}/page/contacto">contacto</a>
        </ul>
      </div>
    </div>
  </nav>