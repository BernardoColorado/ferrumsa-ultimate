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

    <div class="card rounded-0 border-0">
      <div class="row no-gutters">
        <div class="col-lg-3">
          <img src="{{ base_url() }}/img/producto/{{ producto.getImg() }}" alt="{{ base_url() }}/img/" class="card-img border-0 rounded-0">
          <div class="card-footer p-0">
            <a href="{{ base_url() }}/pdf/{{ producto.getPdf() }}" class="btn btn-warning rounded-0 btn-block text-white">FICHA TÉCNICA</a>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="card-body h-100 border-0 rounded-0 bg-light">
            <h3 class="card-title text-danger text-center text-uppercase">{{ producto.getNombre() }}</h3>
            {% for descripcion in producto.getDescripciones() %}
            <p class="text-dark">{{ descripcion.getTexto() }}</p>
            {% endfor %}
          </div>
        </div>
      </div>
      <div class="row no-gutters">

          <div class="col-lg-12">
            <div class="card-body bg-light">
            <h3 class="card-title text-danger text-center text-uppercase">Acabados Disponibles</h3>
              <div class="row">
              {% for acabado in producto.getAcabados() %}
                <div class="col-lg-2 col-md-3 col-sm-4 mx-auto">
                  <img src="{{ base_url() }}/img/acabado/{{ acabado.getImg() }}" width="100" class="img-fluid rounded-0 my-1"/>
                </div>
              {% endfor %}
              </div>
            </div>
          </div>

      </div>
    </div>


  </div>

</section>
