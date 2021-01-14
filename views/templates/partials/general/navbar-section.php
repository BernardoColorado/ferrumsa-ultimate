  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top" id="navbarStatic">
    <div class="collapse navbar-collapse" id="navbarResponsive2">
      <a href="{{ base_url() }}" class="navbar-brand">
        <img src="{{ base_url() }}/img/logo/ferrumsa-logo-mediano.jpg" width="285" height="" alt="" class="img-fluid">
      </a>
      <ul class="navbar-nav w-100 justify-content-end" id="navbarSocial">
        <li class="nav-item mr-3">
          <a href="{{socialNetworks.whatsapp}}">
            <span class="text-danger text-uppercase">horario de atención: </span><br>
            <small class="text-dark ">L-V 8:30 am - 5:30 PM</small><br>
            <span class="text-danger text-uppercase">+52(81) 13 90 67 96</span>
          </a>
        </li>
        <li class="nav-item mt-4"><a class="nav-link text-danger" href="{{socialNetworks.whatsapp}}"><i class="fab fa-whatsapp"></i></a></li>
        <li class="nav-item mt-4"><a class="nav-link text-danger" href="{{socialNetworks.instagram}}" class="text-warning"><i class="fab fa-instagram"></i></a></li>
        <li class="nav-item mt-4"><a class="nav-link text-danger" href="{{socialNetworks.facebook}}" class="text-warning"><i class="fab fa-facebook"></i></a></li>
        <li class="nav-item mt-4"><a class="nav-link text-danger" href="{{socialNetworks.linkedin}}" class="text-warning"><i class="fab fa-linkedin"></i></a></li>
      </ul>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-danger py-2 sticky-top" id="navbarMain">
    <button class="navbar-toggler navbar-toggler-right text-light" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu  <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto my-2">
        <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}">inicio</a>
        <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}/quienes-somos">¿quienes somos?</a>
        <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}/producto">productos</a>
        <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}/contacto">contacto</a>
        <a class="nav-link text-light text-uppercase font-weight-bold mx-5 my-2" href="{{ base_url() }}/cotiza">cotiza</a>
      </ul>
    </div>
  </nav>