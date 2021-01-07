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
    <div class="row">
      <div class="col-lg-12">
        <div class="card rounded-0 border-0 bg-light">

          <div class="row no-gutters">
            <div class="col-lg-3">
              <img src="{{ base_url() }}/img/producto/{{ producto.img }}" alt="" class="card-img rounded-0">
            </div>
            <div class="col-lg-9">
              <div class="card-body rounded-0 border-0">
                <h3 class="card-title text-center text-uppercase text-danger">{{producto.nombre}}</h3>
                {% for descripcion in producto.descripciones %}
                  <p class="text-dark">{{descripcion.texto}}</p>
                {% endfor %}
              </div>
            </div>
          </div>

          <div class="row no-gutters">
            <div class="col-lg-3">
              <div class="card-body rounded-0 border-0">
                <a href="{{ base_url() }}/pdf/{{ producto.pdf }}" class="btn btn-warning btn-block rounded-0 text-light">DATASHEET</a>
              </div>            
            </div>
            <div class="col-lg-9">
              <div class="card-body rounded-0 border-0">
                <h4 class="card-title text-center text-uppercase text-warning">acabados disponibles</h4>
              </div>            
            </div>
          </div>

          <div class="row no-gutters">
            <div class="col-lg-4">
              <div class="card-body rounded-0 border-0">
              </div>            
            </div>
            <div class="col-lg-8">
              <div class="card-body rounded-0 border-0">
                <h4 class="card-title text-center text-uppercase text-light">acabados disponibles</h4>
              </div>            
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</section>
