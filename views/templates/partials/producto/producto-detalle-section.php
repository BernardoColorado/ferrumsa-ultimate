<section id="producto" class="bg-dark">

  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card rounded-0 border-0">

          <div class="row no-gutters">
            <div class="col-lg-12">
              <div class="card-body bg-danger">
                <h3 class="card-title text-light text-uppercase text-center">productos</h3>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <div class="container py-5">

    <div class="row no-gutters">

      <div class="col-lg-3">
        <div class="card border-0 rounded-0 h-100">
          <img src="{{ base_url() }}/img/producto/{{producto.getImg()}}" alt="" class="card-img border-0 rounded-0">
          <div class="card-footer p-0">
            <a href="{{ base_url() }}/pdf/{{producto.getPdf()}}" class="btn btn-warning rounded-0 btn-block text-white">DATASHEET</a>
          </div>
        </div>
      </div>

      <div class="col-lg-9">
        <div class="card card-body h-100 border-0 rounded-0 bg-light">
          <h3 class="card-title text-danger text-center text-uppercase">{{ producto.getNombre() }}</h3>
          {% for descripcion in producto.getDescripciones() %}
            <p class="text-dark">{{ descripcion.getTexto() }}</p>
          {% endfor %}
        </div>
      </div>

    </div>

    <div class="row no-gutters">
    {% for acabado in producto.getAcabados() %}
      <div class="col-lg-2">
        <img class="img-fluid" src="{{ base_url() }}/img/acabado/{{ acabado.getImg() }}" alt="">
      </div>
    {% endfor %}
    </div>

  </div>
  


</section>
